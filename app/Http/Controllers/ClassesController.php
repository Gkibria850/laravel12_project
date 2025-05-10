<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassesModel;
use App\Models\SubjectsModel;
use App\Models\TeachersModel;
use Auth;

class ClassesController extends Controller
{
    public function classes_list(Request $request)
    {
        $data['meta_title'] = 'classes List'; 
        $data['getRecord'] = ClassesModel::getRecord();
        return view('superadmin.classes.list',$data);

    }
    public function add_classes()
    {
        $data['meta_title'] = 'classes Add';  
        $data['getSubjects'] = SubjectsModel::get();
        $data['getTeachers'] = TeachersModel::get();
        return view('superadmin.classes.add',$data); 
    }
    public function store_classes(Request $request)
    {
         //dd($request->all());
         $save = new ClassesModel;
         $save->subjects_id = trim($request->subjects_id);
         $save->teachers_id = trim($request->teachers_id);
         $save->start_time = trim($request->start_time);
         $save->end_time = trim($request->end_time);
         $save->room_number = trim($request->room_number);
         $save->created_by_id = Auth::id();
        $save->save();
         // Redirect with success message
         return redirect('superadmin/classes/list')->with('success', 'Classes created successfully'); 
    }
    public function edit_classes($id){
        $data['meta_title'] = 'Edit Classes';
        $data['getSubjects'] = SubjectsModel::get();
        $data['getTeachers'] = TeachersModel::get();
        $data['getRecord'] = ClassesModel::find($id); 
        return view('superadmin/classes/edit',$data);
    }
    public function editupdate_classes(Request $request, $id){
         //dd($request->all());
         $save = ClassesModel::find($id);
         $save->subjects_id = trim($request->subjects_id);
         $save->teachers_id = trim($request->teachers_id);
         $save->start_time = trim($request->start_time);
         $save->end_time = trim($request->end_time);
         $save->room_number = trim($request->room_number);
         $save->edited_by_id = Auth::id();
        $save->save();
         // Redirect with success message
         return redirect('superadmin/classes/list')->with('success', 'Classes Edited successfully'); 
    }
    public function classes_destroy($id){

        $student = ClassesModel::getSingle($id);
        $student->is_delete = 1;
        $student->deleted_by_id = Auth::id();
         $student->save();
        return redirect('superadmin/classes/list')->with('success', 'Classes Delate successfully'); 
    }
}
