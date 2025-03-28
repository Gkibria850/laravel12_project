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
            echo"sup Dashboard"; die();

        }else if(Auth::User()->is_role == 1)
        {
            echo"ad Dashboard"; die();

        }else if(Auth::User()->is_role == 0){
           echo"User Dashboard"; die();
        }
    }
}
