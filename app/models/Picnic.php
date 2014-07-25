<?php

class Picnic extends Eloquent {

	protected $fillable = array('name', 'taste_level');

	public function bears() {
		return $this->belongsToMany('Bear'. 'bears_picnics', 'picnic_id', 'bear_id');
	}
}