<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    /**
     * @param $value
     * @return string
     */
    public function getIsPageTurningAttribute($value)
    {
        return ucfirst($value);
    }

    public function getIsRealDownloadAttribute($value)
    {
        return ucfirst($value);
    }

    public function getIsLaunchAttribute($value)
    {
        return ucfirst($value);
    }

    public function setIsPageTurningAttribute($isPageTurning)
    {
        if ($this->attributes['isPageTurning'] == 1){
            $this->attributes['isPageTurning'] = true;
        }
        $this->attributes['isPageTurning'] = false;
    }

    public function setIsRealDownloadAttribute($isRealDownload)
    {
        if ($this->attributes['isRealDownload'] == 1){
            $this->attributes['isRealDownload'] = true;
        }
        $this->attributes['isRealDownload'] = false;
    }

    public function setIsLaunchAttribute($isPageTurning)
    {
        if ($this->attributes['isPageTurning'] == 1){
            $this->attributes['isPageTurning'] = true;
        }
        $this->attributes['isPageTurning'] = false;
    }
}
