<?php

namespace App\Library;

class Book
{
    private $title;
    private $noOfPages;
    private $currentPage = 1;

    public function __construct(string $title, int $noOfPages)
    {
        $this->title = $title;
        $this->noOfPages = $noOfPages;
    }

    public function title() : string
    {
        return $this->title;
    }

    public function read($n) : Book
    {
        $currentPage = $this->currentPage += $n;
        return $this; 
    }

    public function currentPage() : int
    {
        return $this->currentPage;
    }
}