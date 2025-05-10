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

        //Search start
        if(!empty(Request::get('id')))
        {
            $return = $return->where('classes.id', '=', Request::get('id'));
        }
        if(!empty(Request::get('subjects_id')))
        {
            $return = $return->where('subjects.name', 'like', '%' .Request::get('subjects_id').'%');
        }
        if(!empty(Request::get('teachers_id')))
        {
            $return = $return->where('teachers.name', 'like', '%' .Request::get('teachers_id').'%');
        }
        if(!empty(Request::get('room_number')))
        {
            $return = $return->where('classes.room_number', 'like', '%' .Request::get('room_number').'%');
        }
        if(!empty(Request::get('start_time')))
        {
            $return = $return->where('classes.start_time', 'like', '%' .Request::get('start_time').'%');
        }
        if(!empty(Request::get('end_time')))
        {
            $return = $return->where('classes.end_time', 'like', '%' .Request::get('end_time').'%');
        }
        //Search end
        $return = $return->where('classes.is_delete', '=', 0)
                         // ->where('classes.status', '=', 1)
                         ->orderBy('classes.id', 'asc')
                         ->paginate(10);
    
        return $return;
    }
    
}
