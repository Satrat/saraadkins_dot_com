<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sara Adkins-Contact Me</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
    <div class="centerContent">
        <div class="header">
            <div class="back"><a href="index.php"><img src="Images/back-arrow.gif" alt="Home"
                        style="border-radius: 25px 0px 0px 0px"></a></div>
            <div class="icon"><img src="Images/contact.gif" alt="Contact Me icon">
                <h3>Contact Me</h3>
            </div>
        </div>

        <?php include('blocks/menu.php'); ?>

        <div class="content" id="contactContent">
            </br>
            </br>
            <p>Have a question or comment?</p>
            <p>Interested in booking me for a freelance performance?</p>
            <p>Want to collaborate on a project?</p>
            <h5 style="text-align:center;"> Send me a message!</h5>:
            <br>
            <br>
            <form name="contactform" method="post" action="./php/send_form_email.php">
                <label for="name">Name</label>
                <br>
                <input type="text" name="name" placeholder="Your name..">
                </br>
                <label for="email">Email</label>
                <br>
                <input type="text" name="email" placeholder="Your Email..">
                </br>
                <label for="comments">Message</label>
                <br>
                <textarea name="comments" placeholder="Write something.." style="height:200px"></textarea>
                </br>
                <input type="submit" value="Submit">
                </br>
                </br>
            </form>
        </div>
    </div>
</body>

</html>