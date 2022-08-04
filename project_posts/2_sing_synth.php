<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'Singing Synthesizer';
$post->subtitle = 'Pipeline for synthesizing lyrics, melody and vocalization using machine learning';
$post->name = 'sing_synth'; // unique, no spaces
$post->card = '/Images/sing_synth.jpg'; // absolute
$post->content = '
<p><b>GitHub Links: </b><a href="https://github.com/Satrat/melody_generation" target="_blank">melody-generation</a>, 
<a href="https://github.com/Satrat/lyric_generation" target="_blank">lyric-generation</a>,
<a href="https://github.com/Satrat/ddsp_pytorch" target="_blank">voice-synthesis</a></p>
<p>Timbre transfer is a popular example of Google\'s Differentiable Digital Signal Processing(DDSP) library. Their autoencoder model is able to make a 
sung melody sound like it was produced by another instrument such as a violin or a saxophone, but this concept of timbre transfer can\'t be applied the 
other way around due to missing lyric information. This project alters the DDSP framework to encode phoneme labels in addition to pitch and loudness 
to enable the autoencoder to synthesize sung lyrics given a time-aligned melody line.</p>
<p>The goal was to generate interesting approximations of human singing rather than modeling a human singer perfectly; audio where the lyrics could be 
understood but didn\'t sound exactly human. The system is made up of 3 stages. First a GRU model generates lyrics, then an LSTM-GAN generates a matching melody 
line. Finally in stage 3 a DDSP autoencoder synthesizes the voice singing the melody and lyrics. The system in presented in a 
<a href="https://colab.research.google.com/drive/1ioiLY0rOm2wufxAT5nqgudOYfPCuPCFs?usp=sharing " target="_blank">Google Colab Notebook</a> that allows 
the user to adjust model parameters and select their favorite outputs from each stage. Try it out yourself, no coding or installations required! You can also 
read more details about the system design and technical details in the <a href="/docs/cc_report.pdf" target="_blank">project report</a> I submitted for my graduate 
Computational Creativity module.

';

?>

