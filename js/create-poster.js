// Input text for canvas poster
(function ($) {
    $(document).ready(function () {
        //FÖDELSELÄNGD
        $(".birthlengthoutput").text('CM');

        //FÖDELSEVIKT
        $(".birthweightoutput").text(' GRAM');

        //FÖDELSETID
        $(".birthhours").text('00');
        $(".birthminutes").text('00');
        // FÖDELSEDAG
        $(".birthdayoutput").text('åååå-mm-dd');

        $("#birthnameText").keyup(function(){
            var currentText = $(this).val();
            $(".birthnameoutput").text(currentText);
        });
        $("#birthday").keyup(function(){
            var currentText = $(this).val();
            $(".birthdayoutput").text(currentText);
        });

        // INFO



        $("#birthlength").keyup(function(){
            var currentText = $(this).val();
            $(".birthlengthoutput").text(currentText + ' CM');
        });

        $("#birthweight").keyup(function(){
            var currentText = $(this).val();
            $(".birthweightoutput").text(currentText + ' GRAM');
        });

        $("#birthhours").keyup(function(){
            var currentText = $(this).val();
            $(".birthhours").text(currentText);
        });
        $("#birthminutes").keyup(function(){
            var currentText = $(this).val();
            $(".birthminutes").text(currentText);
        });

    });
})(jQuery);
