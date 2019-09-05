<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table='questions';
    public $primaryKey='id';
    protected $fillable=['q_text','survey_id','has_free_text'];
    protected $timestampt = false;
}
