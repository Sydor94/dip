<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id','name', 'email', 'address','cart','updated_at','created_at'
    ]; //
}
