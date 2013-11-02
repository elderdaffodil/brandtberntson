<article id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
	<header>
		<h2><?php the_title(); ?></h2>
		<div class="entry-meta">
			<?php the_time( get_option( 'date_format' ) ) ?> | 
			<?php echo get_the_term_list( $post->ID, 'gamepress_video_category',  __( 'Posted in ', 'gamepress' ),', ',' | ') ?>
			<?php comments_popup_link(__('No comments','gamepress'), __('1 comment','gamepress'), __('Comments: %','gamepress')); ?>
		</div>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
		<div class="clear"></div>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'gamepress' ), 'after' => '</div>' ) ); ?>

		<?php if( has_tag() ) : ?>
			<hr class="divider-dotted" />
		<?php endif; ?>

		<div class="alignleft tags"><?php the_tags( __( 'Tagged: ', 'gamepress' ), ', ', ''); ?></div>
    	<?php edit_post_link(__('Edit this entry','gamepress'),'<p>', '</p>'); ?>
	</div>
</article>
	
