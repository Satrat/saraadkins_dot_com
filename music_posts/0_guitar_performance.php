<?php

include_once('./classes/music_post.php');
include_once('./classes/song.php');

$post = new MusicPost();
$post->title = 'Guitar Performance';
$post->name = 'guitar';
$post->card = 'Images/guitar_performance.jpg';
$post->content = '
<p>Sara graduated from the Carnegie Mellon University School of Music in Pittsburgh PA, where she studied classical
    guitar with professor James Ferla. During her time in Pittsburgh, Sara was featured as a concerto soloist with the
    CMU Classical Guitar Ensemble and performed with chamber group partners ranging from renaissance vocalists, to
    string quartets, to banjo players. She performed as a freelancer throughout the city, playing in locations such as
    the Phipps Botanical Gardens, the Carnegie Library of Pittsburgh, Kresge Theater, and the UPMC Hillman Cancer
    Center. Prior to her time in Pittsburgh, Sara studied guitar at the Peabody Preparatory School in Baltimore MD,
    where she performed with the guitar orchestra and participated in a master class with Julian Gray.</p>
<p>Now residing in Boston, Sara performs as a freelance guitarist for wedding ceremonies, receptions and other events.
    She is also an active member of the Boston Classical Guitar Society. With her unique background in performance,
    audio engineering and sound design, she is well equipped to provide a thoughtful and cohesive musical experience
    tailored to suit any event. From intimate wedding ceremonies to loud cocktail parties, Sara will set up a
    professional sound system and select music that will create the perfect atmosphere for the event at hand. A previous
    client praised Sara in a review stating "Sara\'s professionalism was top notch, her music selection was amazing and
    her artistic gift is beyond comparison, her music in the castle was amazing."</p>

<p>To book Sara as a musician for your next event, please send an email to booking@saraadkins.com. You can also visit
    her profile on <a href="https://www.gigmasters.com/classical-guitar/sara-adkins">GigMasters</a> to request a quote.
    Sara can put together a program of music from her extensive <a href="./docs/Repertoire List.pdf">repertoire list</a>
    tailored to your event and musical preferences, and is also happy to take song requests. Below are some recordings
    of Sara playing her favorite pieces:
</p>
';

$post->playlist = Array();

$post->playlist[] = new Song(
    "Un Dia de Noviembre",
    "Leo Brouwer",
    "",
    "./Audio/Guitar/Un Dia De Novembre.mp3"
);
$post->playlist[] = new Song(
    "Prelude No. 1",
    "Heitor Villa-Lobos",
    "",
    "./Audio/Guitar/Prelude No. 1.mp3"
);
$post->playlist[] = new Song(
    "Preludio Rockero",
    "Maximo Diego Pujol",
    "",
    "./Audio/Guitar/Preludio Rockero.mp3"
);
$post->playlist[] = new Song(
    "Cello Suite No. 1: Prelude",
    "Johann Sebastian Bach",
    "",
    "./Audio/Guitar/Prelude.mp3"
);
$post->playlist[] = new Song(
    "Cello Suite No. 1: Sarabande",
    "Johann Sebastian Bach",
    "",
    "./Audio/Guitar/Sarabande.mp3"
);


?>
