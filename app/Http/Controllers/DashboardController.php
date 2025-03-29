<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(Auth::User()->is_role == 2)
        {
            //echo"sup Dashboard"; die();
            $data['meta_title'] = 'Super Admin Dashboard Page';
            $data['getRecord'] = User::find(Auth::User()->id);
            return view('superadmin.dashboard',$data);

        }else if(Auth::User()->is_role == 1)
        {
            //echo"ad Dashboard"; die();
            $data['meta_title'] = 'Admin Dashboard Page';
            $data['getRecord'] = User::find(Auth::User()->id);
            return view('admin.dashboard',$data);

        }else if(Auth::User()->is_role == 0){
           //echo"User Dashboard"; die();
           $data['meta_title'] = 'User Dashboard Page';
           $data['getRecord'] = User::find(Auth::User()->id);
           return view('user.dashboard',$data);
        }
    }
}
