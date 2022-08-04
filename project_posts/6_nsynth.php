<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'NSynth Super Hardware Build';
$post->subtitle = 'Lasercut and 3D-printed build of Google Magenta\'s neural timbre synthesizer';
$post->name = 'nsynth'; // unique, no spaces
$post->card = '/Images/nsynth.jpg'; // absolute
$post->content = '
<p>Details Coming Soon</p>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/Va2S6RUXJGE" title="YouTube video player" frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
';

?>

