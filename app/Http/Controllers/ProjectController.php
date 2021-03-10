<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Exports\ProjectsExport;
use App\Imports\ProjectsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Project;
class ProjectController extends Controller
{
    public function index(){
        return view('admin.import_excel');
    }

    public function importExcelCSV(Request $request){
        $validateData = $request->validate([
            'file'=>'required',
        ]);
        //  dd($request->file('file'));
        // return $request->file('file');
        // $a = new ProjectsImport;
        // $b = $a->model();
        Excel::import(new ProjectsImport, $request->file('file'));
        return back()->with('success', 'Excel Data Import Successfully.');
    }
    
    public function exportExcelCSV($slug){
        return Excel::download(new ProjectsExport, 'projects.'.$slug);
    }
}
