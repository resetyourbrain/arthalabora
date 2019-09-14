<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TallySheet;

class TallySheetController extends Controller
{
    
    public function index()
    {
        $data = TallySheet::select('*');
        $tableData = (new TallySheet)->getTableProperties();
        $data = $data->searchAllFields($tableData);
        return bd_json($data);
    }

    public function store(Request $request)
    {
        $data = (new TallySheet)->record($request);
        $data = $data->recordDetail($request->detail);      
        return bd_json($data);
    }

    public function show($id)
    {
        $data = TallySheet::find($id);
        return bd_json($data);
    }

    public function update(Request $request, $id)
    {
        $data = TallySheet::find($id)->record($request);
        $data = $data->deleteDetail()->recordDetail($request->detail);
        return bd_json($data);
    }

    public function destroy($id)
    {
        $data = TallySheet::find($id);
        if ($data) {
            $data->deleteDetail();
            $data->delete();
        }
        return bd_json($data);
    }

    public function indexWithDetail() 
    {
        $parentData = TallySheet::select('*');
        $detailData = TallySheetDetail::select('*');       
        $data = $parentData->joinModel($detailData, 'tallysheet_detail' , 'tallysheet.id' , 'tallysheet_detail.id_tallysheet');
        $parentTableData = (new TallySheet)->getTableProperties(); 
        $detailTableData = (new TallySheetDetail)->getTableProperties(); 
        $data = $data->searchAllFields($parentTableData,$detailTableData); 
        return bd_json($data);
    }

    public function showWithDetail($id) 
    {
        $parentData = TallySheet::select('*')->where('tallysheet.id','=',$id);
        $detailData = TallySheetDetail::select('*');
        $data = $parentData->joinModel($detailData, 'tallysheet_detail','tallysheet.id','tallysheet_detail.id_tallysheet');  
        return bd_json($data);
    }

}
