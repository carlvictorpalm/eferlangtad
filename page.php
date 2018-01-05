<?php get_header(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <script>
        // Input text for canvas birthnameText
        $(document).ready(function(){
            $("#birthnameText").keyup(function(){
                var currentText = $(this).val();
                $(".birthnameoutput").text(currentText);
            });

            $("#birthlength").keyup(function(){
                var currentText = $(this).val();
                $(".birthlengthoutput").text(currentText);
            });

            $("#birthweight").keyup(function(){
                var currentText = $(this).val();
                $(".birthweightoutput").text(currentText);
            });

            $("#birthday").keyup(function(){
                var currentText = $(this).val();
                $(".birthdayoutput").text(currentText);
            });

            $("#birthtime").keyup(function(){
                var currentText = $(this).val();
                $(".birthtimeoutput").text(currentText);
            });
        });
    </script>

    <div class="row">
        <div class="wrapper">
            <div class="title">
                <h2>Skapa din tavla och lägg i varukorgen</h2>
            </div>
            <div class="form col-lg-6">
                <div class="innerform">
                    <form>
                        <input type="text" id="birthnameText" placeholder="FÖDELSENAMN" name="birthname">
                        <input type="text" id="birthlength" placeholder="FÖDELSELÄNGD" name="birthlength">
                        <input type="text" id="birthday" placeholder="FÖDELSEDAG" name="birthday">
                        <input type="text" id="birthtime" placeholder="FÖDELSETID" name="birthtime">
                        <input type="text" id="birthweight" placeholder="FÖDELSEVIKT" name="birthweight">
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
                    <div class="birthlengthoutput"></div>
                    <div class="birthweightoutput"></div>
                    <div class="birthdayoutput"></div>
                    <div class="birthtimeoutput"></div>
                </div>
            </div>
        </div> <!--Wrapper ends-->



<?php get_footer(); ?>