<?php

    class Movie {
        
        public $title;
        public $year;
        public $genre;
        public $duration;
        public $rating = 0;
        

        public function __construct($_title, $_year){
            $this->title = $_title;
            $this->year = $_year;
            $this->genre = $_genre;
            $this->duration = $_duration;
        }

        public function getRating(){
            return ($this->rating / 2);
        }

    }

    $matrix_resurrection = new Movie ('MATRIX RESURRECTION', '2021');
    $matrix_resurrection ->genre = 'Science Fiction';
    $matrix_resurrection ->duration = '142';
    $matrix_resurrection ->rating = 4;

    $matrix_reloaded = new Movie ('MATRIX RELOADED', '2003');
    $matrix_reloaded ->genre = 'Science Fiction';
    $matrix_reloaded ->duration = '138';
    $matrix_reloaded ->rating = 10;

    $matrix_revolutions = new Movie ('MATRIX REVOLUTION', '2003');
    $matrix_revolutions ->genre = 'Science Fiction';
    $matrix_revolutions ->duration = '129';
    $matrix_revolutions ->rating = 7;

    $matrix = new Movie ('MATRIX', '1999');
    $matrix ->genre = 'Science Fiction';
    $matrix ->duration = '136';
    $matrix ->rating = 8;
?>