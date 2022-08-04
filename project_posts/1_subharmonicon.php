<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'Digital Subharmonicon';
$post->subtitle = 'Digital replica of the Moog subharmonicon, implemented on the Bela hardware platform';
$post->name = 'subharmonicon'; // unique, no spaces
$post->card = '/Images/subharmonicon.jpg'; // absolute
$post->content = '
<p><b>GitHub Link: </b><a href="https://github.com/Satrat/digital-subharmonicon" target="_blank">digital-subharmonicon</a></p>
<p>Details Coming Soon</p>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/J1Kx5j5X2ws" title="YouTube video player" frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
';

?>