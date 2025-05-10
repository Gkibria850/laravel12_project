<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeachersModel;
use Auth;
use Hash;
use Str;

class TeacherController extends Controller
{
  public function teacher_list()
  {
    $data['meta_title'] = 'Teachers List'; 
    $data['getRecord'] = TeachersModel::getRecord();
    return view('superadmin.teachers.list',$data);
  }
public function add_teacher()
{
    $data['meta_title'] = 'Add Teacher'; 
    return view('superadmin.teachers.add',$data);
}

public function store_teacher(Request  $request)
{
        //dd($request->all());
        $save = new TeachersModel;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->father_name = trim($request->father_name);
        $save->mother_name = trim($request->mother_name);
        $save->gender = trim($request->gender);
        $save->religion = trim($request->religion);
        $save->current_address = trim($request->current_address);
        $save->permanent_address = trim($request->permanent_address);
        $save->date_of_birth = trim($request->date_of_birth);
        $save->date_of_joining = trim($request->date_of_joining);
        $save->blood_group = trim($request->blood_group);
        $save->mobile_number = trim($request->mobile_number);
        $save->marital_status = trim($request->marital_status);
        $save->specialization= trim($request->specialization);
        $save->qualification = trim($request->qualification);
        $save->work_exprince = trim($request->work_exprince);
        $save->status = trim($request->status);
       
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
         return redirect('superadmin/teacher/list')->with('success', 'Teacher created successfully');

}
public function edit_teacher($id)
{
   $data['meta_title'] = 'Edit Teacher'; 
   $data['getRecord'] = TeachersModel::find($id);
   return view('superadmin.teachers.edit',$data);
}
public function editupdate_teacher(Request $request, $id)
{
    $save = TeachersModel::find($id);
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->father_name = trim($request->father_name);
        $save->mother_name = trim($request->mother_name);
        $save->gender = trim($request->gender);
        $save->religion = trim($request->religion);
        $save->current_address = trim($request->current_address);
        $save->permanent_address = trim($request->permanent_address);
        $save->date_of_birth = trim($request->date_of_birth);
        $save->date_of_joining = trim($request->date_of_joining);
        $save->blood_group = trim($request->blood_group);
        $save->mobile_number = trim($request->mobile_number);
        $save->marital_status = trim($request->marital_status);
        $save->specialization= trim($request->specialization);
        $save->qualification = trim($request->qualification);
        $save->work_exprince = trim($request->work_exprince);
        $save->status = trim($request->status);
       
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

        return redirect('superadmin/teacher/list')->with('success', 'Student Edit Update  successfully');
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
    public function teacher_destroy($id){
        //$teacher = TeachersModel::find($id)->delete();
        $teacher = TeachersModel::getSingle($id);
        $teacher->is_delete = 1;
        $teacher->deleted_by_id = Auth::id();
         $teacher->save();
        return redirect('superadmin/teacher/list')->with('success', 'Teacher deleted successfully');

    }
 
}
