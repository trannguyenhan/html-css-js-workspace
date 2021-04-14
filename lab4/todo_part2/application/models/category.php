<?php

class Category extends VanillaModel {
		var $hasMany = array('Product' => 'Product');
		var $hasOne = array('Parent' => 'Category');

}