<?php get_header(); //include header.php ?>

<main id="content">
	<?php //THE LOOP
		if( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
			<h2 class="entry-title"> 
				<a href="<?php the_permalink(); ?>"> 
					<?php the_title(); ?> 
				</a>
			</h2>
			<?php the_post_thumbnail('thumbnail', array('class' => 'thumb clearfix') ); //show the featured image?>


			<div class="entry-content">
				<?php 
				if(is_singular() ):
					the_content();
				else:
					the_excerpt(); 
				endif;
				?>
			</div>
			<div class="postmeta"> 
				<span class="author"> Posted by: <?php the_author(); ?></span>
				<span class="date"><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></span>
				<span class="num-comments"> <?php comments_number(); ?></span>
				<span class="categories"><?php the_category(); ?></span>
				<span class="tags"><?php the_tags(); ?></span> 
			</div><!-- end postmeta -->			
		</article><!-- end post -->

		<?php endwhile; ?>

		<div class="pagination">
			<?php
			//check to see if pagenavi plugin is running

			if(function_exists('wp_pagenavi') && !wp_is_mobile()):
				wp_pagenavi();
			else:
				previous_posts_link('&larr; Newer Posts'); 
				next_posts_link('Older Posts &rarr;');
			endif;
			?>
		</div>



	<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>

</main><!-- end #content -->

<?php get_sidebar(); //include sidebar.php ?>
<?php get_footer(); //include footer.php ?>