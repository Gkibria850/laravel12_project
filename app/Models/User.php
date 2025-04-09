<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Request;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    static public function getRecord($request){
        $return = self::select('*') // Or specify columns like ['id', 'name', 'email']
            ->whereIn('is_role', [0, 1]);
    
        // You can add more filters using $request if needed
        if(!empty(Request::get('id')))
        {
            $return = $return->where('id', '=',Request::get('id'));
        }
        if(!empty(Request::get('name')))
        {
            $return = $return->where('name', 'like', '%' .Request::get('name').'%');
        }
        if(!empty(Request::get('email')))
        {
            $return = $return->where('email', 'like', '%' .Request::get('email').'%');
        }
        if(!empty(Request::get('created_at')))
        {
            $return = $return->where('created_at', 'like', '%' .Request::get('created_at').'%');
        }

    
        $return = $return->get();
        return $return;
    }
}
