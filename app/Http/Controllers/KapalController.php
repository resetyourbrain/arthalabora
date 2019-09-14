<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kapal;

class KapalController extends Controller
{
    
    public function index()
    {
        $data = Kapal::select('*');
        $tableData = (new Kapal)->getTableProperties();
        $data = $data->searchAllFields($tableData);
        return bd_json($data);
    }

    public function store(Request $request)
    {
        $data = (new Kapal)->record($request);      
        return bd_json($data);
    }

    public function show($id)
    {
        $data = Kapal::find($id);
        return bd_json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Kapal::find($id)->record($request);
        return bd_json($data);
    }

    public function destroy($id)
    {
        $data = Kapal::find($id);
        if ($data) {
            $data->delete();
        }
        return bd_json($data);
    }

}
