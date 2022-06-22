<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use View;
use Excel;
use DB;
use App\Imports\UsersImport;
use App\Models\User;

class usercontroller extends Controller
{
    public function import(Request $req){
        $import = new UsersImport();
        $import->sheets('firstsheetimport','secondsheetimport');
        $data = Excel::toArray($import,$req->file('file'));
        return $this->Validation($data);
        
        // return View::make('welcome')
        // ->with('Import',$count)
        // ->with('rejected',$rejected)
        // ->with('msg',$msg)
        // ;
}

public function Validation($dataa)
{
    $dbemail = User::select('email')->get()->toArray();
    for ($i=1; $i < sizeof($data['firstsheetimport']); $i++) {
        for ($j=1; $j < sizeof($data['secondsheetimport']); $j++) {
            $rejected=0;
            $msg=[];
            if ($data['firstsheetimport'][$i][0]==$data['secondsheetimport'][$j][0]) {
                $datarr=[$data['firstsheetimport'][$i][0],$data['firstsheetimport'][$i][1],$data['secondsheetimport'][$j][1],
                $data['secondsheetimport'][$j][0],$data['secondsheetimport'][$j][1],$data['secondsheetimport'][$j][2]];
                for ($k=0; $k < sizeof($datarr); $k++) { 
                    if ($datarr[$k]==null) {
                        echo '<pre>';
                        echo $i;
                        print_r($datarr);
                        echo '<pre>';
                        return $datarr;
                        break;
                    }}
                    for ($l=0; $l < sizeof($dbemail); $l++) { 
                    if ($data['firstsheetimport'][$i][1]!=$dbemail[$l]) {
                                DB::table('users')->insert([
                                    'name'=>$data['firstsheetimport'][$i][0],
                                    'email'=>$data['firstsheetimport'][$i][1],
                                    'password'=>$data['firstsheetimport'][$i][2],
                                    'age'=>$data['secondsheetimport'][$j][1],
                                    'address'=>$data['secondsheetimport'][$j][2]
                                ]);  
                            }
                          
                            else{
                                echo'Duplicate email found';
                            }
            
                    }
                
            }
            }}
     
}





}


