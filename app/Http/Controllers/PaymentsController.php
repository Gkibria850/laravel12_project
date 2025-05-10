<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentsModel;
use App\Models\ClassesModel;
use App\Models\StudentsModel;
use Auth;


class PaymentsController extends Controller
{
     public function payments_list(Request $request)
{
    $data['meta_title'] = 'Payments List'; 
    $data['getRecord'] = PaymentsModel::getRecord();
    
    return view('superadmin.payments.list', $data);
}

       public function payments_add()
    {
        $data['meta_title'] = 'classes Add';  
        $data['getStudents'] = StudentsModel::get();
        $data['getClasses'] = ClassesModel::get();
        return view('superadmin.payments.add',$data);
    }

   public function payments_store(Request $request)
{
    

    //dd($request->all());


    // Create a new Payment record
    $save = new PaymentsModel;
    $save->students_id = trim($request->students_id);
    $save->classes_id = trim($request->classes_id);
    $save->father_name = trim($request->father_name);
    $save->amount = trim($request->amount);
    $save->notes = trim($request->notes);
    $save->payment_date = trim($request->payment_date);
    $save->payment_method = trim($request->payment_method);
   $save->status = (int) $request->status;
    $save->created_by_id = Auth::id();
    
    // Save the record in the database
    $save->save();

    // Redirect with success message
    return redirect('superadmin/payments/list')->with('success', 'Payment added successfully');
}

}
