<!-- Stylesheet -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/components/image-breaker/image-breaker.css" type="text/css" media="screen" />
<!--  -->


<?php
$image = get_sub_field('image');
$title = get_sub_field('title');
$description = get_sub_field('description');
?>

<div class="image-hero-text uk-inline">
<img src="<?php echo $image ?>" alt="">
<div class="uk-overlay-primary uk-position-cover"></div>
<div class="uk-light uk-overlay uk-position-center uk-text-center">
<div class="uk-grid">
<div class="uk-container">
<div class="uk-width-2-3" style="margin: auto;">
<h1 class="uk-text-bold massive-text"><?php echo $title ?>
</h1>
<p class="uk-text-large">
<?php echo $description ?></p>
<a href="#" target="_blank" class="tm-button-default uk-button uk-button-default uk-icon uk-width-1-1 uk-button-primary">Learn More</a>
</div>
</div>
</div>
</div>
</div>