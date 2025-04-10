<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentsModel;
use Auth;
use Hash;
use Str;

class StudentController extends Controller
{
    public function student_list()
    {
        $data['meta_title'] = 'Students List'; 
        $data['getRecord'] = StudentsModel::getRecord();
        return view('superadmin.students.list',$data);

    }
     public function add_student()
     {
        $data['meta_title'] = 'Add Student'; 
        return view('superadmin.students.add',$data);
     }
     public function store_student(Request $request)
     {

        //dd($request->all());
        $save =  new StudentsMode;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->phone = trim($request->phone);
        $save->roll_number = trim($request->roll_number);
        $save->current_address = trim($request->current_address);
        $save->permanent_address= trim($request->permanent_address);
        $save->status = trim($request->status);
        $save->blood_group = trim($request->blood_group);
        $save->father_name = trim($request->father_name);
        $save->mother_name = trim($request->mother_name);
        $save->date_of_birth = trim($request->date_of_birth);
        $save->gender = trim($request->gender);
        $save->religion= trim($request->religion);
        $save->admission_date = trim($request->admission_date);
        $save->created_by_id = Auth::id();
    
        // Save user to the database
        $save->save();
        //Handle profile picture upload
        if ($request->hasFile('profile_pic')) {
            $image = $request->file('profile_pic');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('upload/profile/');
            $image->move($destinationPath, $image_name);

            // Update the user's profile picture
            $user->profile_pic = $image_name;
            $user->save();
        }
         // Redirect with success message
         return redirect('superadmin/students/list')->with('success', 'Student created successfully');

     }
}

