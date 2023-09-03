<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDataModel extends Model
{
    use HasFactory;
    protected $table="user_data";
    protected $primaryKey="id";
    protected $fillable=['name','email','phone','address','gender','password'];
}
