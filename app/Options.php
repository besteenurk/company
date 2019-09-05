<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $table='options';
    public $primaryKey='id';
    protected $fillable=['text','question_id','survey_id'];
    protected $timestampt = false;
}
