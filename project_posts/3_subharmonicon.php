<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'Digital Subharmonicon';
$post->subtitle = 'Digital replica of the Moog subharmonicon, implemented on the Bela hardware platform';
$post->name = 'subharmonicon'; // unique, no spaces
$post->card = '/Images/subharmonicon.jpg'; // absolute
$post->content = '
<p><b>GitHub Link: </b><a href="https://github.com/Satrat/digital-subharmonicon" target="_blank">digital-subharmonicon</a></p>
<p>This is a digital implementation of the polyrhymic Moog Subharmonicon synthesizer with a mix of hardware and software controls. The synthesizer
features two voltage controlled oscillators with controllable subharmonics that share a resonant low
pass filter. Two step sequencers control the frequency of the oscillators, and the four rhythm generators
allow the creation of polyrhythms by generating integer divisions of the main sequencer tempo. Aliasing
effects in the digital system are reduced using the differentiated parabolic waveform method, though not
eliminated completely. Despite these artifacts, the digital subharmonicon is potential to be a low cost, open
source alternative to the expensive Moog original.</p>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/J1Kx5j5X2ws" title="YouTube video player" frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
';

?>