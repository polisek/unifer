<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unifer
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="section">
            <div class="sub-title-wrap">
                <h2 class="sub-sec-title">Nepřehlédněte</h2>
            </div>
            <div class="container">
                <div class="col-lg-12 mx-auto" style="position:relative;">
                    <div class="swiper" >
                        <div class="swiper-wrapper">
                            <?php 
                               function timeago($date) {
                                $timestamp = strtotime($date);	
                                
                                $strTime = array("vteřin", "minut", "hodin", "den", "měsíc", "rok");
                                $length = array("60","60","24","30","12","10");
                         
                                $currentTime = time();
                                if($currentTime >= $timestamp) {
                                     $diff     = time()- $timestamp;
                                     for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
                                     $diff = $diff / $length[$i];
                                     }
                         
                                     $diff = round($diff);
                                     return $diff . " " . $strTime[$i];
                                }
                             }
                                $args = array(
                                'numberposts' => 6
                                );
                                $latest_posts = get_posts( $args ); 
                                foreach($latest_posts as $post){
                                    $img = get_post_thumbnail_id( $post ); 
                                    $image = wp_get_attachment_url($img); 

                            ?>
                            

                            <div class="swiper-slide">
                                <div class="slider-box">
                                    <div class="row">
                                        <div class="col-7">
                                            <h5 class="slide-title"><?php echo $post->post_title; ?></h5>
                                            <p class="slide-description"><a href="<?php echo get_permalink( $post->ID );?>"><?php echo $post->post_content; ?></a> </p>
                                            <p class="slide-date"><?php echo date('j.n.Y', strtotime($post->post_date)); ?> <i class="icofont-clock-time"></i> <?php echo timeago($post->post_date_gmt); ?></p>
                                        </div>
                                        <div class="col-5"> 
                                            <img class="image-slide" src="<?php echo $image;?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                      </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="unifer-button mx-auto mt-32">Více na blogu <i class="icofont-caret-right"></i></a>
