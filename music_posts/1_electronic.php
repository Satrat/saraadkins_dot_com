<?php

include_once('./classes/music_post.php');

$post = new MusicPost();
$post->title = 'Electronic & Generative';
$post->name = 'electronic';
$post->card = 'Images/electronic_music.jpg';
$post->content = '
<p>Sara\'s work lies at the intersection of music and technology, with a focus on designing generative music
algorithms for live performances. Her work explores how the randomness and automation of an algorithm can be useful
to a musician\'s creative process as they improvise. She aims to create generative music frameworks that are
intuitive for musicians to make music with.  Her algorithmic piece "Machine Cycle" was premiered last year by the
Carnegie Mellon Exploded Ensemble. Her generative composition "Color Bursts", created with Julian Koreniowsky, ran
as sound installation in a butterfly garden for 4 months.</p>
<p>For electronic composition, generative or not, Sara\'s weapons of choice are Max MSP, PureData and Logic.  Her
work is inspired by classical music, fantasy soundtracks and of course, algorithms. Below are some selected tracks
of Sara\'s electronic composition projects. For the technical breakdown of her generative pieces, visit her
<a href="http://saraadkins.com/portfolio.html">software portfolio page</a>.</p>
';

$post->playlist = Array();

$post->playlist[] = new Song(
  "Lime Stone",
  "",
  "Electronic soundtrack of a walk through an underground limestone mine, composed in Logic.",
  "./Audio/Electronic/sadkins_sound_glitter.mp3" 
);
$post->playlist[] = new Song(
  "Machine Cycle",
  "",
  "Algorithmic composition that utilizes Markov chains to create an improvizational loop between a performer and generative agent.",
  "./Audio/Electronic/Machine_Cycle.mp3" 
);
$post->playlist[] = new Song(
  "Music Box",
  "",
  "Granular synthesis composition portraying a rogue music box, created using Nyquist and Audacity.",
  "./Audio/Electronic/sadkins_p7_comp.mp3" 
);
$post->playlist[] = new Song(
  "Color Bursts",
  "",
  "Collaboration with Julian Koreniowsky. Generative composition created with PureData and Logic, inspired by the vibrant flowers in a Pittsburgh butterfly garden.",
  "./Audio/Electronic/Color_Bursts.mp3" 
);
$post->playlist[] = new Song(
  "Not a Chance in Hell",
  "",
  "Short intro theme for an online Dungeons and Dragons campaign, composed in Logic.",
  "./Audio/Electronic/DnD_Theme.mp3"
);

?>

