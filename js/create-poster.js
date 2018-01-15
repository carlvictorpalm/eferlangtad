// Input text for canvas poster
(function ($) {
    $(document).ready(function () {
        //FÖDELSELÄNGD
        $(".birthlengthoutput").text('CM');

        //FÖDELSEVIKT
        $(".birthweightoutput").text(' GRAM');

        //FÖDELSETID
        $(".birthtimeoutput").text('00:00');

        $("#birthnameText").keyup(function(){
            var currentText = $(this).val();
            $(".birthnameoutput").text(currentText + 'NAMN');
        });
        $("#birthday").keyup(function(){
            var currentText = $(this).val();
            $(".birthdayoutput").text(currentText + '2018-01-01');
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

        $("#birthtime").keyup(function(){
            var currentText = $(this).val();
            $(".birthtimeoutput").text('00:00' + currentText);
        });

    });
})(jQuery);
