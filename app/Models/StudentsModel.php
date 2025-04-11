<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Request;

class StudentsModel extends Model
{
    use HasFactory;

    protected $table = 'students';

    public static function getSingle($id)
    {
        return self::find($id);
    }
  
    static public function getRecord()
    {
        $return  = self::select('students.*');
        
      // You can add more filters using $request if needed
      if(!empty(Request::get('id')))
      {
          $return = $return->where('id', '=', Request::get('id'));
      }
      if(!empty(Request::get('name')))
      {
          $return = $return->where('name', 'like', '%' .Request::get('name').'%');
      }
      if(!empty(Request::get('email')))
      {
          $return = $return->where('email', 'like', '%' .Request::get('email').'%');
      }
      if(!empty(Request::get('phone')))
      {
          $return = $return->where('phone', 'like', '%' .Request::get('phone').'%');
      }
      if(!empty(Request::get('roll_number')))
      {
          $return = $return->where('roll_number', 'like', '%' .Request::get('roll_number').'%');
      }
      if(!empty(Request::get('father_name')))
      {
          $return = $return->where('father_name', 'like', '%' .Request::get('father_name').'%');
      }
      if(!empty(Request::get('date_of_birth')))
      {
          $return = $return->where('date_of_birth', 'like', '%' .Request::get('date_of_birth').'%');
      }

         
         $return = $return->orderBy('id', 'asc')->paginate(10);
         return $return;
    }
    // school neme create======================================= 
    public function getCreatedBy()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }


    public function getProfile()
        {
            $profilePicPath = public_path('upload/profile/') . $this->profile_pic;
        
            if (!empty($this->profile_pic) && file_exists($profilePicPath)) {
                return url('upload/profile/' . $this->profile_pic);
            }
        
            return ""; // Return an empty string if no profile picture exists
        }

}
