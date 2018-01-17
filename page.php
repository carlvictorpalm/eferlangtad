<?php get_header(); ?>


    <div class="row">
        <div class="wrapper">
            <div class="title">
                <h1>Skapa din tavla</h1>
            </div>
            <div class="form col-lg-6">
                <div class="innerform">
                    <form>
                        <input type="text" id="birthnameText" placeholder="FÖDELSENAMN" name="birthname">
                        <input type="text" id="birthlength" placeholder="FÖDELSELÄNGD" name="birthlength">
                        <input type="date" id="birthday" placeholder="FÖDELSEDAG" name="birthday">
                        <input type="text" id="birthweight" placeholder="FÖDELSEVIKT" name="birthweight">
                        <br>
                        <div class="birthtimefield">
                            <span>FÖDELSETID</span><input class="time1" type="text" id="birthtime" placeholder="" name="birthtime">
                            <span>:</span><input class="time2" type="text" id="birthtime" placeholder="" name="birthtime">
                        </div>
                    </form>
                    <div class="formbutton">
                        <button class="btn btn-success" type="button">LÄGG TILL I VARUKORGEN</button>
                    </div>
                </div>
            </div>

            <div class="picture col-lg-6">
                <div class="innerpicture">
                    <img src="<?php echo get_bloginfo('template_url') ?>/img/bild.jpg" alt="">
                    <div class="birthnameoutput"></div>
                    <div class="birthlengthoutput" maxlength="2"></div>
                    <div class="birthweightoutput" maxlength="4"></div>
                    <div class="birthdayoutput"></div>
                    <div class="birthtimeoutput"></div>
                </div>
            </div>
        </div> <!--Wrapper ends-->



<?php get_footer(); ?>