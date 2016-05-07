<?php get_header(); ?>
<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<!--IMAGES-->
<div class="blog-page">
<div id="ms-container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="ms-item">
  <div>
    <?php the_post_thumbnail( 'full'); ?>
  </div>
</div>
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
</div>
</div>
<script type="text/javascript">
// element
imagesLoaded( document.querySelector('#container'), function( instance ) {
  console.log('all images are loaded');
});
// selector string
imagesLoaded( '#container', function() {...});
// multiple elements
var posts = document.querySelectorAll('.post');
imagesLoaded( posts, function() {...});
</script>


<script type="text/javascript">

    jQuery(window).load(function() {

  // MASSONRY Without jquery
  var container = document.querySelector('#ms-container');
  var msnry = new Masonry( container, {
    itemSelector: '.ms-item',
    columnWidth: '.ms-item',
  });

    });


</script>

<?php get_footer(); ?>
