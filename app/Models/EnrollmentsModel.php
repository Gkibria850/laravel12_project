<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Request;

class EnrollmentsModel extends Model
{
    use HasFactory;

    protected $table = 'enrollments';

     public function student()
        {
            return $this->belongsTo(StudentsModel::class, 'students_id');
        }

    public function class()
        {
            return $this->belongsTo(ClassesModel::class, 'classes_id');
        }
    public static function getSingle($id)
    {
        return self::find($id);
    }

    public function getCreatedBy()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    static public function getRecord()
{
    $return = self::select(
        'enrollments.*',
        'students.name as students_name',
        'classes.room_number as room_number'
    );

    $return = $return
        ->join('students', 'students.id', '=', 'enrollments.students_id')
        ->join('classes', 'classes.id', '=', 'enrollments.classes_id'); // <-- FIXED JOIN

      //Search start
        if(!empty(Request::get('id')))
        {
            $return = $return->where('enrollments.id', '=', Request::get('id'));
        }
        if(!empty(Request::get('students_id')))
        {
            $return = $return->where('students.name', 'like', '%' .Request::get('students_id').'%');
        }
         if(!empty(Request::get('classes_id')))
        {
            $return = $return->where('classes.room_number', 'like', '%' .Request::get('classes_id').'%');
        }
         if(!empty(Request::get('enrollment_date')))
        {
            $return = $return->where('enrollments.enrollment_date', 'like', '%' .Request::get('enrollment_date').'%');
        }
        $return = $return->where('enrollments.is_delete', '=', 0);
        $return = $return->orderBy('enrollments.id', 'asc');
        $return = $return->paginate(10);

    return $return;
}


   
}
