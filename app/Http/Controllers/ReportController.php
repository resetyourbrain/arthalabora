<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class ReportController extends Controller
{
    public function index()
    {
        $data = Report::select('*');
        $tableData = (new Report)->getTableProperties();
        $data = $data->searchAllFields($tableData);
        return bd_json($data);
    }

    public function store(Request $request)
    {
        $data = (new Report)->record($request);      
        return bd_json($data);
    }

    public function show($id)
    {
        $data = Report::find($id);
        return bd_json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Report::find($id)->record($request);
        return bd_json($data);
    }

    public function destroy($id)
    {
        $data = Report::find($id);
        if ($data) {
            $data->delete();
        }
        return bd_json($data);
    }
}
