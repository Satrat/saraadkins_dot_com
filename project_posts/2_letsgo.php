<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'Let\'s Go';
$post->subtitle = 'Algorithmic step sequencer and melody generator based on a live game of Go';
$post->name = 'letsgo';
$post->card = 'Images/letsgo_tile.jpg';
$post->content = '

<p><b>GitHub Link: </b><a href="https://github.com/Satrat/lets-go">lets-go</a></p>
<p>Let\'s Go uses computer vision to track the positions of the black and white tokens in the popular board
    game Go. By representing a board state as a matrix, we can transform the Go board into a step sequencer
    and melody creator, allowing the two players to create music together that builds as the game
    progresses.</p>
<div id="go_images">
    <img src="Images/letsgo_board.jpg"><img src="Images/letsgo_black.jpg"><img
        src="Images/letsgo_white.jpg">
</div>
<p>OpenCV was used to process a live video stream of the Go board captured with an HD webcam. The algorithm
    converts the picture to black and white to isolate the white go pieces, then inverts the frame to
    isolate the black. </p>
<div id="go_mask">
    <img src="Images/letsgo_mask.jpg">
</div>
<p>We then use OpenCV\'s blob detection algorithm to find the center of each game piece on the board.
    Assuming the game board does not move, we can interpolate the location of each intersection on the board
    given the location of the four edges of the board. From here, we can determine the closest intersection
    to each game piece and generate two 13x13 binary matrices representing the current game state. These
    matrices are sent to Max MSP using Open Sound Control (OSC).</p>
<p>Within the Max patch, the matrix of black pieces was used to control a step sequencer of percussion
    sounds. The matrix of white pieces was split in half, where the left half controlled 7 drone sounds and
    the right half controlled 6 melody lines. </p>
<p>The samples used for this project were created by Abby Adams and Julian Koreniowsky in Logic Pro X. The
    percussive sounds came from numerous drum patches designed by Logic ranging from kick drums to frog
    noises. The melodic pieces was based off of A Major suspended drone(ADEFA#C#E), synth bass noises and
    LFO sound effects. Melody lines play on a fixed loop starting on the next beat after the corresponding
    game piece was put down. The percussion sounds were based on a 3+3+2+2+3 rhythm, representing the 13
    spaces of the game board.</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/9pOlywOpmJY" frameborder="0"
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen></iframe>

';

?>