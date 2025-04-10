<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentsModel extends Model
{
    use HasFactory;

    protected $table = 'students';
    static public function getRecord()
    {
        $return  = self::select('students.*')
        ->orderBy('id', 'asc')
        ->paginate(10);
        return $return;
    }
}
