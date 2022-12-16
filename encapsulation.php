<?php 

require_once "playlists.php";
require_once "songs.php";

$boyzsongs = new Playlist();

$song = new Song("One Sweet Day", 150);
$listsongs = ['On Bended Knee', 'Song for Mama', 'End of the Road', 'Water Runs Dry'];

print $song->Infos_Song(). PHP_EOL;

$boyzsongs->addSong($listsongs[0]);
$boyzsongs->addSong($listsongs[1]);
$boyzsongs->addSong($listsongs[2]);

$i = 0;

foreach ($boyzsongs->songs as $song) {
    $i += 1;
    print $i. " - ". $song->name. PHP_EOL;
}

