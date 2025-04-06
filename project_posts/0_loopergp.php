<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'LooperGP';
$post->subtitle = 'A loopable sequence model for live coding performance using GuitarPro tablature';
$post->name = 'looper_gp';
$post->card = '/Images/loopergp.jpg';
$post->content = '

<p><b>GitHub Links:</b> <a href="https://github.com/Satrat/LooperGP" target="_blank">LooperGP</a>, <a href="https://github.com/Satrat/midi_loop_detection" target="_blank">LooperMIDI</a></p>
<p>My Masters\'s thesis at QMUL focused on addressing barriers that prevent generative deep learning models from 
being adopted as a live music performance tool. I specifically focused on the potential use of symbolic generation in live 
coding, an artform of performing electronic music by programming in a scripting language (common ones include SuperCollider, 
Tidal Cyles and Sonic Pi). Despite their impressive offline results, deep learning models for symbolic music generation are not 
widely used in live performances due to a deficit of musically meaningful control parameters and a lack of structured musical 
form in their outputs. To address these issues we introduce LooperGP, a method for steering a Transformer-XL model towards 
generating loopable musical phrases of a specified number of bars and time signature, enabling a tool for live coding 
performances. More details and audio examples can be found in the video below: </p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/16-8Sy7WehQ" frameborder="0"
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen></iframe>
<p>This work was published and presented at EvoMUSART 2023, receiving the Oustanding Student award. The preprint is available on 
<a href="https://arxiv.org/abs/2303.01665" target="_blank">arXiv</a>, and the full set of audio examples used in the listening 
test are on <a href="https://drive.google.com/drive/folders/1I0MCPYjj8nXqKkmDN-d-C2ETOHJpCZyn target="_blank">Google Drive</a>. After publication, I implemented an improved version of 
the loop extraction algorithm that works with MIDI data and addresses some of the repetition issues in the original paper. This updated implementation is posted in the GitHub links above.</p>

';

?>