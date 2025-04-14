<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Request;

class TeachersModel extends Model
{
    use HasFactory;

    protected $table = 'teachers';

    public static function getSingle($id)
    {
        return self::find($id);
    }

    public function getProfile()
    {
        $profilePicPath = public_path('upload/profile/') . $this->profile_pic;
    
        if (!empty($this->profile_pic) && file_exists($profilePicPath)) {
            return url('upload/profile/' . $this->profile_pic);
        }
    
        return ""; // Return an empty string if no profile picture exists
    }

    static public function getRecord()
    {
        $return  = self::select('teachers.*');
        
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
      if(!empty(Request::get('mobile_number')))
      {
          $return = $return->where('mobile_number', 'like', '%' .Request::get('mobile_number').'%');
      }
      if(!empty(Request::get('roll_number')))
      {
          $return = $return->where('roll_number', 'like', '%' .Request::get('roll_number').'%');
      }
      if(!empty(Request::get('father_name')))
      {
          $return = $return->where('father_name', 'like', '%' .Request::get('father_name').'%');
      }
      if(!empty(Request::get('date_of_joining')))
      {
          $return = $return->where('date_of_joining', 'like', '%' .Request::get('date_of_joining').'%');
      }
  
         
         $return = $return->orderBy('id', 'asc')
         ->where('is_delete', '=', 0)
        ->where('status', '=', 1)
        ->paginate(10);
         return $return;
    }


}
