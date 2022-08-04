<?php

include_once('./classes/music_post.php');
include_once('./classes/song.php');

$post = new MusicPost();
$post->title = 'Audio Engineering';
$post->name = 'audio_engineering';
$post->card = '/Images/generative_music.jpg';
$post->content = '
<p>During my undergraduate degree at Carnegie Mellon, I worked as a sound engineer in the Vladmir Recording Studio. I was
responsible for running recording sessions and mixing tracks for local Pittsburgh artists. Below are several samples
of my mixing and mastering work from a variety of genres. All tracks were recorded and edited using Pro Tools.</p>
';

$post->playlist = Array();

$post->playlist[] = new Song(
  "Alpine",
  "",
  "New age rock cello. Composed and performed by Simon Cummings.",
  "/Audio/Mastering/Alpine.mp3"
);
$post->playlist[] = new Song(
  "Evergreen",
  "",
  "New age rock cello. Composed and performed by Simon Cummings.",
  "/Audio/Mastering/Evergreen.mp3"
);
$post->playlist[] = new Song(
  "1952 Vincent",
  "",
  "Indie acoustic. Composed by Richard Thompson.",
  "/Audio/Mastering/1952 Vincent.mp3"
);
$post->playlist[] = new Song(
  "Parchman Farm",
  "",
  "Blues guitar. Composed by Bukka White.",
  "/Audio/Mastering/Parchman Farm.mp3"
);
$post->playlist[] = new Song(
  "Spumoni Bomba",
  "",
  "Jazz Funk. Composed and performed by The Clock Reads.",
  "/Audio/Mastering/Spumoni Bomba.mp3"
);

?>

