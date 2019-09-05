<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surveys extends Model
{
    protected $table='survey';
    public $primaryKey='id';
    protected $fillable=['title','company_id'];
    protected $timestampt = false;

    public function Company() {
        return $this->belongsTo('App\Company',
            'company_id','id');
    }
}
