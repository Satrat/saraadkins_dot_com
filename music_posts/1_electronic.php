<?php

include_once('./classes/music_post.php');

$post = new MusicPost();
$post->title = 'Generative & Electronic';
$post->name = 'electronic';
$post->card = '/Images/electronic_music.jpg';
$post->content = '
<p>My work lies at the intersection of music and technology, with a focus on designing generative music
algorithms for live performances. Many of my pieces explore how the randomness and automation of an algorithm can be useful
to a musician\'s creative process as they improvise. I aim to create generative and algorithmic music frameworks that are
intuitive for musicians to make music with. </p>
<p>This past June, I led a workshop hosted by Music Hackspace in London to teach composers and producers how they can incorporate machine learning 
and AI into their creative practice. The talk was geared to creatives with no prior background in programming or ML. We started with a light 
introduction to RNN and VAE architectures, then I walked participants through freely available VSTs, web apps and Max externals that utilize 
these models for melody generation and timbre transfer. Check out the full workship recording below!</p> 
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/dQfN4hL_YIk" title="YouTube video player" frameborder="0" 
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
<p>When I first moved to London in September 2021, I attended a SuperCollider Live Coding Music workshop led by Shelly Knotts. I became inspired 
by this new way of making music, and loved the concept of projecting the music\'s source code as a visual during performance. 
Live coding seemed like a perfect interface for incorporating AI music algorithms, as much of the melody generation is done using pattern generators 
and other algorithmic composition techniques. I decided to use live coding as a framework for my Masters thesis, and am currently working on a 
model for generating loopable phrases for algorave performances. Aside from my thesis work, I\'ve worked on my own SuperCollider sets and have 
performed at Electronic Music Open Mic Nights around London. A recording of a set I did at The Crypt in Camberwell is included below.</p>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/wLC_8c2yc7k" title="YouTube video player" frameborder="0" 
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
<p>For electronic composition, generative or not, I use SuperCollider, Max MSP, PureData, Logic Pro X and Python. Below are some selected tracks
from my electronic composition projects. My algorithmic piece "Machine Cycle" was premiered in 2018 by the
Carnegie Mellon Exploded Ensemble. My generative composition "Color Bursts", created with Julian Koreniowsky, ran
as sound installation in the Phipps Botanical butterfly garden for 4 months. For the technical breakdown of the generative pieces, check out my
<a href="http://saraadkins.com/portfolio.html">software portfolio page</a>.</p>
';

$post->playlist = Array();

$post->playlist[] = new Song(
  "Lime Stone",
  "",
  "Electronic soundtrack of a walk through an underground limestone mine, composed in Logic.",
  "/Audio/Electronic/sadkins_sound_glitter.mp3" 
);
$post->playlist[] = new Song(
  "Machine Cycle",
  "",
  "Algorithmic composition that utilizes Markov chains to create an improvizational loop between a performer and generative agent.",
  "/Audio/Electronic/Machine_Cycle.mp3" 
);
$post->playlist[] = new Song(
  "Music Box",
  "",
  "Granular synthesis composition portraying a rogue music box, created using Nyquist and Audacity.",
  "/Audio/Electronic/sadkins_p7_comp.mp3" 
);
$post->playlist[] = new Song(
  "Color Bursts",
  "",
  "Collaboration with Julian Koreniowsky. Generative composition created with PureData and Logic, inspired by the vibrant flowers in a Pittsburgh butterfly garden.",
  "/Audio/Electronic/Color_Bursts.mp3" 
);
$post->playlist[] = new Song(
  "Not a Chance in Hell",
  "",
  "Short intro theme for an online Dungeons and Dragons campaign, composed in Logic.",
  "/Audio/Electronic/DnD_Theme.mp3"
);

?>

