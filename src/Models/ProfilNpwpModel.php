<?php namespace Bantenprov\ProfilNpwp\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The ProfilNpwpModel class.
 *
 * @package Bantenprov\ProfilNpwp
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilNpwpModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'profil_npwp';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = ["user_id","no_npwp","nama_terdaftar","tgl_daftar","alamat_terdaftar","status"];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

        public function getUser(){
            return $this->belongsTo('App\User','user_id');
        }
}
