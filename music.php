<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include_once('./blocks/google_analytics.php'); ?>
    <title>Sara Adkins-Music</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" type="text/css" href="/style/style.css">
    <link rel="stylesheet" type="text/css" href="/skin/blue.monday/css/jplayer.blue.monday.css">
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/jquery.jplayer.min.js"></script>
    <script src="/js/jquery.jplayer.inspector.min.js"></script>
    <script src="/js/jplayer.playlist.js"></script>
    <?php
        $files = glob("music_posts/*.php");
        $posts = array();
        foreach($files as $file) {
            include $file;
            $posts[] = $post;
        }
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            <?php 
            foreach($posts as $post) {
                echo('var ' . $post->name . 'Playlist = new jPlayerPlaylist({');
                    echo('jPlayer: "#jquery_jplayer_' . $post->name . '",');
                    echo('cssSelectorAncestor: "#jp_container_' . $post->name . '"');
                echo('}, [');
                foreach($post->playlist as $song) {
                    echo('{');
                    echo('playlist: "' . $post->name . '",');
                    echo('title: "' . $song->title . '",');
                    echo('artist: "' . $song->artist . '",');
                    echo('free: true,');
                    echo('mp3: "' . $song->mp3 . '"');
                    echo('},');
                }
                echo('], {');
                    echo('swfPath: "./js",');
                    echo('supplied: "mp3",');
                    echo('wmode: "window",');
                    echo('useStateClassSkin: true,');
                    echo('autoBlur: false,');
                    echo('smoothPlayBar: true,');
                    echo('keyEnabled: true');
                echo('});');
            }
            ?>
        });
    </script>
</head>

<body>
    <div class="centerContent">
        <a name="top"></a>
        <div class="header">
            <div class="back"><a href="/"><img src="/Images/back-arrow.gif" alt="Home"
                        style="border-radius: 25px 0px 0px 0px"></a></div>
            <div class="icon"><img src="/Images/music.gif" alt="Music icon">
                <h3>Music</h3>
            </div>
        </div>

        <?php include('blocks/menu.php'); ?>

        <div class="content" id="musicContent">
            <div class="cards">
                <?php
                foreach($posts as $post) {
                    echo('<a href=#' . $post->name . '>');
                        echo('<div class="card" id="music-cards">');
                            echo('<img class="card-content" src="' . $post->card . '" alt="Avatar" style="width:100%">');
                            echo('<div class="cardContainer">');
                                echo('<h5><b>' . $post->title . '</b></h5>');
                            echo('</div>');
                        echo('</div>');
                    echo('</a>');
                }
                ?>
            </div>

            <?php
                foreach($posts as $post) {
                    echo('<a name="'.$post->name.'"><h5>'.$post->title.'</h5></a>');
                    echo($post->content);
                    foreach($post->playlist as $song) {
                        $title = str_replace(" ", "", $song->title);
                        echo('<div style="display:none;" id="' . $title . '_description">' . $song->description . '</div>');
                    }
                    echo('</br>');
                    echo('<div id="' . $post->name . '_holder" align="center">');
                    echo('<div id="jquery_jplayer_' . $post->name . '" class="jp-jplayer"></div>');
                    echo('<div id="jp_container_' . $post->name . '" class="jp-audio" role="application" aria-label="media player">');
                    include('./blocks/music_player_partial.php');
                    echo('</br><p style="text-align: center"><A HREF="#top">Back to top</a></p>');
                }
            ?>
        </div>
    </div>
</body>

</html>