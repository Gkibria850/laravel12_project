<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SuperAdminController extends Controller
{
    public function user_list(Request $request)
    {
        // User list logic
        $data['meta_title'] = 'User List'; 
       // $data['getRecord'] = User::whereIn('is_role', [0, 1])->get();
       $data['getRecord'] = User::getRecord($request);
        return view('superadmin.user.list', $data);
    }
    public function user_delete($id)
    {
        //User::find($id)->delete();
        
        return redirect()->back()->with('error', 'Record Delete Successfully');
    }
}
