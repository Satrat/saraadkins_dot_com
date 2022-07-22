<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'RobOrchestra';
$post->subtitle = 'MIDI controllable robotic orchestra with an interface for generative music';
$post->name = 'roborchestra';
$post->card = 'Images/roborchestra_tile2.jpg';
$post->content = '

<p><b>GitHub Link: </b><a href="https://github.com/CMU-Robotics-Club/RobOrchestra">RobOrchestra</a></p>
<p>RobOrchestra is an ongoing project in the Carnegie Mellon Robotics Club that aims to explore the creative
    possibilities for robotic instruments. The RobOrchestra team designs, builds and programs robots that
    read music from MIDI data in order to put on musical performances. The orchestra, consisting of XyloBot,
    TomBot, SnareBot and UkuleleBot, has performed at several events across campus including Spring
    Carnival, Philharmonic Preview Parties, Computer Science Day, and the CMU 50th Anniversary Showcase.</p>
<div class="code_images">
    <img src="Images/roborchestra_bxa.jpg"><img src="Images/roborchestra_pp.jpg">
</div>
<p>Sara led the RobOrchestra project from 2015-2018, steering the project toward enabling the orchestra to
    "improvise" unique polyphonic music in real time based off of music generation algorithms, rather than
    just reading from static MIDI files. The first iteration of this algorithm generated chord progressions
    using a Markov chain. Xylobot would improvise a melody over the progression, usually sticking to chord
    tones with some probability of playing passing tones. SnareBot and TomBot would choose a rhythmic
    feature each measure from a bank. Code for this algorithm was written in Processing, which handled the
    scheduling of sending MIDI notes to each robot. </p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/GXO5drefWfw" frameborder="0"
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen></iframe>
<p>Future iterations of generative algorithms introduced a graphical interface, allowing users without any
    musical background to use the orchestra as a tool to create their own music. Through the GUI, users
    could control various parameters of the algorithm and test out different keys and modes. Control sliders
    included tempo, how densely each instrument played, and how often scale tones were played.</p>
<img src="Images/roborchestra_interface.jpg"><img src="Images/roborchestra_xylobot.jpg">
<p>In addition to the generative music efforts, the team also focused on developing a new robot instrument
    named UkuleleBot. This robot was intended to be a rhythm section for the orchestra, strumming chords
    rather than playing individual notes. Chords are controlled by a fingering plate that sits above the
    neck of the Ukulele. Each “finger” is a solenoid that presses a pad into the string, and rebounds with a
    spring when the solenoid is turned off. The solenoids are controlled by an Arduino, which is programmed
    to interpret note-on MIDI messages into fingerings for 24 different chords.</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/w9eZspP3Vf8" frameborder="0"
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen></iframe>

';

?>