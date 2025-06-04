<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personController extends Controller
{
//   public function showpersons() {
//     $persons = DB::table('person')->get();
//     return $persons;
//  }
 public function post(Request $request) {
    $persons = DB::table('person')->paginate(4);
    return view('post')->with('persons', $persons);
}
 public function formadd(Request $request) {
   
  


    return view('formadd');
}


public function addperson(Request $req)
{
    $photoPath = null;

    if ($req->hasFile('photo')) {
        $photoPath = $req->file('photo')->store('photos', 'public');
    }

    $person = DB::table('person')->insert([
        'name' => $req->username,
        'email' => $req->useremail,
        'age' => $req->userage,
        'city' => $req->usercity,
        'description' => $req->userdesc,
        'photo' => $photoPath,
    ]);

    if ($person) {
        return redirect()->route('post');
    } else {
        echo "<h1>Data not added</h1>";
    }
}



public function formupdate(string $id){
    $person = DB::table('person')->find($id);
    return view('formupdate')->with('person',$person);
}
public function updateperson(Request $req, $id)
{
    $photoPath = null;

    if ($req->hasFile('photo')) {
        $photoPath = $req->file('photo')->store('photos', 'public');
    }

    $updateData = [
        'name' => $req->username,
        'email' => $req->useremail,
        'age' => $req->userage,
        'city' => $req->usercity,
        'description' => $req->userdesc,
    ];

    if ($photoPath) {
        $updateData['photo'] = $photoPath;
    }

    DB::table('person')->where('id', $id)->update($updateData);

    return redirect()->route('post');
}







 
 public function person(string $id) {
   
    $person = DB::table('person')->where('id',$id)->get();


    return view('person')->with('person',$person);
}
public function deleteperson(string $id) {
   
  


    $people = DB::table('person')->where('id',$id)->delete();

    if($people){

        return redirect()->route('post');
       
    }
  
}
public function deleteall() {
   
  


    $people = DB::table('person')->truncate();

    if($people){

        return redirect()->route('post');
       
    }
  
}
 
 

}
