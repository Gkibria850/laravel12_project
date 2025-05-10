<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Request;

class PaymentsModel extends Model
{
    use HasFactory;

     protected $table = 'payments';

      public static function getSingle($id)
    {
        return self::find($id);
    }

    public function getCreatedBy()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
     public function student()
        {
            return $this->belongsTo(StudentsModel::class, 'students_id');
        }

    public function class()
        {
            return $this->belongsTo(ClassesModel::class, 'classes_id');
            
      
        }
 static public function getRecord()
{
    return self::select(
            'payments.*',
            'students.name as students_name',
            'classes.name as classes_name'
        )
        ->join('students', 'students.id', '=', 'payments.students_id')
        ->join('classes', 'classes.id', '=', 'payments.classes_id')
        ->where('payments.is_delete', '=', 0)
        ->where('payments.status', '=', 1)
        ->orderBy('payments.id', 'asc')
        ->paginate(10);
}

}
