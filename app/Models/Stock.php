<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  protected $primaryKey = 'stock_id';
  public $timestamps = false;
    public function user(){
      return $this->belongsTo('App\Models\User');


    }
  
  }
