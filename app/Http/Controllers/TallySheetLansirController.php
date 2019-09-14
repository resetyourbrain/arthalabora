<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TallySheetLansir;

class TallySheetLansirController extends Controller
{
    public function index()
    {
        $data = TallySheetLansir::select('*');
        $tableData = (new TallySheetLansir)->getTableProperties();
        $data = $data->searchAllFields($tableData);
        return bd_json($data);
    }

    public function store(Request $request)
    {
        $data = (new TallySheetLansir)->record($request);      
        return bd_json($data);
    }

    public function show($id)
    {
        $data = TallySheetLansir::find($id);
        return bd_json($data);
    }

    public function update(Request $request, $id)
    {
        $data = TallySheetLansir::find($id)->record($request);
        return bd_json($data);
    }

    public function destroy($id)
    {
        $data = TallySheetLansir::find($id);
        if ($data) {
            $data->delete();
        }
        return bd_json($data);
    }
}
