<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doa extends Model{
    protected $table = "doa";

    protected $fillable = ['isi_doa','id_user','jumlah_orang_berdoa'];

    // public $timestamps = false;
}