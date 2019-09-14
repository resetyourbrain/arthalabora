<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toko;

class TokoController extends Controller
{
    
    public function index()
    {
        $data = Toko::select('*');
        $tableData = (new Toko)->getTableProperties();
        $data = $data->searchAllFields($tableData);
        return bd_json($data);
    }

    public function store(Request $request)
    {
        $data = (new Toko)->record($request);      
        return bd_json($data);
    }

    public function show($id)
    {
        $data = Toko::find($id);
        return bd_json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Toko::find($id)->record($request);
        return bd_json($data);
    }

    public function destroy($id)
    {
        $data = Toko::find($id);
        if ($data) {
            $data->delete();
        }
        return bd_json($data);
    }

}
