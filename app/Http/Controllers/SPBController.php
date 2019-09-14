<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SPB;

class SPBController extends Controller
{
    public function index()
    {
        $data = SPB::select('*');
        $tableData = (new SPB)->getTableProperties();
        $data = $data->searchAllFields($tableData);
        return bd_json($data);
    }

    public function store(Request $request)
    {
        $data = (new SPB)->record($request);      
        return bd_json($data);
    }

    public function show($id)
    {
        $data = SPB::find($id);
        return bd_json($data);
    }

    public function update(Request $request, $id)
    {
        $data = SPB::find($id)->record($request);
        return bd_json($data);
    }

    public function destroy($id)
    {
        $data = SPB::find($id);
        if ($data) {
            $data->delete();
        }
        return bd_json($data);
    }
}
