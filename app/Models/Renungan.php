<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Renungan extends Model{
    protected $table = "renungan";
    protected $fillable = ['id_user','judul','isi_renungan'];
    // protected $fillable = [];

    // public $timestamps = false;
}