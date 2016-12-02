<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $dates = ['birthday'];

    protected $fillable = [
        'name', 'email', 'phone','address','relation','intro','birthday','knowTime'
    ];

    protected  $hidden =[
        ''
    ];

    public function setBirthdayAttribute($date){
        $this->attributes['birthday'] = Carbon::parse($date);
    }
    public function getBirthdayAttribute(){
        return Carbon::parse($this->attributes['birthday']);
    }

    public function getKnowTimeAttribute(){
        return Carbon::parse($this->attributes['knowTime']);
    }
}
