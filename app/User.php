<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;




class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password','birthday','code','role','school_id'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function isAdmin(){
        return $this->role == 'ادمین' ? true : false;
    }

}








//class User extends Model implements Authenticatable
//{
////    protected $guarded =[];
//    use AuthenticableTrait;
//    use Notifiable;
//
//    protected $table = 'users';
//    protected $hidden = ['password', 'remember_token'];
//    protected $fillable = [
//        'name', 'email', 'password','birthday','code','role'
//    ];
//
//
//    public function students()
//    {
//        return $this->hasMany(Student::class);
//    }
//    public function teachers()
//    {
//        return $this->hasMany(Teacher::class);
//    }
//    public function school()
//    {
//        return $this->belongsTo(School::class);
//    }
//}