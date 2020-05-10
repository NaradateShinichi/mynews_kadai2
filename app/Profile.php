<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    
    //
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
        
    //PHP/Laravel 17 課題↓
    public function histories()
    {
      return $this->hasMany('App\ProfileHistory');

    }
    //PHP/Laravel 17 課題↑
}
