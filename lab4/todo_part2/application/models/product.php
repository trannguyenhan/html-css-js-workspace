<?php

class Product extends VanillaModel {
	var $hasOne = array('Category' => 'Category');
	var $hasManyAndBelongsToMany = array('Tag' => 'Tag');
}