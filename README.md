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
