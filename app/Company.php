<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Company extends Model
{

    protected $table='companies';
    public $primaryKey='id';
    protected $fillable=['name','person','phone'];
    protected $timestampt = false;

    public function Company() {
        return $this->hasMany('App\Surveys');
    }
    public static function getData() {
        DB::table('companies')->get();
    }
}
