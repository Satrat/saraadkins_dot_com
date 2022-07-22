<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'Can Your Smartphone Touch You Back?';
$post->subtitle = 'Rendering gradient haptic textures on Android to aid non-visual navigation';
$post->name = 'textures';
$post->card = 'Images/vt_tile.jpg';
$post->content = '

<p><b>IEE Publication: </b><a href="https://ieeexplore.ieee.org/document/7989893">Perceiving texture
        gradients on an electrostatic friction display</a></p>
<p>This research project, under the supervision of Dr. Roberta Klatzky, explored the possibilities of
    incorporating haptic feedback into smartphone and tablet applications. Smartphones and tablets receive
    touch from users, but most devices don\'t give tactile feedback. We worked with a device that utilizes
    haptic technology, the Senseg "Feelscreen" tablet, to investigate its use for virtual textures. The
    tablet gives the user haptic feedback by varying friction impulses depending on how the user\'s finger is
    moving. Our idea was that texture gradients could help people find their direction of movement without
    having to look at a screen.</p>
<p>We investigated human abilitity to discern texture gradients through a series of user research studies.
    Subjects swipe across a small area of the tablet to feel a gradient texture. Then they report whether
    the texture is increasing or decreasing in intensity as they swiped left to right. We developed an
    Android app to present the textures to the subjects and collect data.</p>
<div id="vt_app"><img src="Images/vt_tile.jpg"></div>
<p>Data was stored and managed using MySQL. We analyzed the data by calculating the discrimination between
    "increasing" and "decreasing" gradients for each texture. It was found that bumpy textures alongside
    gradients that started at a low amplitude were easiest to discern. Under these conditions we found
    discrimination values between 2.5 and 3, supporting the feasibility of using haptics to discern
    direction of movement. </p>
<p>After seeing positive results, we designed a keyboard application that uses various texture gradients
    across the keys to enable the user to find their direction of movement and easily "swipe type" on the
    keyboard without having to look at the screen. Our research was presented at the Meeting of the Minds
    research symposium in the Spring of 2016 and published in the IEEE World Haptics Conference in 2017.</p>
<a class="group1" href="Images/virtual_textures_poster-1.png"><img class="group2"
        src="Images/virtual_textures_poster-1.png" title="Conference Poster"></a>


';

?>