<?php

namespace App\Http\Controllers;

use App\CsvData;
use App\Models\Waiting;
use Illuminate\Http\Request;



class ImportController extends Controller
{
    public function index()
    {
        return view('admin/import/index');
    }

    

    public function processImport(Request $request)
    {
        $this->validate($request, [
            'csv_file' => ['required', 'mimes:csv,txt', 'file']
        ]);

        $path = $request->csv_file->getRealPath();

       
        $data = array_map('str_getcsv', file($path));
        $data = array_slice($data,1);
        $parts = array_chunk($data, 500);
        
         
        foreach ($data as  $row) {

            $waiting = new Waiting();

            foreach (config('csv.db_fields') as $index => $field) {
               
                $waiting->$field = $row[$index];

            }

            $waiting->save();
            
            
        }

        return redirect()->route('wait.index')->with('success', 'File Uploading UnderProcess');
    }


}
