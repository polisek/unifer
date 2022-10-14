<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unifer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<div class="section hp cn">
            <img src="" class="dark-blue-triangle">
            <img id="video-triangle" src="<?php echo get_template_directory_uri()?>/assets/image/videotr.png" class="video-triangle">
            <div class="navbar">
               <div class="container">
                    <div class="nav-wrap">
                        <div class="nav-logo cn">
                            <a href="https://noodi.cz/subdom/wp_test/"><img class="unifer-logo" src="<?php echo get_template_directory_uri()?>/assets/image/unifer-logo.png"></a>
                        </div>
                        <div class="nav-menu-box cn" onclick="toggleNav()">
                            <div id="nav-menu" class="nav-menu">
                                <?php 
                                    $menu_name = 'menu-1';
                                    $locations = get_nav_menu_locations();
                                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                                    $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                        
                                    foreach($menuitems as $item){  ?>
                                        <li class="nav-item"><a href="<?php echo($item->url);?>" class="nav-link"><?php echo $item->title; ?></a></li>
                                    <?php } ?>
                            </div>
                        </div>
                        <div id="nav-x" class="nav-x" onclick="toggleNav()">  
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
               </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-container">
                            <h1>H1 nadpis stránky</h1>
                            <p class="t-p-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                              Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan 
                              lacus vel facilisis. </p>
                              <?php $button = get_field('tlacitko'); ?>
                            <a href="<?php echo $button["tlacitko_odkaz"]; ?>" class="unifer-button"><?php echo $button["tlacitko_text"]; ?><i class="icofont-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



