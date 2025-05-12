<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function home(){
        return view("landing.homepage");
    }
    public function apply(Request $req){
        if($req->isMethod("post")){
            $data = $req->validate([
                "name" => "required",
                "contact" => "required|unique:users",
                "email" => "required|email|unique:users",
                "education" => "string|nullable",
                "password" => "required|string",
            ]);

            User::create($data) ;
            ToastMagic::success(' Your application successfully inserted');
            return redirect()->back();
            
        }

        
        return view("landing.apply");
    }
    public function login(Request $reqst){
        if($reqst->isMethod("post")){
            $data = $reqst->validate([
                "email" => "required|email",
                "password" => "required",
            ]);
            if(Auth::attempt($data)){
                if(Auth::user()->isAdmin){
                    return redirect()->route("admin.dashboard");
                }
               return redirect()->route("student.dashboard");
            }
            else{
                ToastMagic::success('invalid Creadintial');
                return redirect()->back();
            }
        }
        return view("landing.login");

    }
    public function studentlogout(){
        Auth::logout();
        return redirect()->route("public.home");
    }
}
