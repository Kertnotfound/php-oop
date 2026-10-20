<?php

// Your code here
class Book
{
  public $title;
  public $author;
  public $year;
  public $price;
  
  public function __construct($title, $author, $year, $price)
  {
    if ($year <= 1000){
              throw new Exception("Book is too old");
  }

    if ($price < 1){
            throw new Exception("Price is too low");
  }
  
    $this->title = $title;
    $this->author = $author;
    $this->year = $year;
    $this->price = $price;
  }

public function getInfo()
  {
      return "{$this->title} by {$this->author} ({$this->year}) - $" . $this->price;
}
}

$book = new Book("Clean Code", "Robert C. Martin", 2008, 39.99);
echo $book->getInfo(); // Clean Code by Robert C. Martin (2008) - $39.99

// This should throw an exception:
// $invalidBook = new Book("Old Book", "Author", 500, 10);
