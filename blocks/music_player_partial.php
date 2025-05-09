<!--
<div id="guitar_holder" align="center">
    <div id="jquery_jplayer_guitar" class="jp-jplayer"></div>
    <div id="jp_container_guitar" class="jp-audio" role="application" aria-label="media player">
-->
        <div class="jp-type-playlist">
            <div class="jp-gui jp-interface">
                <div class="jp-controls">
                    <button class="jp-previous" role="button" tabindex="0">previous</button>
                    <button class="jp-play" role="button" tabindex="0">play</button>
                    <button class="jp-next" role="button" tabindex="0">next</button>
                    <button class="jp-stop" role="button" tabindex="0">stop</button>
                </div>
                <div class="jp-progress">
                    <div class="jp-seek-bar" align="left">
                        <div class="jp-play-bar"></div>
                    </div>
                </div>
                <div class="jp-volume-controls" align="left">
                    <button class="jp-mute" role="button" tabindex="0">mute</button>
                    <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                    <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value"></div>
                    </div>
                </div>
                <div class="jp-time-holder">
                    <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                    <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                </div>
                <div class="jp-toggles">
                    <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                    <button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
                </div>
            </div>
            <div class="details"><h1 class="song_title" id="song_title_<?php echo($post->name); ?>"></h1><p class="description" id="song_description_<?php echo($post->name); ?>"</p></div>
            <div class="jp-playlist" align="left">
                <ul class="audio">
                    <li>&nbsp;</li>
                </ul>
            </div>
            <div class="jp-no-solution">
                <span>Update Required</span>
                To play the media you will need to either update your browser to a recent version or update your <a
                    href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
            </div>
        </div>
    </div>
</div>
