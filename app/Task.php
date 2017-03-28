<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['keyword', 'appId', 'country', 'isPageTurning', 'isRealDownloadId', 'isLaunch'];
    public $timestamps = false;
}
