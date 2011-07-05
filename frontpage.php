<?php
/*
Template Name: Front Page
*/

get_header(); ?>

<div id="content">

<div <?php post_class('post clear') ?>>

<h1 class="tweet"><?php twitter_messages('lucasratmundo', 1, false, false, false, true, true, false); ?></h1>

<div class="tweet-info">
&#8212;Follow me on <a title="Follow me on Twitter" href="http://www.twitter.com/lucasratmundo">Twitter</a>
</div> <!-- end of postInfos -->

<div class="postContent">

<p class="intro">Hi! I posted <?php query_posts('showposts=1'); ?>
<?php while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?> in my blog"><?php the_title(); ?></a>
<?php endwhile;?>
in my <a href="/blog">blog</a>. I'm now reading <?php bookshelf() ?>.
I've been <a href="http://www.last.fm/user/lucasrocha" target="_blank" title="My Last.fm profile">listening</a> to music by <?php ilastfm(true); ?> lately. My latest
uploaded photo is called <?php get_flickrRSS(); ?>. Have a look at the <a href="/about">about page</a> if you want to learn a bit about me.</p>

<p>

</p> <!-- end of photos -->

</div> <!-- end of postContent -->

</div> <!-- end of post -->

</div> <!-- end of content -->

<? get_footer(); ?>
