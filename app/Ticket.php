<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //protected $fillable = ['title', 'content', 'slug', 'status', 'user_id']; //make the column mass assignable
    	protected $guarded = ['id'];
    	public function comments(){
		return $this->hasMany('App\Comment', 'post_id');
	}
}
