<!-- Stylesheet -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/components/offer-tiles/offer-tiles.css" type="text/css" media="screen" />

<div class="dealContainer uk-container uk-padding-large uk-padding-remove-bottom uk-padding-remove-left uk-padding-remove-right uk-padding-remove-top">

<ul class="tabs uk-child-width-expand" uk-tab>
<li class="uk-active"><a href="#">Latest Offers</a></li>
<li><a href="#">What Is Club RCIB?</a></li>
<!-- <li><a href="#">Our Brands</a></li> -->
</ul>

<ul class="uk-switcher uk-margin">
<li>

<div class="dealWrapper offerContainer">
<div class="uk-grid-match uk-grid-column-medium uk-grid-row-medium uk-child-width-1-3@s uk-text-center" uk-grid>

<?php

if ( is_page() ) {
         
    // define query arguments
     $args = array(
         'posts_per_page' => 12,
         'post_type'   => 'offers',
         'post_status' => 'publish'
         // your 'x' goes here
         // possibly more arguments here
     );
          
          }
 
 
     // set up new query
     $tyler_query = new WP_Query( $args );
 
     // loop through found posts
     while ( $tyler_query->have_posts() ) : $tyler_query->the_post();

     $description = get_field('description');
     $offerType = get_field('offer_type');
     $offerAmount = get_field('amount');
     $featimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0];

    //
    echo '<div class="uk-first-column"><div class="uk-card uk-card-default uk-card-body">
    <div>';

    // Card Hero Image
    echo '
    <span class="uk-badge">£'.$offerAmount.' '.$offerType.' Offer</span>
    <div class="cardHero uk-hidden" style="background-image: url('.$featimg.';); background-size: cover;"></div><div class="cardContents uk-padding-remove-top">
    <img class="productImage" src="'.$featimg.'">';

    // Card Contents
    echo '<h3>'.get_the_title().'</h3>
    <p>'.$description.'</p>';

    // Card CTA
    echo '<a href="'.get_permalink().'"><button class="uk-width-1-1 uk-button uk-button-primary uk-button-large">More Info</button></a>';

    //
    echo '</div>
    </div>
    </div>
    </div>';
    endwhile;

    // reset post data
    wp_reset_postdata();
    ?>


</li>

<li>
<div class="dealWrapper offerContainer">
<h1 class="uk-margin-bottom uk-text-center" style="color: #303080;">
<?php
$my_postid = 722;//This is page id or post id
echo get_the_title($my_postid);
?>
</h1>
<?php
$my_postid = 722;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
?>
</div>
</li>

<li>
<div class="dealWrapper offerContainer">
<h1 class="uk-margin-bottom uk-text-center" style="color: #303080;">
<?php
$my_postid = 689;//This is page id or post id
echo get_the_title($my_postid);
?>
</h1>
<?php
$my_postid = 689;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
?>
</div>
</li>
</ul>

</div></div>

</div>