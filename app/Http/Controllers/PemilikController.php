<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilik;

class PemilikController extends Controller
{
    public function index()
    {
        $data = Pemilik::select('*');
        $tableData = (new Pemilik)->getTableProperties();
        $data = $data->searchAllFields($tableData);
        return bd_json($data);
    }

    public function store(Request $request)
    {
        $data = (new Pemilik)->record($request);      
        return bd_json($data);
    }

    public function show($id)
    {
        $data = Pemilik::find($id);
        return bd_json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Pemilik::find($id)->record($request);
        return bd_json($data);
    }

    public function destroy($id)
    {
        $data = Pemilik::find($id);
        if ($data) {
            $data->delete();
        }
        return bd_json($data);
    }
}
