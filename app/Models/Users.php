<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use SoftDeletes;
    protected $fillable=['email','password','first_name','last_name'];
    protected $table="users";
}
