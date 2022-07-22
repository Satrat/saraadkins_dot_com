<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'Creating With The Machine';
$post->subtitle = 'Series of interactive algorithmic compositions for human and machine musicians';
$post->name = 'creating_with_the_machine';
$post->card = 'Images/capstone_tile.jpg';
$post->content = '

<p><b>GitHub Links:</b> <a href="https://github.com/Satrat/machine-cycle">machine-cycle</a>, <a
        href="https://github.com/Satrat/rnn-on-bach">rnn-on-bach</a>, <a
        href="https://github.com/Satrat/breathe">breathe</a></p>
<p> "Creating with the Machine" is a set of compositions that combine algorithmic and traditional methods of
    music composition into live performances to explore how interactive generative algorithms can influence
    creativity in musical improvisation, and create a compelling listening experience for the audience. In
    each composition, data streams from a musician\'s performance are sent as input parameters to an
    algorithm, influencing the music that is generated. As the algorithm is influenced by the performer, the
    performer is also musically influenced by the output of the algorithm in a real time closed loop.
    This project was awarded the Henry Armero Memorial Award, an award to honor the memory of <a
        href="http://henryarmero.com/">Henry Armero</a>, at the Meeting of the Minds research symposium.
    Sara also presented Creating with the Machine as a talk on algorithmic composition techniques at the
    2019 Hackaday Superconference in Los Angeles.
    A recording of Sara\'s Supercon talk is included below.</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/-uvXe02qxQM" frameborder="0"
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen></iframe>
<p>Three compositions were created and premiered, each showcasing a different algorithmic composition
    technique. The first composition, "Machine Cycle," utilizes Markov chains to melodically alter and
    playback phrases from a keyboard player in real time. As a pianist improvises on a MIDI keyboard, the
    algorithm randomly saves phrases they play. When a new phrase is added, a Markov chain of potential
    embellishments (such as passing tones, neighbor tones, rhythmic alterations and skipped notes) is
    created and saved to a bank. Throughout the piece the algorithm generates its own phrases from its bank
    of Markov chains and plays them back to the performer. The “conductor” of the piece controls the
    probability of each embellishment occurring and how often phrases are played using a MIDI controller. <a
        href="docs/machine-cycle-score.pdf">Machine Cycle has a score</a> that contains the structural
    outline of the piece without dictating specific notes. The conductor is also responsible for
    interpretting the score and leading the musicians through the sections of the piece.</p>
<div class="holder" align="center">
    <div id="jquery_jplayer_cycle" class="jp-jplayer"></div>
    <div id="jp_container_cycle" class="jp-audio" role="application" aria-label="media player">
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
<p>The second composition, "Recurrent Neural Networks on Bach," generates polyphonic phrases during the
    training of an LSTM neural network to accent a gradual transition from chaotic noise to tonal harmony. A
    3 layer LSTM was trained on over 400 Bach chorales using Google Magenta, and a checkpoint of the model
    weights was saved every half hour during training. During performance, a Python script maintains a queue
    of MIDI files containing 4 voice 8 bar phrases that are generated from the ascending checkpoints. MIDI
    note messages are sent from Python to a virtual instrument in Logic Pro X. Using a MIDI controller, the
    performer controls progress through the checkpoints, tempo, and other effects to shape the structure of
    the piece. The piece starts with random weights, and moves through the checkpoints to weights of the
    fully trained network.</p>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/pQcr6JFpbO4?start=10973"
        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>

<p>The third composition, "Breathe," captures the breathing of a performing guitarist as they improvise to
    manipulate the frequency spectrum of their instrument and control granular synthesis. As the guitarist
    improvises they are able to record phrases with a foot pedal that run through a granular synthesizer.
    They can also use the foot pedal to capture an FFT snapshot of their current audio, freeze it, and play
    it back as a drone. Up to six drones can play, and they each continuously ramp to new amplitudes on a
    designated beat. Meanwhile, the breath of the performer is picked up by a lapel mic sitting under their
    noise. The amplitude of their breath signal influences the grain size and rate of the granular
    synthesizer, and the rate at which each drone ramps to a new amplitude, creating a piece that ebbs and
    flows with the performer\'s breath.</p>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/pQcr6JFpbO4?start=23027"
        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>

<script>
$("#jquery_jplayer_cycle").jPlayer({
    ready: function () {
        $(this).jPlayer("setMedia", {
            title: "Machine Cycle",
            mp3: "./Audio/Electronic/Machine_Cycle.mp3"
        });
    },
    cssSelectorAncestor: "#jp_container_cycle",
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