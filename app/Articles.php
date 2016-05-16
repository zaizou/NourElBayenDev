<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Articles extends Model {

	protected $fillable=[
    
        'title',
        'body',
        'published_at'
    ];
    
    
    
    public function setPublishedAtAttribute($date){
        
        $this->attributes['published_at']=Carbon::parse($date);
            
}
}
