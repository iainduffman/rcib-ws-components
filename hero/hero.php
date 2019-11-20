<!-- Stylesheet -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/components/hero/hero.css" type="text/css" media="screen" />
<!--  -->


<?php 
$featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0];
$heading = get_field('headline');
$subline = get_field('subline');
$linkText = get_field('link_text');
$linkURL = get_field('link_url');
?>

<div id="header-hero" class="heroContent uk-cover-container">

<img src="<?php echo $featimg ?>" alt="" uk-cover="" class="uk-cover" style="height: 647px; width: 1680px;">
<div class="uk-overlay-primary uk-position-cover"></div>
<div class="uk-overlay uk-position-center uk-light uk-text-center">
<div class="uk-grid">
<div class="uk-container">
<div class="uk-width-1-1" style="margin: auto;">
<h3><?php echo $heading ?></h3>
<h1 class="uk-text-bold massive-text"><?php echo $subline ?></h1>

<?php if( get_field('link_text') ): ?>
<a href="<?php echo $linkURL ?>" target="_blank" style="margin-right: 6px;" class="uk-button uk-button-primary uk-button-large"><?php echo $linkText ?></a>
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>
</div>