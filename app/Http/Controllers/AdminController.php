<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view("admin.dashboard");
    }
    public function manageAdmission(){
        $admissions = User::where("status", false)->get();
        return view("admin.manageAdmission",compact("admissions"));
    }
    public function manageStudent()
    {
        $students = User::where("status", 1)->get();
        return view("admin.manageStudent", compact("students"));
    }
    public function studentAprove($id)
    {
       User::find($id)->update(["status" => 1]);

        ToastMagic::success('Approved Successfully'); // Show toast
        return redirect()->route("admin.manageStudent"); // Then redirect
    }
}


