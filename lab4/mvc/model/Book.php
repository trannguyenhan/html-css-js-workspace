<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Book {
    public $title;
    public $author;
    public $description;
    public function __construct($title, $author, $description) {
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
    }
}