<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('model/Book.php');
class Model {
    public function getBookList() {
        return array(
            "Jungle Book" => new Book("Jungle Book", "R.Kipling", "A classic book"),
            "Moonwalker" => new Book("Moonwalker", "J.Walker", ""),
            "PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")
        );
    }
    public function getBook($title) {
        $allBooks = $this->getBookList();
        return $allBooks[$title];
    }
}