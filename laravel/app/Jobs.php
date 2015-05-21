<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Jobs extends Eloquent{

	protected $fillable = [

		'title','contactName','contactNumber','contactEmail','location','salary','companyName','web_link','notes','status','slug'
	];
}