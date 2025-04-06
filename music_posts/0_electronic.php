<?php

include_once('./classes/music_post.php');
include_once('./classes/song.php');

$post = new MusicPost();
$post->title = 'Generative & Electronic';
$post->name = 'electronic';
$post->card = '/Images/electronic_music.jpg';
$post->content1 = '
<p>My work focuses on designing generative music algorithms for live performances. I make sound with my guitar and laptop, blending Tidal Cycles live coding with electric 
guitar looping. Beginning as a classically trained guitarist, my music has evolved into a unique conglomeration of glitchy ambient techno—a mix of chopped-up nature sounds 
layered over techno beats, with classical-inspired melodies. I utilize generative ML models and synthesizers in my work, pushing both to their limits to create gnarly timbres.</p>

<p>In October 2024, I was a finalist in the <a href="hhttps://www.aisongcontest.com/all-participants" target="_blank">AI Song Contest</a> for my piece "Echoes of the Synthetic Forest." 
 This immersive soundscape creates the experience of a relaxing walk through a surreal forest filled with robotic birds and crunchy distorted leaves. I trained AI agent for 
 concatenative sound synthesis based on my on compositions for this piece, and performed it live at the televised AI Song Contest Finals in Zurich, Switzerland</p>
';

$post->playlist = Array();

$post->playlist[] = new Song(
  "Echoes of the Synthetic Forest",
  "",
  "Concatenative synthesis model trained on my live code compositions, electric guitar, and percussion. AI Song Contest 2024 finalist.",
  "/Audio/Electronic/kera_synthetic_forest.mp3" 
);
$post->playlist[] = new Song(
  "Forest Walk",
  "",
  "Live coded in Tidal Cycles with guitar looping processed through an Roland GR-55 Synthesizer.",
  "/Audio/Electronic/forest_walk.mp3" 
);
$post->playlist[] = new Song(
  "Techno Rhapsody",
  "",
  "Live coded with Tidal Cycles, using motifs from classical composers Stravinsky and Shostakovich.",
  "/Audio/Electronic/techno_rhapsody.mp3" 
);
$post->playlist[] = new Song(
  "The Bayou",
  "",
  "Live coded with Tidal Cycles and SuperCollider.",
  "/Audio/Electronic/the_bayou.mp3" 
);
$post->playlist[] = new Song(
  "Waiting For Godot-livery",
  "",
  "Video game soundtrack made for a Game Jam using Ableton. Simulates the thrill of waiting for your package to be delivered.",
  "/Audio/Electronic/waiting_for_godot-livery.mp3"
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

$post->content2 = '
<p>I perform using TidalCycles live coding and electric guitar throughout New England and New York. In June 2024, I performed at Wonderville in Brooklyn with LiveCode NYC, 
where I processed my guitar through a Roland GR-55 Guitar Synthesizer and recorded loops into Tidal Cycles using the 
<a href="https://github.com/thgrund/tidal-looper"" target="_blank">tidal-looper</a> library. </p>

<center><iframe width="560" height="315" src="https://www.youtube.com/embed/Rt2XoHWeXVA?si=RlDj-qg3Rix4PxEC" title="YouTube video player" frameborder="0" 
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>

<p>In Fall 2023, I collaborated with researcher\'s at McGill CIRMMT and visual artist Angus MacMinn to create an interactive audiovisual installation in the Satosphere at the Société 
des arts technologiques (SAT) in Montreal. The generative music for this installation used SuperCollider and machine learning to create responsive sonic environments that adapted to 
participant movements captured by <a href="http://www-new.idmil.org/project/the-t-stick/" target="_blank">T-Sticks</a>, and morphed from natural ambient sounds to distorted electronics. </p>

<center><iframe width="560" height="315" src="https://www.youtube.com/embed/Kt4FWBp3Xoo" title="YouTube video player" frameborder="0" 
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>

<p>In June 2022, I led a workshop hosted by Music Hackspace in London to teach composers and producers how they can incorporate machine learning 
and AI into their creative practice. The talk was geared to creatives with no prior background in programming or ML. We started with a light 
introduction to RNN and VAE architectures, then I walked participants through freely available VSTs, web apps and Max externals that utilize 
these models for melody generation and timbre transfer. </p> 
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/dQfN4hL_YIk" title="YouTube video player" frameborder="0" 
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

<p> In April 2022, I performed my first ever live SuperCollider set at The Crypt in Camberwell, London. I made my own custom digital synths for this live code set. </p>

<center><iframe width="560" height="315" src="https://www.youtube.com/embed/wLC_8c2yc7k" title="YouTube video player" frameborder="0" 
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

<p>For more information on the technical breakdown of my generative pieces, check out my <a href="http://saraadkins.com/portfolio.html">software portfolio page</a>.</p>
'

?>