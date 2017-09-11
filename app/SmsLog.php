<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsLog extends Model
{
    protected $fillable = ['number', 'misc', 'price', 'status', 'message_id', 'date_sent'];
    protected $dates = ['date_sent'];
}
