<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Excel;

class XcelController extends Controller
{
    public function index()
    {
        // $dir    = '/xampp/htdocs/XcelProject/public/ACCEPT-CONFIRM/';
        // $files = scandir($dir);
        
        // return view('show', [
        //     'filename' => $files
        // ]);
        return view('import');
    }

    public function datashow(Request $request)
    {
        // $name = $value;
        $name = $request->input('filename'); 
        // Excel::import(new FileImport, $name);
        // return redirect('/')->with('success', 'All good!');
        // dd($name);
        return view('showdata', [
            'filename' => $name
        ]);
    }
    public function importClients(Request $request) 
    {
        // $file = $request->file('file')->getRealPath();
        // $results= Excel::load(new UsersImport, request()->file($file));
        // $file = $request->file('file');
        // $file_name = $file->getClientOriginalName();
        // $file->move('file', $file_name);
        // $results =  Excel::import('file/'.$file_name,function($reader)
        // {
        //     $reader->all();
        // })->get();
        // $data = Excel::import($file, function($reader) {})->get();

        
        $path = $request->file('file')->getRealPath();

        $data = Excel::import($path)->get();
        return view('clients',
        [
            'clients'=>$data
        ]);
    }
}