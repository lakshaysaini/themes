<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="fullbox" id="post-<?php the_ID(); ?>">
				<div class="fullbox_header"></div>
				<div class="fullbox_content">
					<div class="breadcrumb"> 
						<a href="<?php bloginfo('url'); ?>" title="<?php _e('Home'); ?>"><?php _e('Home'); ?></a> 
						<img src="<?php bloginfo('template_directory'); ?>/images/arrow.png" alt=""  /> 
						<?php the_category(' '); ?> 
						<img src="<?php bloginfo('template_directory'); ?>/images/arrow.png" alt=""  /> 
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</div>
					<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
					<div class="post_info">
						<div class="post_info_left"><?php echo __('Posted on', 'techified').' '.get_the_time(__('F j, Y', 'techified')); ?> <?php echo the_author_posts_link(); ?></div>
						<div class="post_info_edit"><?php edit_post_link(__('Edit this entry', 'techified'),'','.'); ?></div>
						<div class="post_info_right"> 
							<a href="#respond" class="post_comment"><?php comments_number(__('No Comment', 'techified'), __('1 Comment', 'techified'), __('% Comments', 'techified')); ?></a>
<?php  if(!get_option ( 'techified_mbl_id' )) { ?>
							<!-- AddThis Button BEGIN -->
							<script type="text/javascript"> var addthis_disable_flash = true; </script>
							<span class="post_bookmark"><a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pub=cheonnii" addthis:url="<?php urlencode(the_permalink()); ?>" addthis:title="<?php urlencode(the_title()); ?>"><?php _e('BOOKMARK', 'techified'); ?></a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub=cheonnii"></script></span>
							<!-- AddThis Button END -->
<?php } ?>
						</div>
					</div>
					<div class="post_content">
						<?php the_content(''); ?>
					</div>
					<div class="post_tags">
						<?php _e('Tagged with:', 'techified'); ?> <?php the_tags(' ', ', ', ''); ?>
					</div>
				</div>
                <?php wp_link_pages( $args ); ?>
				<div class="fullbox_footer"></div>
			</div>
			<div id="page-navigator">
			<?php wp_link_pages('before=<span class="pages">'.__('Pages:', 'techified').'</span>&link_before=<span class="page">&link_after=</span>'); ?>
			</div>
<!--			<?php comments_template(); ?>     -->
		<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
<?php get_sidebar(); ?>			
<?php get_footer(); ?>