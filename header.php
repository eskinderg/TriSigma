<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * 
 */
?><!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalabe=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
global $accesspresslite_options;
$accesspresslite_settings = get_option( 'accesspresslite_options', $accesspresslite_options );
?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
    <div id="top-header">
		<div class="ak-container">
			<div class="site-branding">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">				
				<?php if ( get_header_image() ) { ?>
					<img src="<?php header_image(); ?>" alt="<?php bloginfo('name') ?>">
				<?php }else{ ?>
					<h1><?php echo bloginfo('title'); ?></h1>
					<div class="tagline"><?php echo bloginfo('description'); ?></div>
				<?php } ?>		
				</a>
				
			</div><!-- .site-branding -->
        

			<div class="right-header clearfix">
                            <div style="float:left; position:absolute;font-size:130%; font-weight:900;
                                 bottom:0px; color: rgba(0, 101, 207, 0.56);">
                                TRI SIGMA CONVENTION 
                                <span style="color: rgba(64, 41, 124, 0.56);">&middot; CHICAGO &middot; IL &middot; JUNE &middot; 10 &middot; 14 &middot;2016</span>
                            </div>

                            <div id="header-logo">
                                <img src="<?php echo get_template_directory_uri();?>/images/demo/TriSigmaConventionLogoNew.png">
                                 
                            </div>
                            

				                               
                            
                            
                            <?php 
				//do_action( 'accesspresslite_header_text' ); 
                            ?>
                            
                            
                            
                            
                <!-- <div class="clearfix"></div> -->
                <?php
				/** 
				* @hooked accesspresslite_social_cb - 10
				*/
				if($accesspresslite_settings['show_social_header'] == 0){
				do_action( 'accesspresslite_social_links' ); 
				}

				if($accesspresslite_settings['show_search'] == 1){ ?>
				<div class="ak-search">
					<?php get_search_form(); ?>
				</div>
				<?php } ?>
			</div><!-- .right-header -->
		</div><!-- .ak-container -->
  </div><!-- #top-header -->

		
		<nav id="site-navigation" class="main-navigation <?php do_action( 'accesspresslite_menu_alignment' ); ?>">
			<div class="ak-container">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'accesspresslite' ); ?></h1>

				<?php wp_nav_menu( array( 
				'theme_location' => 'primary' ) ); ?>
			</div>
                    <div id="thinbanner">
                        <div class="thinbar" id="thinbar1"></div>
                        <div class="thinbar" id="thinbar2"></div>
                        <div class="thinbar" id="thinbar3"></div>
                        <div class="thinbar" id="thinbar4"></div>
                        <div class="thinbar" id="thinbar5"></div>
                        <div class="thinbar" id="thinbar6"></div>
                        <div class="thinbar" id="thinbar7"></div>
                        <div class="thinbar" id="thinbar8"></div>
                    </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<section id="slider-banner">
		<?php 
		if(is_home() || is_front_page() ){
			do_action( 'accesspresslite_bxslider' );
                          
		}?>
	</section><!-- #slider-banner -->
	<?php
	if((is_home() || is_front_page()) && 'page' == get_option( 'show_on_front' )){	
		$accesspresslite_content_id = "content";	
	}elseif(is_home() || is_front_page() ){
	$accesspresslite_content_id = "home-content";
	}else{
	$accesspresslite_content_id ="content";
	} ?>
        
        <?php
            if(is_home() && is_front_page())
            {
                if(($accesspresslite_settings['show_welcome_text']==1))
                {
        ?>
    <div id="thinbanner" style="margin-top:3%;margin-bottom:3%;">
            <div class="thinbar" id="thinbar1"></div>
            <div class="thinbar" id="thinbar2"></div>
            <div class="thinbar" id="thinbar3"></div>
            <div class="thinbar" id="thinbar4"></div>
            <div class="thinbar" id="thinbar5"></div>
            <div class="thinbar" id="thinbar6"></div>
            <div class="thinbar" id="thinbar7"></div>
            <div class="thinbar" id="thinbar8"></div>
        </div>
    <div id="introduction">
                    <div id="intro-wrapper">
                        
                        <div id="introheaderwrapper">
                            <h1 style="text-align:center;font-weight: 900; color:#9173D3 ; 
                                font-size: 440%; margin:0px;
                                font-family:'script';">
                                Welcome
                            </h1>
                        </div>    
                        
                        <div style="text-indent: 50px; padding:2%; padding-bottom: 0%; padding-top:0%;"> 
                            <?php echo $accesspresslite_settings['welcome_text']; ?> 
                        </div>

                    </div>
                    <img id="front-page-signature" style="margin-left:2%;" src="<?php echo get_template_directory_uri(); ?>/images/demo/signature.png" alt="slider1">
                    <br>
                    <div style="clear:both;"></div>
                    <div id="nameandtitle">
                        <b>
                        <i>Angela David<br>
                        National Convention Chairman
                        </i>
                        </b>
                    </div>            
                    
                    <div style="clear:both;"></div>
                </div>
<div id="thinbanner" style="margin-bottom:30px; margin-top:30px; height:5px;">
    <div class="thinbar" id="thinbar1"></div>
    <div class="thinbar" id="thinbar6"></div>
    <div class="thinbar" id="thinbar4"></div>
    <div class="thinbar" id="thinbar2"></div>
    <div class="thinbar" id="thinbar8"></div>
    <div class="thinbar" id="thinbar3"></div>
    
    <div class="thinbar" id="thinbar5"></div>
 
    <div class="thinbar" id="thinbar7"></div>
    
</div>
        
        <?php
                }
            }
        ?>
        
        <script>
        /*    jQuery(function(){
        // Check the initial Poistion of the Sticky Header
        var stickyHeaderTop = jQuery('#site-navigation').offset().top;

        jQuery(window).scroll(function(){
                if( jQuery(window).scrollTop() > stickyHeaderTop ) {
                        jQuery('#site-navigation').css({position: 'fixed', top: '0px',width: '100%',background:'#7C4A95'});
                        //jQuery('#stickyalias').css('display', 'block');
                } else {
                        jQuery('#site-navigation').css({position: 'relative', top: '0px',width: '100%',background:'#40297C'});
                        //jQuery('#stickyalias').css('display', 'none');
                }
        });
        
  });*/
    
    
    
    jQuery('#site-navigation').addClass('original').clone().insertAfter('#site-navigation').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();

    scrollIntervalID = setInterval(stickIt, 100);


        function stickIt() {

          var orgElementPos = jQuery('.original').offset();
          orgElementTop = orgElementPos.top;               

          if (jQuery(window).scrollTop() >= (orgElementTop)) {
            // scrolled past the original position; now only show the cloned, sticky element.

            // Cloned element should always have same left position and width as original element.     
            orgElement = jQuery('.original');
            coordsOrgElement = orgElement.offset();
            leftOrgElement = coordsOrgElement.left;  
            widthOrgElement = orgElement.css('width');
            jQuery('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
            jQuery('.original').css('visibility','hidden');
          } else {
            // not scrolled past the menu; only show the original menu.
            jQuery('.cloned').hide();
            jQuery('.original').css('visibility','visible');
          }
        }
    
    
        </script>
        
        
        
	<div id="<?php echo $accesspresslite_content_id; ?>" class="site-content">
            
            
