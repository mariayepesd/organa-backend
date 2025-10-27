<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KafkaLog extends Model
{
    protected $fillable = ['topic', 'message', 'status'];
}
