<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Imports\UsersImport;
use App\Models\User;

class usercontroller extends Controller
{
    public function import(Request $req){
        // Excel::import(new UsersImport,$req->file('file'));
        $import = new UsersImport();
        $import->sheets('firstsheetimport','secondsheetimport');
        Excel::import($import,$req->file('file'));
        return  'success';

        // return back()->withStatus('success');
    }
}
