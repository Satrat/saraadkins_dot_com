<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sara Adkins-Code</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="style/colorbox.css">
    <link rel="stylesheet" type="text/css" href="./skin/blue.monday/css/jplayer.blue.monday.css">
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/jquery.jplayer.min.js"></script>
    <script src="./js/jquery.jplayer.inspector.min.js"></script>
    <script src="./js/jplayer.playlist.js"></script>
    <script src="./js/jquery.colorbox-min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#jquery_jplayer_4").jPlayer({
                ready: function () {
                    $(this).jPlayer("setMedia", {
                        title: "Machine Cycle",
                        mp3: "./Audio/Electronic/Machine_Cycle.mp3"
                    });
                },
                cssSelectorAncestor: "#jp_container_4",
                swfPath: "./js",
                supplied: "mp3",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true,
                remainingDuration: true,
                toggleDuration: true
            });
            $("#jquery_jplayer_5").jPlayer({
                ready: function () {
                    $(this).jPlayer("setMedia", {
                        title: "Color Bursts",
                        mp3: "./Audio/Electronic/Color_Bursts.mp3"
                    });
                },
                cssSelectorAncestor: "#jp_container_5",
                swfPath: "./js",
                supplied: "mp3",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true,
                remainingDuration: true,
                toggleDuration: true
            });
            $(".group1").colorbox({
                rel: 'group1',
                width: "90%",
                transition: "fade"
            });
            $(".group2").colorbox({
                rel: 'group2',
                transition: "fade"
            });
            $(".group3").colorbox({
                rel: 'group3',
                transition: "none",
                width: "75%",
                height: "75%"
            });
            $(".group4").colorbox({
                rel: 'group4',
                slideshow: true
            });
            $(".ajax").colorbox();
            $(".youtube").colorbox({
                iframe: true,
                innerWidth: 640,
                innerHeight: 390
            });
            $(".vimeo").colorbox({
                iframe: true,
                innerWidth: 500,
                innerHeight: 409
            });
            $(".iframe").colorbox({
                iframe: true,
                width: "80%",
                height: "80%"
            });
            $(".inline").colorbox({
                inline: true,
                width: "50%"
            });
            ß
            $(".callbacks").colorbox({
                onOpen: function () {
                    alert('onOpen: colorbox is about to open');
                },
                onLoad: function () {
                    alert('onLoad: colorbox has started to load the targeted content');
                },
                onComplete: function () {
                    alert('onComplete: colorbox has displayed the loaded content');
                },
                onCleanup: function () {
                    alert('onCleanup: colorbox has begun the close process');
                },
                onClosed: function () {
                    alert('onClosed: colorbox has completely closed');
                }
            });
            $('.non-retina').colorbox({
                rel: 'group5',
                transition: 'none'
            })
            $('.retina').colorbox({
                rel: 'group5',
                transition: 'none',
                retinaImage: true,
                retinaUrl: true
            });

            //Example of preserving a JavaScript event for inline calls.
            $("#click").click(function () {
                $('#click').css({
                    "background-color": "#f00",
                    "color": "#fff",
                    "cursor": "inherit"
                }).text("Open this window again and this message will still be here.");
                return false;
            });
        });
    </script>
</head>

<body>
    <div class="centerContent">
        <a name="top"></a>
        <div class="header">
            <div class="back"><a href="index.php"><img src="Images/back-arrow.gif" alt="Home"
                        style="border-radius: 25px 0px 0px 0px"></a></div>
            <div class="icon"><img src="Images/portfolio.gif" alt="Code icon">
                <h3>Code</h3>
            </div>
        </div>

        <?php include('blocks/menu.php'); ?>

        <div class="cards">
            <a href=#machine>
                <div class="card" id="portfolio-cards">
                    <img class="card-content" src="Images/capstone_tile.jpg" alt="Avatar" style="width:100%">
                    <div class="cardContainer">
                        <h5><b>Creating with the Machine</b></h5>
                        <p>Series of interactive algorithmic compositions for human and machine musicians</p>
                    </div>
                </div>
            </a>
            <a href=#roborchestra>
                <div class="card" id="portfolio-cards">
                    <img class="card-content" src="Images/roborchestra_tile2.jpg" alt="Avatar" style="width:100%">
                    <div class="cardContainer">
                        <h5><b>RobOrchestra</b></h5>
                        <p>MIDI controllable robotic orchestra with an interface for generative music</p>
                    </div>
                </div>
            </a>
            <a href=#letsgo>
                <div class="card" id="portfolio-cards">
                    <img class="card-content" src="Images/letsgo_tile.jpg" alt="Avatar" style="width:100%">
                    <div class="cardContainer">
                        <h5><b>Let's Go</b></h5>
                        <p>Algorithmic step sequencer and melody generator based on a live game of Go</p>
                    </div>
                </div>
            </a>
            <a href=#reverb>
                <div class="card" id="portfolio-cards">
                    <img class="card-content" src="Images/hololens_tile.jpg" alt="Avatar" style="width:100%">
                    <div class="cardContainer">
                        <h5><b>Dynamic Reverb Simulation in AR</b></h5>
                        <p>Efficiently simulate enviroment specific sound propogation for Microsoft HoloLens</p>
                    </div>
                </div>
            </a>
            <a href=#textures>
                <div class="card" id="portfolio-cards">
                    <img class="card-content" src="Images/vt_tile.jpg" alt="Avatar" style="width:100%">
                    <div class="cardContainer">
                        <h5><b>Can Your Smartphone Touch You Back?</b></h5>
                        <p>Rendering gradient haptic textures on Android to aid non-visual navigation</p>
                    </div>
                </div>
            </a>
            <a href=#color-bursts>
                <div class="card" id="portfolio-cards">
                    <img class="card-content" src="Images/color_tile.jpg" alt="Avatar" style="width:100%">
                    <div class="cardContainer">
                        <h5><b>Color Bursts</b></h5>
                        <p>Generative sound installation in a botanical garden</p>
                    </div>
                </div>
            </a>
            <a href=#footpedal>
                <div class="card" id="portfolio-cards">
                    <img class="card-content" src="Images/foot_pedal3.jpg" alt="Avatar" style="width:100%">
                    <div class="cardContainer">
                        <h5><b>Configurable MIDI Pedal</b></h5>
                        <p>Stompbox guitar pedal with configurable MIDI over USB behavior</p>
                    </div>
                </div>
            </a>
            <a href=#resume>
                <div class="card" id="portfolio-cards">
                    <img class="card-content" src="Images/resume_tile.jpg" alt="Avatar" style="width:100%">
                    <div class="cardContainer">
                        <h5><b>Resume Parser and Classifier</b></h5>
                        <p>Hackathon project for rating and grouping PDF resumes</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="content" id="codeContent">
            <a name="top"></a>
            <a name="machine"></a>
            <h5>Creating with the Machine</h5>
            <h4>Series of interactive algorithmic compositions for human and machine musicians</h4>
            <p><b>GitHub Links:</b> <a href="https://github.com/Satrat/machine-cycle">machine-cycle</a>, <a
                    href="https://github.com/Satrat/rnn-on-bach">rnn-on-bach</a>, <a
                    href="https://github.com/Satrat/breathe">breathe</a></p>
            <p> "Creating with the Machine" is a set of compositions that combine algorithmic and traditional methods of
                music composition into live performances to explore how interactive generative algorithms can influence
                creativity in musical improvisation, and create a compelling listening experience for the audience. In
                each composition, data streams from a musician's performance are sent as input parameters to an
                algorithm, influencing the music that is generated. As the algorithm is influenced by the performer, the
                performer is also musically influenced by the output of the algorithm in a real time closed loop.
                This project was awarded the Henry Armero Memorial Award, an award to honor the memory of <a
                    href="http://henryarmero.com/">Henry Armero</a>, at the Meeting of the Minds research symposium.
                Sara also presented Creating with the Machine as a talk on algorithmic composition techniques at the
                2019 Hackaday Superconference in Los Angeles.
                A recording of Sara's Supercon talk is included below.</p>
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
                <div id="jquery_jplayer_4" class="jp-jplayer"></div>
                <div id="jp_container_4" class="jp-audio" role="application" aria-label="media player">
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
                flows with the performer's breath.</p>
            <center><iframe width="560" height="315" src="https://www.youtube.com/embed/pQcr6JFpbO4?start=23027"
                    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
            <p style="text-align: center"><A HREF="#top">Back to top</a></p>
            </br>

            <a name="roborchestra"></a>
            <h5>RobOrchestra</h5>
            <h4>MIDI Controllable Robotic Orchestra with an interface for generative music</h4>
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
            <p style="text-align: center"><A HREF="#top">Back to top</a></p>
            </br>

            <a name="letsgo"></a>
            <h5>Lets Go</h5>
            <h4>Algorithmic step sequencer and melody generator based on a live game of Go</h4>
            <p><b>GitHub Link: </b><a href="https://github.com/Satrat/lets-go">lets-go</a></p>
            <p>Let’s Go uses computer vision to track the positions of the black and white tokens in the popular board
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
            <p>We then use OpenCV’s blob detection algorithm to find the center of each game piece on the board.
                Assuming the game board does not move, we can interpolate the location of each intersection on the board
                given the location of the four edges of the board. From here, we can determine the closest intersection
                to each game piece and generate two 13x13 binary matrices representing the current game state. These
                matrices are sent to Max MSP using Open Sound Control(OSC).</p>
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
            <p style="text-align: center"><A HREF="#top">Back to top</a></p>
            </br>

            <a name="reverb"></a>
            <h5>Dynamic Reverb Simulation in AR</h5>
            <h4>Efficiently simulate enviroment specific sound propagation for Microsoft HoloLens</h4>
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
            <p>When a new sound source is added to the environment, we use Unity’s Physics.Raycast to spawn 75 rays
                originating from the source and calculate where they collide with the walls. On every collision, we
                spawn a new sound ray reflecting off the object it collided with and dampen the associated volume. We
                allow this to continue up to a maximum recursion depth of 30 collisions.</p>
            <div id="reverb_ray"><img src="Images/reverb_soundfile.jpg"></div>
            <p>Whenever a ray crosses through a Quadrant, we add it to the Quadrant’s list of active rays. On every
                frame, we check what Quadrant the user’s position is in and loop through its active rays to compute
                which rays come close enough to the user to be heard, eliminating the majority of the rays from the
                loop. When a sound has completed playing, all of its corresponding rays are destroyed. With our
                parallelized apparoach, we were able to raytrace a sound in 3ms, less than half the latency of our
                baseline sequential implementation that took 8ms. For more details on our algorithm and latency
                measurements, check out the project <a
                    href="https://github.com/Satrat/AR-Reverb/blob/master/README.md">README on GitHub.</a></p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TppSbkVxA1w" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <p style="text-align: center"><A HREF="#top">Back to top</a></p>
            </br>

            <a name="textures"></a>
            <h5>Can your Smartphone Touch you Back?</h5>
            <h4>Rendering gradient haptic textures on Android to aid non-visual navigation</h4>
            <p><b>IEE Publication: </b><a href="https://ieeexplore.ieee.org/document/7989893">Perceiving texture
                    gradients on an electrostatic friction display</a></p>
            <p>This research project, under the supervision of Dr. Roberta Klatzky, explored the possibilities of
                incorporating haptic feedback into smartphone and tablet applications. Smartphones and tablets receive
                touch from users, but most devices don’t give tactile feedback. We worked with a device that utilizes
                haptic technology, the Senseg "Feelscreen" tablet, to investigate its use for virtual textures. The
                tablet gives the user haptic feedback by varying friction impulses depending on how the user's finger is
                moving. Our idea was that texture gradients could help people find their direction of movement without
                having to look at a screen.</p>
            <p>We investigated human abilitity to discern texture gradients through a series of user research studies.
                Subjects swipe across a small area of the tablet to feel a gradient texture. Then they report whether
                the texture is increasing or decreasing in intensity as they swiped left to right. We developed an
                Android app to present the textures to the subjects and collect data.</p>
            <div id="vt_app"><img src="Images/vt_tile.jpg"></div>
            <p>Data was stored and managed using MySQL. We analyzed the data by calculating the discrimination between
                “increasing” and “decreasing” gradients for each texture. It was found that bumpy textures alongside
                gradients that started at a low amplitude were easiest to discern. Under these conditions we found
                discrimination values between 2.5 and 3, supporting the feasibility of using haptics to discern
                direction of movement. </p>
            <p>After seeing positive results, we designed a keyboard application that uses various texture gradients
                across the keys to enable the user to find their direction of movement and easily "swipe type" on the
                keyboard without having to look at the screen. Our research was presented at the Meeting of the Minds
                research symposium in the Spring of 2016 and published in the IEEE World Haptics Conference in 2017.</p>
            <a class="group1" href="Images/virtual_textures_poster-1.png"><img class="group2"
                    src="Images/virtual_textures_poster-1.png" title="Conference Poster"></a>
            <p style="text-align: center"><A HREF="#top">Back to top</a></p>
            </br>

            <a name="color-bursts"></a>
            <h5>Color Bursts</h5>
            <h4>Generative sound installation in a botanical garden</h4>
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
                <div id="jquery_jplayer_5" class="jp-jplayer"></div>
                <div id="jp_container_5" class="jp-audio" role="application" aria-label="media player">
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
            <p style="text-align: center"><A HREF="#top">Back to top</a></p>
            </br>

            <a name="footpedal"></a>
            <h5>Configurable MIDI Pedal</h5>
            <h4>Stompbox guitar pedal with configurable MIDI over USB behavior</h4>
            <p><b>GitHub Link: </b><a href="https://github.com/Satrat/midi-pedal">midi-pedal</a></p>
            <p>This USB MIDI Stompbox is simple to build, and comes with a Python GUI for configuring the MIDI output of
                each switch. Its perfect for controlling
                guitar effects in your favorite DAW, or custom patches in Max/PureData. From the configuration software
                you can configure each switch to emit Note
                On, Program Change, or Control Change messages and customize the parameters. You can also set each
                switch to "Press," "Press and Release," or Cycle
                mode. In cycle mode, you can loop through different MIDI messages on repeated presses. </p>
            <div id="code_images">
                <img src="Images/foot_pedal4.jpg"><img src="Images/foot_pedal5.jpg">
            </div>
            <p> The firmware runs on a Teensy4.2 microcontroller, which sends MIDI messages over USB and controls the
                indicator LEDS. The firmware uses the
                PacketSerial library to receive COBS encoded messages that live update the pedal's MIDI behavior. Visit
                the GitHub link above for the circuit
                schematic, firmware and configuration software.</p>
            <p style="text-align: center"><A HREF="#top">Back to top</a></p>
            </br>

            <a name="resume"></a>
            <h5>Resume Parser and Classifier</h5>
            <h4>Hackathon project for rating and grouping PDF resumes</h4>
            <p><b>GitHub Link: </b><a href="https://github.com/Satrat/Resume-Parser">Resume-Parser</a></p>
            <p>This hackathon project, developed at YHacks 2015, parses PDF resumes and sorts them by score in a Latex
                document containing a summary of each participant for easy review of top candidates. Our algorithm
                parses a resume by splitting it into generic categories such as work experience, projects, leadership
                and activities, and assigning each candidate points based off of their performance in each category.
                This parser is unique, because it does more than simply give a general score for a candidate. It
                analyzes a resume to determine the best job category for the applicant, and then adjusts the applicants
                score based off of performance in parameters that are unique to each job category.</p>
            <p style="text-align: center"><A HREF="#top">Back to top</a></p>
            </br>

        </div>
    </div>
</body>

</html>