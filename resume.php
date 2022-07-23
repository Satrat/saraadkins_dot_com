<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include_once('./blocks/google_analytics.php'); ?>
    <title>Sara Adkins-Resume</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" type="text/css" href="/style/style.css">
</head>

<body>
    <div class="centerContent">
        <div class="header">
            <div class="back"><a href="/"><img src="/Images/back-arrow.gif" alt="Home"
                        style="border-radius: 25px 0px 0px 0px"></a></div>
            <div class="icon"><img src="/Images/resume.gif" alt="Resume icon">
                <h3>Resume</h3>
            </div>
        </div>

        <?php include('blocks/menu.php'); ?>

        <div class="content" id="resumeContent">
            <a name="top"></a>
            <p><a href="/docs/Sara_Adkins_Resume.pdf">Click here to open my resume in fullscreen</a>.</p>
            </br>
            <object id='resume' data="/docs/Sara_Adkins_Resume.pdf" type="application/pdf">
                <p>Unfortunately, this browser does not support embedded PDFs. Please click the link above to view my
                    resume</p>
            </object>
            </br>
            <p style="text-align: center"><A HREF="#top">Back to top</a></p>
        </div>
    </div>
</body>

</html>