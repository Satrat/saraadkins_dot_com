<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include_once('./blocks/google_analytics.php'); ?>
    <title>Sara Adkins-Code</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" type="text/css" href="/style/style.css">
    <link rel="stylesheet" href="/style/colorbox.css">
    <link rel="stylesheet" type="text/css" href="/skin/blue.monday/css/jplayer.blue.monday.css">
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/jquery.jplayer.min.js"></script>
    <script src="/js/jquery.jplayer.inspector.min.js"></script>
    <script src="/js/jplayer.playlist.js"></script>
    <script src="/js/jquery.colorbox-min.js"></script>
    <?php
        $files = glob("project_posts/*.php");
        $posts = array();
        foreach($files as $file) {
            include $file;
            $posts[] = $post;
        }
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".group1").colorbox({
                rel: "group1",
                width: "90%",
                transition: "fade"
            });
            $(".group2").colorbox({
                rel: "group2",
                transition: "fade"
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
            <div class="back"><a href="/"><img src="/Images/back-arrow.gif" alt="Home"
                        style="border-radius: 25px 0px 0px 0px"></a></div>
            <div class="icon"><img src="/Images/portfolio.gif" alt="Code icon">
                <h3>Code</h3>
            </div>
        </div>

        <?php include('blocks/menu.php'); ?>

        <div class="cards">
            <?php
                foreach($posts as $post) {
                    echo('<a href=#' . $post->name . '>');
                        echo('<div class="card" id="portfolio-cards">');
                            echo('<img class="card-content" src="' . $post->card . '" alt="Avatar" style="width:100%">');
                            echo('<div class="cardContainer">');
                                echo('<h5><b>' . $post->title . '</b></h5>');
                                echo('<p>' . $post->subtitle . '</p>');
                            echo('</div>');
                        echo('</div>');
                    echo('</a>');
                }
                ?>
        </div>

        
        <div class="content" id="codeContent">
        <a name="top"></a>

        <?php
        foreach($posts as $post) {
            echo('<a name="'.$post->name.'"><h5>'.$post->title.'</h5></a>');
            echo('<h4>'.$post->subtitle.'</h4>');            
            echo($post->content);
            echo('<p style="text-align: center"><A HREF="#top">Back to top</a></p></br>');
        }
        ?>
        </div>
    </div>
</body>

</html>