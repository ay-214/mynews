<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

protected $guarded = array('id');

public static $rules = array(
    'name' => 'required',
    'gender' => 'required',
    'hobby' => 'required',
    'introduction' => 'required',
);

//PHP/Laravel 17 課題
// Profile Modelに関連付けを行う
public function profile_histories()
{
    return $this->hasMany('App\Models\profile_history');
}
}
