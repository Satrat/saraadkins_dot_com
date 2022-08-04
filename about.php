<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include_once('./blocks/google_analytics.php'); ?>
    <title>Sara Adkins-About Me</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" type="text/css" href="/style/style.css">
</head>

<body>
    <div class="centerContent">
        <div class="header">
            <div class="back"><a href="/"><img src="/Images/back-arrow.gif" alt="Home"
                        style="border-radius: 25px 0px 0px 0px"></a></div>
            <div class="icon"><img src="/Images/about.gif" lign="left" alt="About Me icon">
                <h3>About Me</h3>
            </div>
        </div>

        <?php include('blocks/menu.php'); ?>

        <div class="content" id="aboutContent">
            <h4>Hello World, I'm Sara.</h4>
            <p><img src="/Images/CFA_headshot.jpg" alt="About Me Photo">I am a music technologist, machine learning engineer and performer 
            passionate about promoting the use of machine learning and AI in the creative arts. Currently I'm a US-UK Fulbright grant recipient 
            pursuing a Master of Science in Sound and Music Computing at Queen Mary University of London. My master's thesis focuses on developing 
            a Transformer model able to generate loopable musical phrases for use in live coding and algorave performances. I perform live coding 
            sets around London with SuperCollider being my language of choice, and recently led a workshop teaching musicians how machine learning 
            architectures such as RNNs and VAEs can be used for music composition and sound design with minimal coding.</p>
            <p>Prior to moving to London I spent three years in Boston, working as a machine learning engineer at Bose and performing as a freelance 
                classical guitarist. While at Bose, I worked in the applied research group in the Health division, developing protypes to help 
                customers hear better and sleep better. I worked on deep learning models for speech enhancement, and optimized them to run live on a 
                hearing aid micro-controller. I also led a research project developing generative audio algorithms that adapt to biofeedback signals 
                to induce sleep using soothing music. </p>
            <p>I graduated from Carnegie Mellon University in 2018 with an interdisciplinary bachelor's degree in music technology and computer 
                science. While in Pittsburgh, I performed as a guitarist with chamber group pairings ranging from renaissance vocalists, to string 
                quartets, to banjo players. My senior capstone project, “Creating with the Machine,” was a set of compositions combining algorithmic 
                and traditional methods of composition into live performances to explore how interactive generative algorithms can influence 
                creativity in musical improvisation. “Creating with the Machine” was premiered by the Carnegie Mellon Exploded Ensemble in the spring 
                of 2018, and was awarded the Henry Armero Memorial Award for Inclusive Creativity. I also presented the project at the 2019 Hackaday 
                Superconference in LA. </p>
            <p>I pride herself on having performed not only in concert halls, but also in an underground limestone mine and a giant inflatable dream 
                temple. As guitarist, violist and composer for the Carnegie Mellon Exploded Ensemble, I collaborated with other artists and musicians 
                to put on a literal underground electronic music festival at Bradys Bend Limestone Mine. The ensemble also performed an 8 hour 
                overnight concert of ambient music, where audience members were invited to drift in and out of sleep in an artist-created inflatable 
                environment to experience the subconscious effects of the music. Needless to say, I embrace abnormal and experimental performances. 
                I'm inspired by musical ideas that are new, different and weird, and am dedicated to making these types of performances accessible and 
                enjoyable for all audiences.</p>
            <p>In addition to making weird sounds with my laptop and guitar, I also enjoys knitting, long runs, playing Dungeons and Dragons and 
                thrift shopping. My favorite TV show is Avatar the Last Airbender, my favorite podcast is The Adventure Zone, my favorite band is 
                Jukebox the Ghost, and my favorite classical guitarist is Ana Vidovic.</p>
        </div>
    </div>
</body>

</html>