<?php

class Bear extends Eloquent {
	protected $fillable = array('name', 'type', 'danger_level');

	public function fish(){
		return $this->hasOne('Fish');
	}

	public function trees() {
		return $this->hasMany('Tree');
	}

	public function picnics() {
		return $this->belongsToMany('Picnic', 'bears_picnics', 'bear_id', 'picnic_id');
	}
}