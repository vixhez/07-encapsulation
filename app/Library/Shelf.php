<?php

namespace App\Library;

class Shelf
{
    private $book;

    public function __construct()
    {
        $this->book = collect();
    }

    public function addBook(Book $book) : Shelf
    {
        $this->book->push($book);
        return $this;

    }

    public function titles() : array
    {
        return $this->book->map(function($book) {
            return $book->title();
        })->all();
    }
}