<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tujuan;

class TujuanController extends Controller
{
    public function index()
    {
        $data = Tujuan::select('*');
        $tableData = (new Tujuan)->getTableProperties();
        $data = $data->searchAllFields($tableData);
        return bd_json($data);
    }

    public function store(Request $request)
    {
        $data = (new Tujuan)->record($request);      
        return bd_json($data);
    }

    public function show($id)
    {
        $data = Tujuan::find($id);
        return bd_json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Tujuan::find($id)->record($request);
        return bd_json($data);
    }

    public function destroy($id)
    {
        $data = Tujuan::find($id);
        if ($data) {
            $data->delete();
        }
        return bd_json($data);
    }
}
