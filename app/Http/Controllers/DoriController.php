<?php

namespace App\Http\Controllers;

use App\Models\dori;
use Illuminate\Http\Request;


class DoriController extends Controller
{
 public function view(){
    return view('view');
 }

 public function store(Request $req){
    $validated = $req->validate([
        'name' => 'required|max:20',
        'email' => 'required',
    ]);
    $user = new dori();
    $user->name = $req['name'];
    $user->email = $req['email'];
    $user->password = $req['password'];
    $user->save();
    return view('view')->with('data inserted');
 }
}
