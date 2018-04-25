<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" class="entry">
	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>