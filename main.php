<?php 

declare(strict_types=1); #Strictly respected the declared types

require_once "songs.php";
require_once "playlists.php";


$playlist = new Playlist();
$song1 = new Song("Power Of Love", 150);
$song2 = new Song("Hero", 250);
$song3 = new Song("I Love You", 350);
$song4 = new Song("Please Forgive me", 120);
$song5 = new Song("Si tu te vas", 190);



$song1->Infos_Song();   
$playlist->addSong($song1);
$playlist->addSong($song2);
$playlist->addSong($song3);
$playlist->addSong($song4);
$playlist->addSong($song5);



print count($playlist->songs). PHP_EOL;

foreach ($playlist->songs as $sg) {
    print $sg->name . PHP_EOL;
}

if ($playlist->getLength()< 5) {
    print "Short Playlist". PHP_EOL;
} else {
    print "Adequalte Playlist...". PHP_EOL;
}