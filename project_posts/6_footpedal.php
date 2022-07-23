<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'Configurable MIDI Pedal';
$post->subtitle = 'Stompbox guitar pedal with configurable MIDI over USB behavior';
$post->name = 'footpedal';
$post->card = '/Images/foot_pedal3.jpg';
$post->content = '

<p><b>GitHub Link: </b><a href="https://github.com/Satrat/midi-pedal" target="_blank">midi-pedal</a></p>
<p>This USB MIDI Stompbox is simple to build, and comes with a Python GUI for configuring the MIDI output of
    each switch. Its perfect for controlling
    guitar effects in your favorite DAW, or custom patches in Max/PureData. From the configuration software
    you can configure each switch to emit Note
    On, Program Change, or Control Change messages and customize the parameters. You can also set each
    switch to "Press," "Press and Release," or Cycle
    mode. In cycle mode, you can loop through different MIDI messages on repeated presses. </p>
<div id="code_images">
    <img src="/Images/foot_pedal4.jpg"><img src="/Images/foot_pedal5.jpg">
</div>
<p> The firmware runs on a Teensy4.2 microcontroller, which sends MIDI messages over USB and controls the
    indicator LEDS. The firmware uses the
    PacketSerial library to receive COBS encoded messages that live update the pedal\'s MIDI behavior. Visit
    the GitHub link above for the circuit
    schematic, firmware and configuration software.</p>

';

?>