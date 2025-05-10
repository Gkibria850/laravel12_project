<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentsModel;
use Auth;
use Hash;
use Str;

class StudentController extends Controller
{
    public function student_list(Request $request)
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
        $save = new StudentsModel;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->phone = trim($request->phone);
        $save->roll_number = trim($request->roll_number);
        $save->address = trim($request->address);
        $save->permanent_address = trim($request->permanent_address);
        $save->status = trim($request->status);
        $save->blood_group = trim($request->blood_group);
        $save->father_name = trim($request->father_name);
        $save->mother_name = trim($request->mother_name);
        $save->date_of_birth = trim($request->date_of_birth);
        $save->gender = trim($request->gender);
        $save->religion = trim($request->religion);
        $save->admission_date = trim($request->admission_date);
        $save->created_by_id = Auth::id();
    
        // Save user to the database
      
        //Handle profile picture upload
        if ($request->hasFile('profile_pic')) {
            $image = $request->file('profile_pic');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('upload/profile/');
            $image->move($destinationPath, $image_name);

            // Update the user's profile picture
            $save->profile_pic = $image_name;
            $save->save();
        }

        $save->save();
         // Redirect with success message
         return redirect('superadmin/student/list')->with('success', 'Student created successfully');

     }
     public function edit_student($id)
     {
        $data['meta_title'] = 'Edit Student'; 
        $data['getRecord'] = StudentsModel::find($id);
        return view('superadmin.students.edit',$data);
     }
     public function editupdate_student(Request $request, $id){
        $save = StudentsModel::find($id);
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->phone = trim($request->phone);
        $save->roll_number = trim($request->roll_number);
        $save->address = trim($request->address);
        $save->permanent_address = trim($request->permanent_address);
        $save->status = trim($request->status);
        $save->blood_group = trim($request->blood_group);
        $save->father_name = trim($request->father_name);
        $save->mother_name = trim($request->mother_name);
        $save->date_of_birth = trim($request->date_of_birth);
        $save->gender = trim($request->gender);
        $save->religion = trim($request->religion);
        $save->status = (int) $request->status;
        $save->admission_date = trim($request->admission_date);
        $save->edited_by_id = Auth::id();
       

             // Handle profile picture upload

          if ($request->hasFile('profile_pic')) {
            $image = $request->file('profile_pic');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('upload/profile/');
        
            // Delete previous image if exists
            if (!empty($save->profile_pic)) {
                $deleteimg = $destinationPath . $save->profile_pic;
                if (file_exists($deleteimg)) {
                    unlink($deleteimg);
                }
            }
        
            // Move new image to destination
            $image->move($destinationPath, $image_name);
        
            // Update and save profile picture
            $save->profile_pic = $image_name;
            $save->save();
        }
        



        $save->save();

        return redirect('superadmin/student/list')->with('success', 'Student Edit Update  successfully');
     }
    //  public function student_destroy($id)
    //  {
    //      $student = StudentsModel::getSingle($id);
     
    //      if (!$student) {
    //          return redirect('superadmin/student/list')->with('error', 'Student not found');
    //      }
     
    //      $student->is_delete = 1;
    //      $student->save();
     
    //      return redirect('superadmin/student/list')->with('success', 'Student deleted successfully');
    //  }
    public function student_destroy($id){
        //$student = StudentsModel::find($id)->delete();
        $student = StudentsModel::getSingle($id);
        $student->is_delete = 1;
         $student->deleted_by_id = Auth::id();
         $student->save();
        return redirect('superadmin/student/list')->with('success', 'Student deleted successfully');

    }
     
}

