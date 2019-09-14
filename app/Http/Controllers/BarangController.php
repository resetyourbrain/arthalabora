<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    
    public function index()
    {
        $data = Barang::select('*');
        $tableData = (new Barang)->getTableProperties();
        $data = $data->searchAllFields($tableData);
        return bd_json($data);
    }

    public function store(Request $request)
    {
        $data = (new Barang)->record($request);      
        return bd_json($data);
    }

    public function show($id)
    {
        $data = Barang::find($id);
        return bd_json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Barang::find($id)->record($request);
        return bd_json($data);
    }

    public function destroy($id)
    {
        $data = Barang::find($id);
        if ($data) {
            $data->delete();
        }
        return bd_json($data);
    }

}
