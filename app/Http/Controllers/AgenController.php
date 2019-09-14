<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agen;

class AgenController extends Controller
{
    
    public function index()
    {
        $data = Agen::select('*');
        $tableData = (new Agen)->getTableProperties();
        $data = $data->searchAllFields($tableData);
        return bd_json($data);
    }

    public function store(Request $request)
    {
        $data = (new Agen)->record($request);      
        return bd_json($data);
    }

    public function show($id)
    {
        $data = Agen::find($id);
        return bd_json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Agen::find($id)->record($request);
        return bd_json($data);
    }

    public function destroy($id)
    {
        $data = Agen::find($id);
        if ($data) {
            $data->delete();
        }
        return bd_json($data);
    }

}
