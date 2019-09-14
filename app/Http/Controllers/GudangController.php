<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;

class GudangController extends Controller
{
    
    public function index()
    {
        $data = Gudang::select('*');
        $tableData = (new Gudang)->getTableProperties();
        $data = $data->searchAllFields($tableData);
        return bd_json($data);
    }

    public function store(Request $request)
    {
        $data = (new Gudang)->record($request);
        $data = $data->recordDetail($request->detail);      
        return bd_json($data);
    }

    public function show($id)
    {
        $data = Gudang::find($id);
        return bd_json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Gudang::find($id)->record($request);
        $data = $data->deleteDetail()->recordDetail($request->detail);
        return bd_json($data);
    }

    public function destroy($id)
    {
        $data = Gudang::find($id);
        if ($data) {
            $data->deleteDetail();
            $data->delete();
        }
        return bd_json($data);
    }

    public function indexWithDetail() 
    {
        $parentData = Gudang::select('*');
        $detailData = GudangDetail::select('*');       
        $data = $parentData->joinModel($detailData, 'gudang_detail' , 'gudang.id' , 'gudang_detail.id_gudang');
        $parentTableData = (new Gudang)->getTableProperties(); 
        $detailTableData = (new GudangDetail)->getTableProperties(); 
        $data = $data->searchAllFields($parentTableData,$detailTableData); 
        return bd_json($data);
    }

    public function showWithDetail($id) 
    {
        $parentData = Gudang::select('*')->where('gudang.id','=',$id);
        $detailData = GudangDetail::select('*');
        $data = $parentData->joinModel($detailData, 'gudang_detail','gudang.id','gudang_detail.id_gudang');  
        return bd_json($data);
    }

}
