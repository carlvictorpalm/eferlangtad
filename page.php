<?php get_header(); ?>
<?php the_content();?>

    <div class="row">
        <div class="wrapper">
            <div class="title">
                <h1>Skapa din tavla</h1>
            </div>
            <div class="form col-lg-6">
                <div class="innerform">


                    <form action="wp_posterdata.php" method="post">
                        <input type="text" id="birthnameText" placeholder="FÖDELSENAMN" name="birthname">
                        <input type="text" id="birthlength" maxlength="2" placeholder="FÖDELSELÄNGD" name="birthlength">
                        <input type="date" id="birthday" placeholder="FÖDELSEDAG" name="birthday">
                        <input type="text" id="birthweight" maxlength="4" placeholder="FÖDELSEVIKT" name="birthweight" >
                        <br>
                        <div class="birthtimefield">
                            <span>FÖDELSETID</span><input type="text" id="birthhours" maxlength="2" class="time1"  placeholder="00" name="birthhours">
                            <span>:</span><input type="text" id="birthminutes" maxlength="2" class="time2"  placeholder="00" name="birthminutes">

                        </div>
                    </form>
                    <div id="steps"></div>
                    <div class="formbutton">
                        <button class="btn btn-success" type="button">LÄGG TILL I VARUKORGEN</button>
                    </div>
                </div>
            </div>

            <div class="picture col-lg-6">
                <div class="innerpicture">
                    <img src="<?php echo get_bloginfo('template_url') ?>/img/bild.jpg" alt="">
                    <div class="birthnameoutput"></div>
                    <div class="birthlengthoutput"></div>
                    <div class="birthweightoutput"></div>
                    <div class="birthdayoutput"></div>
                    <div class="birthhours"></div>
                    <div class="birthminutes"></div>
                </div>
            </div>
        </div> <!--Wrapper ends-->



<?php get_footer(); ?>

