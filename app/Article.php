<?php

namespace uselaravel;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Article extends Model
{
    protected $fillable =[
    'title',
    'body',
    'published_at',
    'media',
    'contact_no'
    ];

    public function setPublishedAtAttribute($date){
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }

    public function setMediaAttribute($media){
        $this->attributes['media'] = $media->getClientOriginalName();
    }

    public function scopePublished($query){

    	$query->where('published_at', '<',Carbon::now());

    }
}
