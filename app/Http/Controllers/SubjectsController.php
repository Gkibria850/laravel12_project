<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectsModel;
use Auth;
use Hash;
use Str;

class SubjectsController extends Controller
{
    public function subject_list()
    {
        $data['meta_title'] = 'Subjects List'; 
        $data['getRecord'] = SubjectsModel::getRecord();
        return view('superadmin.subjects.list',$data);

    }
    public function add_subject()
    {
        $data['meta_title'] = 'Subjects Add';  
        return view('superadmin.subjects.add',$data); 
    }
    public function store_subject(Request $request)
    {
        $save = new SubjectsModel;
        $save->name = trim($request->name);
        $save->description = trim($request->description);
        $save->status = trim($request->status);
        $save->created_by_id = Auth::id();
        $save->save();
         // Redirect with success message
         return redirect('superadmin/subject/list')->with('success', 'Subjects created successfully');

    }
    public function edit_subject($id)
    {
        $data['meta_title'] = 'Edit Student'; 
        $data['getRecord'] = SubjectsModel::find($id);
        return view('superadmin.subjects.edit',$data);
    }
    public function editupdate_subject(Request $request, $id){
        $save = SubjectsModel::find($id);
        $save->name = trim($request->name);
        $save->description = trim($request->description);
        $save->status = trim($request->status);
        $save->edited_by_id = Auth::id();
        $save->save();

        return redirect('superadmin/subject/list')->with('success', 'Subject Edit Update  successfully');

    }
    public function subject_destroy($id){
        //$student = StudentsModel::find($id)->delete();
        $save = SubjectsModel::getSingle($id);
        $save->is_delete = 1;
         $save->deleted_by_id = Auth::id();
        $save->save();
         return redirect('superadmin/subject/list')->with('success', 'Subject deleted  successfully');

    }
}
