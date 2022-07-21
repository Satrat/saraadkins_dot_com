<?php

class Song {
    public $title;
    public $artist;
    public $description;
    public $mp3;

    public function __construct($title, $artist, $description, $mp3) {
        $this->title = $title;
        $this->artist = $artist;
        $this->description = $description;
        $this->mp3 = $mp3;
    }
}

?>

