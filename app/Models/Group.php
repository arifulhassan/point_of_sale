<?php

namespace App\Models;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['title'];

    public function users()
    {
      return $this->hasMany(User::class);
    }

     // Getting array for select option
    public static function arrayForSelect(){
      $arr = [];
      $groups = Group::all();
      foreach ($groups as $group){
        $arr[$group->id] = $group->title;
      }
      return $arr;
    }
}
