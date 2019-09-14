<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Robek;

class RobekController extends Controller
{
    public function index()
    {
        $data = Robek::select('*');
        $tableData = (new Robek)->getTableProperties();
        $data = $data->searchAllFields($tableData);
        return bd_json($data);
    }

    public function store(Request $request)
    {
        $data = (new Robek)->record($request);      
        return bd_json($data);
    }

    public function show($id)
    {
        $data = Robek::find($id);
        return bd_json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Robek::find($id)->record($request);
        return bd_json($data);
    }

    public function destroy($id)
    {
        $data = Robek::find($id);
        if ($data) {
            $data->delete();
        }
        return bd_json($data);
    }
}
