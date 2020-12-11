<?php get_header(); ?>

<main>

<?php if(have_posts()): ?>
<?php the_post(); ?>
<p><?php the_time('Y年m月d日'); ?></p>
<span><?php the_post_thumbnail(); ?></span>
<h1><?php the_title(); ?></h1>
<hr>
<p>
	<?php the_content(); ?>
</p>

<?php else: ?>
	<p>お探しの記事は見つかりません</p>
<?php endif; ?>

</main>

<?php get_footer(); ?>