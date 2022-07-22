<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'Dynamic Reverb Simulation in AR';
$post->subtitle = 'Efficiently simulate enviroment specific sound propogation for Microsoft HoloLens';
$post->name = 'reverb';
$post->card = 'Images/hololens_tile.jpg';
$post->content = '

<p><b>GitHub Link: </b><a href="https://github.com/Satrat/AR-Reverb">AR-Reverb</a></p>
<p>This HoloLens application simulates sound propogation in augmented reality in order to create realistic
    echo effects that take into acount the topology of the AR environment during reverb calculations. The
    size and shape of a room, as well as the presence of obstacles, can significantly influence sound, and
    taking these parameters into consideration can improve imersion in an augmented reality environment.
    Sound propogation is simulated using a parallelized ray tracing algorithm that approximates how sound
    bouces around a room by modeling the waves as rays. The result is reverberation effects that can be
    calculated in real time, and change dynamically each frame as the user moves around the room.</p>
<p>This project was a collaboration with Jonathan Merrin. To approach the problem, we divided the AR space
    into a custom data structure we called Quadrants, each responsible for keeping track of the spatial
    mapping data relevant to that section of the room and the rays that intersect it. When the HoloLens
    grabs more spatial mapping data, we asynchronously request the new information regarding the mesh and
    send it to the relevant Quadrant. That way, we keep most Quadrants free and ready to do work as they are
    needed. </p>
<p>When a new sound source is added to the environment, we use Unity\'s Physics.Raycast to spawn 75 rays
    originating from the source and calculate where they collide with the walls. On every collision, we
    spawn a new sound ray reflecting off the object it collided with and dampen the associated volume. We
    allow this to continue up to a maximum recursion depth of 30 collisions.</p>
<div id="reverb_ray"><img src="Images/reverb_soundfile.jpg"></div>
<p>Whenever a ray crosses through a Quadrant, we add it to the Quadrant\'s list of active rays. On every
    frame, we check what Quadrant the user\'s position is in and loop through its active rays to compute
    which rays come close enough to the user to be heard, eliminating the majority of the rays from the
    loop. When a sound has completed playing, all of its corresponding rays are destroyed. With our
    parallelized apparoach, we were able to raytrace a sound in 3ms, less than half the latency of our
    baseline sequential implementation that took 8ms. For more details on our algorithm and latency
    measurements, check out the project <a
        href="https://github.com/Satrat/AR-Reverb/blob/master/README.md">README on GitHub.</a></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/TppSbkVxA1w" frameborder="0"
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen></iframe>

';

?>