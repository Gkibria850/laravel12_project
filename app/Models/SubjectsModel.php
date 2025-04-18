<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Request;

class SubjectsModel extends Model
{
    use HasFactory;

    protected $table = 'subjects';

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
        $return  = self::select('subjects.*');
        $return = $return->orderBy('id', 'asc')
        ->where('is_delete', '=', 0)
       ->where('status', '=', 1)
       ->paginate(10);
        return $return;
    }
}
