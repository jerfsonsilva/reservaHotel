<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
	public function qualificacao(){
		return $this->hasOne('App\qualificacao','id','qualificacao-id');
	}
}
