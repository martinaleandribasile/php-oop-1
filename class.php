<?php
class Movies
{
    public $title;
    public $genre;
    public $year;
    public $director;
    public $vote;
    public function __construct($title, $genre, $year, $director)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->director = $director;
    }
    public function setVote($vote)
    {
        $this->vote = $vote;
    }
    public function __set($nome, $value)
    {
        throw new Exception("Cannot add new property \$nome to instance of " . __CLASS__);
    }
};

$movie1 = new Movies('Kill Bill, Vol 1', 'Azione,Thriller', 2003, 'Quentin Tarantino');
$movie2 = new Movies('Kill Bill, Vol 2', 'Azione,Thriller,Drammatico', 2004, 'Quentin Tarantino');
$movie1->setVote(8);
$movie2->setVote(9.5);
$movies[] = $movie1;
$movies[] = $movie2;
