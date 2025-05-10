<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnrollmentsModel;
use App\Models\ClassesModel;
use App\Models\StudentsModel;
use Auth;

class EnrollmentsController extends Controller
{
    public function enrollments_list()
    {
        $data['meta_title'] = 'Enrollments List'; 
        $data['getRecord'] = EnrollmentsModel::getRecord();
        return view('superadmin.enrollments.list', $data);
    }

    public function enrollments_add()
    {
        $data['meta_title'] = 'Enrollments Add'; 
        $data['getStudents'] = StudentsModel::get();
        $data['getClasses'] = ClassesModel::get();
        
        return view('superadmin.enrollments.add', $data);
    }

    public function enrollments_store(Request $request)
    {
        $request->validate([
            'students_id' => 'required|exists:students,id',
            'classes_id' => 'required|exists:classes,id',
            'enrollment_date' => 'required|date',
        ]);

        $enrollment = new EnrollmentsModel();
        $enrollment->students_id = $request->students_id;
        $enrollment->classes_id = $request->classes_id;
        $enrollment->enrollment_date = $request->enrollment_date;
        $enrollment->created_by_id = Auth::id();
        $enrollment->save();

        return redirect('superadmin/enrollments/list')->with('success', 'Enrollment added successfully.');
    }
    public function enrollments_edit($id)
    {
         $data['meta_title'] = 'Edit Classes';
        $data['getStudents'] = StudentsModel::get();
        $data['getClasses'] = ClassesModel::get();
        $data['getRecord'] = EnrollmentsModel::find($id); 
        return view('superadmin.enrollments.edit', $data);
    }
    public function enrollments_editupdate(Request $request, $id){
         $enrollment = EnrollmentsModel::find($id);
        $enrollment->students_id = $request->students_id;
        $enrollment->classes_id = $request->classes_id;
        $enrollment->enrollment_date = $request->enrollment_date;
        $enrollment->edited_by_id = Auth::id();
        $enrollment->save();

        return redirect('superadmin/enrollments/list')->with('success', 'Enrollment Edit successfully.'); 
    }
    public function enrollments_destroy($id){

       $enrollment = EnrollmentsModel::getSingle($id);
       $enrollment->is_delete = 1;
       $enrollment->deleted_by_id = Auth::id();
       $enrollment->save();
          return redirect('superadmin/enrollments/list')->with('success', 'Enrollment Delate successfully'); 
    }

   
}
