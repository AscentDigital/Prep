<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['number', 'message', 'misc', 'price', 'type', 'origin', 'total_sms', 'schedule', 'campaign_id', 'company_id'];
}
