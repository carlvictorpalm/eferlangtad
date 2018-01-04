<?php get_header(); ?>

<div class="row">
    <div class="wrapper">
        <div class="">
            <h2>Skapa tavlan här direkt!</h2>
        </div>
        <div class="form col-lg-6">
            <div class="innerform">
                <form>
                    <input type="text" placeholder="FÖDELSENAMN" name="birthname">
                    <input type="text" placeholder="FÖDELSELÄNGD" name="birthlength">
                    <input type="text" placeholder="FÖDELSEVIKT" name="birthweight">
                    <input type="text" placeholder="FÖDELSEDAG" name="birthday">
                    <input type="text" placeholder="FÖDELSETID" name="birthtime">
                </form>
                <div class="formbutton">
                    <button class="btn btn-success" type="button">Skapa tavlan!</button>
                </div>
            </div>
        </div>
        <div class="picture col-lg-6">
            <div class="innerpicture">

                
            </div>

        </div>
    </div> <!--Wrapper ends-->

    <?php get_footer(); ?>