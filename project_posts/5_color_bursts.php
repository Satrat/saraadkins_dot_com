<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'Color Bursts';
$post->subtitle = 'Generative sound installation in a botanical garden';
$post->name = 'color_bursts';
$post->card = 'Images/color_tile.jpg';
$post->content = '

<p><b>GitHub Link: </b><a href="https://github.com/Satrat/color-bursts">color-bursts</a></p>
<p>Color Bursts is a generative composition created by Sara Adkins and Julian Koreniowsky, inspired by the
    vibrant flowers scattered throughout a butterfly garden in Pittsburgh. The piece is made up of sample
    banks of percussive figures and melodic marimba phrases that randomly loop. Short synthesizer bloops
    flutter above the main loops, playing sparsely on randomly selected sub beat while an evolving drone
    sounds in the background. Samples for the piece were created using Logic Pro X.</p>
<div id="color"><img src="Images/color_bursts.jpg"><img src="Images/color_green.jpg"></div>
<p>Color Bursts ran as a sound installation in the Phipps Botanical Garden for four months in the summer of
    2017. The piece runs as a Pure Data patch, which handles the scheduling and looping of the various
    voices. The patch runs on a Raspberry Pi, which launches the patch on startup and runs it indefinitely.
    The Pi was powered by a rechargeable battery that was plugged into a power source, ensuring the system
    would continue to run even if power was lost for several hours. The Pi was connected to a small but
    powerful external speaker using a USB audio device. The entire system was compact, and able to be hidden
    from view in the foliage of the garden. </p>
<div class="holder" align="center">
    <div id="jquery_jplayer_color" class="jp-jplayer"></div>
    <div id="jp_container_color" class="jp-audio" role="application" aria-label="media player">
        <div class="jp-type-single">
            <div class="jp-gui jp-interface" align="left">
                <div class="jp-controls">
                    <button class="jp-play" role="button" tabindex="0">play</button>
                    <button class="jp-stop" role="button" tabindex="0">stop</button>
                </div>
                <div class="jp-progress">
                    <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                    </div>
                </div>
                <div class="jp-volume-controls">
                    <button class="jp-mute" role="button" tabindex="0">mute</button>
                    <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                    <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value"></div>
                    </div>
                </div>
                <div class="jp-time-holder">
                    <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                    <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                    <div class="jp-toggles">
                        <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                    </div>
                </div>
            </div>
            <div class="jp-details">
                <div class="jp-title" aria-label="title">&nbsp;</div>
            </div>
            <div class="jp-no-solution">
                <span>Update Required</span>
                To play the media you will need to either update your browser to a recent version or update
                your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
            </div>
        </div>
    </div>
</div>

<script>
$("#jquery_jplayer_color").jPlayer({
    ready: function () {
        $(this).jPlayer("setMedia", {
            title: "Color Bursts",
            mp3: "./Audio/Electronic/Color_Bursts.mp3"
        });
    },
    cssSelectorAncestor: "#jp_container_color",
    swfPath: "./js",
    supplied: "mp3",
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true,
    remainingDuration: true,
    toggleDuration: true
});
</script>

';

?>