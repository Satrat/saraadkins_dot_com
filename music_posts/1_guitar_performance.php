<?php

include_once('./classes/music_post.php');
include_once('./classes/song.php');

$post = new MusicPost();
$post->title = 'Classical Guitar';
$post->name = 'guitar';
$post->card = '/Images/guitar_performance.jpg';
$post->content1 = '
<p> I have been a guitarist since I was 10 years old. I initially fell in love with the instrument listening to my parents Led Zeppelin 
    albums and spent my first few years of playing focused on classic rock. In high school I switched my focus to classical guitar after 
    learning one of the Bach Cello Suites and realizing how beautiful and expressive classical music could be. From there I went on to 
    study classical guitar in college with professor James Ferla at the Carnegie Mellon University School of Music in Pittsburgh PA. 
    During my time in Pittsburgh, I was featured as a concerto soloist with the CMU Classical Guitar Ensemble and performed with chamber 
    group partners ranging from renaissance vocalists, to string quartets, to banjo players. </p>
<p>I currently perform as a freelance classical guitarist in the greater Boston Area, specializing in wedding ceremonies, cocktail hours and dinner 
    parties. With my unique background in performance, audio engineering and sound design, I am well equipped to provide a 
    well equipped to provide the perfect sound for any event. From intimate wedding ceremonies to loud cocktail parties,
    I can set up a professional sound system and select music that will create the perfect atmosphere for the event at hand. A previous
    client praised my work in a review stating "Sara\'s professionalism was top notch, her music selection was amazing and
    her artistic gift is beyond comparison, her music in the castle was amazing."</p>
<p>To book me as a 
    musician for your next event, please send an email to booking@saraadkins.com. You can also visit my profile on 
    <a href="https://www.gigmasters.com/classical-guitar/sara-adkins" target="_blank">The Bash</a> to request a quote.
    I can put together a program of music from my extensive <a href="/docs/Repertoire List.pdf">repertoire list</a>
    tailored to your event and musical preferences, and am also happy to take requests or put together a classical arrangement of your favorite pop song. 
    Below you will find recordings of me playing some of my favorite classical pieces:
</p>
';

$post->playlist = Array();

$post->playlist[] = new Song(
    "Un Dia de Noviembre",
    "Leo Brouwer",
    "",
    "/Audio/Guitar/Un Dia De Novembre.mp3"
);
$post->playlist[] = new Song(
    "Prelude No. 1",
    "Heitor Villa-Lobos",
    "",
    "/Audio/Guitar/Prelude No. 1.mp3"
);
$post->playlist[] = new Song(
    "Preludio Rockero",
    "Maximo Diego Pujol",
    "",
    "/Audio/Guitar/Preludio Rockero.mp3"
);
$post->playlist[] = new Song(
    "Cello Suite No. 1: Prelude",
    "Johann Sebastian Bach",
    "",
    "/Audio/Guitar/Prelude.mp3"
);
$post->playlist[] = new Song(
    "Cello Suite No. 1: Sarabande",
    "Johann Sebastian Bach",
    "",
    "/Audio/Guitar/Sarabande.mp3"
);


$post->content2 = ''

?>
