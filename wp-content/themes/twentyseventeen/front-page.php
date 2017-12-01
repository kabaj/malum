<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 */

get_header(); ?>

<div class="container">
  <div class="row">
    <div class="media">
      <img class="mr-3" src="<?php the_field('home_page_header_image');?>" style width="50%" alt=""/>
      <div class="media-body">
        <h1 class="mt-0"><?php the_field('home_page_header_text');?></h1>
          <p><?php the_field('home_page_header_description');?></p>
      </div>
    </div>
  </div>

<div class="div">
</div>
<div class="row">
  <div class="col">
<?php
$hero = get_field('home_page_product');

if( $hero ): ?>
		<img src="<?php echo $hero['image']; ?>" style width="25%" alt="<?php echo $hero['image']['alt']; ?>"/>
    <div>
			<?php echo $hero['caption']; ?> <br>
      <?php echo $hero['text']; ?>
    </div>
<?php endif; ?>
</div>
<div class="col">
<?php
$hero = get_field('home_page_product');

if( $hero ): ?>
  <img src="<?php echo $hero['image']; ?>" style width="25%" alt="<?php echo $hero['image']['alt']; ?>"/>
  <div>
    <?php echo $hero['caption']; ?> <br>
    <?php echo $hero['text']; ?>
  </div>
<?php endif; ?>
</div>
<div class="col">
<?php
$hero = get_field('home_page_product');

if( $hero ): ?>
  <img src="<?php echo $hero['image']; ?>" style width="25%" alt="<?php echo $hero['image']['alt']; ?>"/>
  <div>
    <?php echo $hero['caption']; ?> <br>
    <?php echo $hero['text']; ?>
  </div>
<?php endif; ?>
</div>
</div>
</div>
<?php get_footer();
