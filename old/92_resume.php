<?php

include_once('./classes/project_post.php');

$post = new ProjectPost();
$post->title = 'Resume Parser and Classifier';
$post->subtitle = 'Hackathon project for rating and grouping PDF resumes';
$post->name = 'resume';
$post->card = '/Images/resume_tile.jpg';
$post->content = '

<p><b>GitHub Link: </b><a href="https://github.com/Satrat/Resume-Parser" target="_blank">Resume-Parser</a></p>
<p>This hackathon project, developed at YHacks 2015, parses PDF resumes and sorts them by score in a Latex
    document containing a summary of each participant for easy review of top candidates. Our algorithm
    parses a resume by splitting it into generic categories such as work experience, projects, leadership
    and activities, and assigning each candidate points based off of their performance in each category.
    This parser is unique, because it does more than simply give a general score for a candidate. It
    analyzes a resume to determine the best job category for the applicant, and then adjusts the applicants
    score based off of performance in parameters that are unique to each job category.
</p>

';

?>