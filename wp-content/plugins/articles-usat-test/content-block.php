<aside class="recent-post">
  <div class="recent-post-metadata">
    <h2 class="recent-post-headline">
      <a href="<?php echo get_the_permalink( $recent_post_id ); ?>">
        <?php echo get_the_title( $recent_post_id ); ?>
      </a>
    </h2>
    <p class="recent-post-byline">
      By: <a href="<?php echo get_author_posts_url( get_post_field( 'post_author', $recent_post_id ) ); ?>" class="recent-post-author" rel="author">
            <?php echo get_the_author( $recent_post_id ); ?>
          </a>
    </p>
    <p class="recent-post-timestamp" data-full-date="<?php echo time_elapsed_string( get_the_time( 'c', $recent_post_id )); ?>">
      <time datetime="<?php echo get_the_time( 'c', $recent_post_id ); ?>"><?php echo time_elapsed_string( get_the_time( 'c', $recent_post_id ), true ); ?></time>
    </p>
    <h3 class="recent-post-category">
      <?php $category = get_the_category( $recent_post_id ); ?>
      <a href="<?php echo get_category_link( $category[0]->term_id ); ?>">
        <?php echo $category[0]->cat_name; ?>
      </a>
    </h3>
  </div>
  <div class="recent-post-thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url( $recent_post_id ); ?>);">
    <a href="<?php echo get_the_permalink( $recent_post_id ); ?>">
      <img src="<?php echo get_the_post_thumbnail_url( $recent_post_id ); ?>" />
    </a>
  </div>
</aside>
