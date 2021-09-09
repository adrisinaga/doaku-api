<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model{
    protected $table = "admin";
    protected $fillable = ['name','email'];
    protected $hidden = [
        'password',
    ];
    // protected $fillable = [];

    // public $timestamps = false;
}