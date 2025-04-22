<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassesModel;

class ClassesController extends Controller
{
    public function classes_list()
    {
        $data['meta_title'] = 'classes List'; 
        $data['getRecord'] = ClassesModel::getRecord();
        return view('superadmin.classes.list',$data);

    }
    public function add_classes()
    {
        $data['meta_title'] = 'classes Add';  
        return view('superadmin.classes.add',$data); 
    }
}
