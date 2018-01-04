<?php get_header(); ?>
<div class="container">
    <div class="trustbar">
        <h3>trustbar</h3>
    </div>
    <!-- 
       INFORMATION
    -->
    <div id="info">
        <div class="aboutus col-lg-6">
        <p>
            Genom ett hav av känslor och längtan, är nu resan på nio månader äntligen gjord.
            Nu tar en ny livslång resa vid där ingen dag kommer bli den andre lik.
            Det finns stunder där tiden står still men ofta rinner den iväg
            snabbare än man hinner blinka.</p>
            <br>
            Att föreviga dagen då det lilla knytet äntligen fick landa i famnen,
            där ännu ett liv att älska kommit till jorden, där ni tillsammans är
            en familj livet ut tycker vi är värt att skapa.
            <br>
            <p>Genom våra tidlösa illustrationer gjorda av designers erbjuder vi
            trendiga posters att pryda era väggar.
            Lycka till i all framtid och glöm inte att ta tillvara på varje liten sekund tillsammans.
            <br>
            efterlängtad.se
        </p>
    </div>
    <!-- 
       PRODUKTER
    -->
    <div class="products col-lg-6">
       <div class="productid1 col-lg-12">
           <div class="col-lg-6">
               
               <img src=" <?php echo get_bloginfo('template_url') ?>./img/product.png" alt="">
           </div>
           <div class="col-lg-6">
               <img src="<?php echo get_bloginfo('template_url') ?>./img/product.png" alt="">
           </div>
       </div>
        <div class="productid2 col-lg-12">
            <div class="col-lg-6">
                <img src="<?php echo get_bloginfo('template_url') ?>./img/product.png" alt="">
            </div>
            <div class="col-lg-6">
                <img src="<?php echo get_bloginfo('template_url') ?>./img/product.png" alt="">
            </div>
        </div>
    </div>
        
    </div>

    <!-- 
       SALE
    -->
    <div class="sale col-lg-12">
        <div class="salediscount col-lg-6">
            <img src="<?php echo get_bloginfo('template_url') ?>./img/rabatt.png" alt="">
        </div>
        <div class="saleparents col-lg-6">
            <img src="<?php echo get_bloginfo('template_url') ?>./img/parents.png" alt="">
        </div>
    </div>
    <!--
	  INSPIRATION
   -->
    <div class="ins">
        <img src="<?php echo get_bloginfo('template_url') ?>./img/inspo.png" alt="">
    </div>


    <!-- 
        INSTAGRAM
    -->
    <?php if ( is_front_page() ) {  ?>
        <div id="instagram"></div> 
    <?php } ?>


    <!-- 
       MAIL
    -->
        <form action="https://test.us16.list-manage.com/subscribe/post?u=139bb3994f074491a1dc77315&amp;id=0fc232aa0c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

            <div class="home-newsletter">
                        <div class="col-sm-12">
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

            </div>

            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_139bb3994f074491a1dc77315_0fc232aa0c" tabindex="-1" value=""></div>
        </form>


<?php get_footer(); ?>
