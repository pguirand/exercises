<?php 

class Song {
    public $name;
    public $numberofPlays;

    public function __construct(string $name, int $numberofPlays) {
        $this->name = $name;
        $this->numberofPlays = $numberofPlays;
    }

    public function Infos_Song() {
        print "Song name : ".$this->name." | Nb of Plays : ". $this->numberofPlays. PHP_EOL;
    }
}