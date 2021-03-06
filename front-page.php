<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
		<?php bloginfo('name'); ?> |
		<?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->

    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head(); ?>
    <style>
        .showcase{
            background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/lapin.jpg'); ?>) no-repeat center center;
        }
    </style>
</head>
<body>
<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
			<?php
			wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker())
			);
			?>
        </nav>
    </div>
</div>
<section class="showcase">
    <div class="container">
        <h1><?php echo get_theme_mod('showcase_heading', 'Kim and Victors Custom Bootstrap Wordpress Theme'); ?></h1>
        <p><?php echo get_theme_mod('showcase_text', 'Default text'); ?></p>
    </div>
</section>
<div class="container">
    <div class="trustbar">
        <img src=" <?php echo get_bloginfo('template_url') ?>/img/trustbar.jpg" alt="">
    </div>
    <!-- 
       INFORMATION
    -->
    <div id="info">
        <div class="aboutus col-lg-6">
        <p>Genom ett hav av känslor och längtan, är nu resan på nio månader äntligen gjord.
                Nu tar en ny livslång resa vid där ingen dag kommer bli den andre lik.
                Det finns stunder där tiden står still men ofta rinner den iväg
                snabbare än man hinner blinka.</p>

            <p>Att föreviga dagen då det lilla knytet äntligen fick landa i famnen,
                där ännu ett liv att älska kommit till jorden, där ni tillsammans är
                en familj livet ut tycker vi är värt att skapa.</p>

            <p>Genom våra tidlösa illustrationer gjorda av designers erbjuder vi
                trendiga posters att pryda era väggar.
                Lycka till i all framtid och glöm inte att ta tillvara på varje liten sekund tillsammans. </p>
            <h5>/ efterlängtad.se</h5>

    </div>
    <!--
       PRODUKTER
    -->
    <div class="products col-lg-6">
        <div class="productid1 col-lg-12">
           <div class="pro1 col-sm-6 col-lg-6">
               <img src=" <?php echo get_bloginfo('template_url') ?>/img/product.png" alt="">
           </div>
           <div class="pro1 col-sm-6 col-lg-6">
               <img src="<?php echo get_bloginfo('template_url') ?>/img/product.png" alt="">
           </div>
        </div>
        <div class="productid2 col-lg-12">
            <div class="pro2 col-sm-6 col-lg-6">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/product.png" alt="">
            </div>
            <div class="pro2 col-sm-6 col-lg-6">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/product.png" alt="">
            </div>
        </div>
    </div>


    <!-- 
       SALE
    -->
    <div class="sale col-lg-12">
        <div class="col-lg-6">
            <div class="salediscount">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/rabatt.png" alt="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="saleparents">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/parents.png" alt="">
            </div>
        </div>
    </div>
    <!--
	  INSPIRATION
   -->
    <div class="inspo">
        <img src="<?php echo get_bloginfo('template_url') ?>/img/inspo.png" alt="">
    </div>

    <!-- 
        INSTAGRAM
    -->
    <?php if ( is_front_page() ) {  ?>
        <div class="instagram">
            <p>Instagram ,</p>
        </div>

        <div id="instagram"></div> 
    <?php } ?>


    <!-- 
       MAIL
    -->
        <form action="https://test.us16.list-manage.com/subscribe/post?u=139bb3994f074491a1dc77315&amp;id=0fc232aa0c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

            <div class="newsletter col-sm-12">
                <div class="single">
                    <h1>NYHETSBREV</h1>
                    <p>Prenumerera på vårat nyhetsbrev och få 10% rabatt på din första beställning. Få löpande erbjudande, insperation och nyheter från äntligen.se.</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Din e-post">
                        <span class="input-group-btn">
                            <button class="btn btn-theme" type="submit">Prenumerera</button>
                        </span>
                    </div>
                </div>
            </div>

            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_139bb3994f074491a1dc77315_0fc232aa0c" tabindex="-1" value=""></div>
        </form>


<?php get_footer(); ?>
