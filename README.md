# saraadkins_dot_com
Portfolio Website

## Adding New Posts
The Music and Portfolio pages are dynamically generated and should not need to be edited in order to add a post. There are PHP classes for music and projcet posts. To add a new project post, copy the file `project_post.php.template` file in the `project_posts/` directory and name it `#_postname.php` where `#` is the order it will appear in the posts list, then edit post to add your content.

```
<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'Project Title';
$post->subtitle = 'A Snappy Subtitle';
$post->name = 'post_name'; // unique, no spaces
$post->card = '/Images/image.png'; // absolute
$post->content = '

A bunch of HTML

';

?>
```
Similarly, for a new music post, copy the `music_post.php.template` file and rename it in the same way. The differences here are that music posts do not have subtitles, and they have playlists:
```
$post->playlist = Array();

$post->playlist[] = new Song(
    "Song 1 Title",
    "Artist",
    "Description",
    "Audio/absolute/path/to/file.mp3"
);
$post->playlist[] = new Song(
    "Song 2 Title",
    "Artist",
    "Description",
    "Audio/absolute/path/to/file.mp3"
);
```

## Offline Development
Because the website is written in PHP, the files cannot just be viewed in a browser like HTML files. You will need to set up a server to host the pages locally. A LAMP stack will work (although the M is not needed here). The easiest cross-platform way to set up for offline development is [XAMPP](https://www.apachefriends.org/). in `httpd.conf` make sure that all instances of `AllowOverride` are set to `All`. Either copy the project files into `xampp/htdocs`, or use a symlink. Either way, the path to `index.php` should be `xampp/htdocs/index.php`.

## Deployment
Set up a [LAMP Stack](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-22-04) (though MySQL is not needed). There are no `.html` files in the site, but it's still best practice to make sure that `.php` files are prioritized. From the DigitalOcean article linked above:

```
sudo nano /etc/apache2/mods-enabled/dir.conf
```

```
<IfModule mod_dir.c>
        DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm
</IfModule>
```

```
sudo systemctl reload apache2
```

Also make sure that `mod_rewrite` is enabled in your Apache server:
```
sudo a2enmod rewrite
```