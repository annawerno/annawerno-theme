<?php
/*

Template Name: Contact Us

*/

?>


<?php get_header(); ?>

<section class="page-wrap">
  <div class="container">

        <h1><?php the_title(); ?></h1>

        <div class="row">

          <div class="col-lg-6">This is first column of contact page</div>
          <div class="col-lg-6">This is Second column of contact page</div>

        </div>

        <?php get_template_part('includes/section', 'content'); ?>


  </div>
</section>

<?php get_footer(); ?>