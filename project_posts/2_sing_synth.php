<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'Singing Synthesizer';
$post->subtitle = 'Pipeline for synthesizing lyrics, melody and vocalization using machine learning';
$post->name = 'sing_synth'; // unique, no spaces
$post->card = '/Images/sing_synth.jpg'; // absolute
$post->content = '
<p><a href="https://colab.research.google.com/drive/1ioiLY0rOm2wufxAT5nqgudOYfPCuPCFs?usp=sharing " target="_blank">Interactive Colab Notebook</a></p>
<p>Details Coming Soon</p>

';

?>

