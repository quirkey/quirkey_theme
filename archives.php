<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content">


<h2>Archives by Month:</h2>
  <ul class="archive">
    <?php wp_get_archives('type=monthly'); ?>
  </ul>

<h2>Archives by Subject:</h2>
  <ul class="archive">
     <?php wp_list_cats(); ?>
  </ul>
</div>	
<?php get_footer(); ?>
