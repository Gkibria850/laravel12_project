<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Request;


class ClassesModel extends Model
{
    use HasFactory;

    protected $table = 'classes';

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
        $return  = self::select(
            'classes.*',
            'subjects.name as subjects_name',
            'teachers.name as teachers_name'
        );
    
        $return = $return->join('subjects', 'subjects.id', '=', 'classes.subjects_id');
        $return = $return->join('teachers', 'teachers.id', '=', 'classes.teachers_id');
    
        $return = $return->where('classes.is_delete', '=', 0)
                         // ->where('classes.status', '=', 1)
                         ->orderBy('classes.id', 'asc')
                         ->paginate(10);
    
        return $return;
    }
    
}
