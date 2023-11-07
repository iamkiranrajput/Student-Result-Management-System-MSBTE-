(function($) {
    "use strict";

    /*==================================================================
    [ Validate after type ]*/
    $('.validate-input .input100').each(function() {
        $(this).on('blur', function() {
            if (validate(this) == false) {
                showValidate(this);
            } else {
                $(this).parent().addClass('true-validate');
            }
        })
    })


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function() {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function() {
        $(this).focus(function() {
            hideValidate(this);
            $(this).parent().removeClass('true-validate');
        });
    });



    //form validation-----------

    function validate(input) {

        var markpattern = /^[0-9]{1,2}$/;
        var namepattern = /^[A-Za-z]{3,10}$/;
        var sempattern = "Semester";
        var seatpattern = /^[0-9]{6}$/;
        // var coursepattern = /^[A-Za-z ]{3,40}$/;
        var coursepattern = "Course";
        var exampattern = "Examination";
        var subpattern = /^[A-Za-z ]{3,40}$/;
        var en = /^[0-9]{10}$/;





        if (($(input).attr('id') == 'middle-name') || ($(input).attr('id') == 'last-name') || ($(input).attr('id') == 'first-name')) {
            if ($(input).val().match(namepattern) == null) {
                return false;
            }
        } else if ($(input).attr('id') == 'seat-no') {
            if ($(input).val().match(seatpattern) == null) {
                return false;
            }
        } else if ($(input).attr('id') == 'course') {
            if ($(input).val().match(coursepattern)) {
                return false;
            }
        } else if ($(input).attr('id') == 'semester') {
            if ($(input).val().match(sempattern)) {
                return false;
            }
        } else if ($(input).attr('id') == 'examination') {
            if ($(input).val().match(exampattern)) {
                return false;
            }
        } else if ($(input).attr('id') == 'subname') {
            if ($(input).val().match(subpattern) == null) {
                return false;
            }
        } else if ($(input).attr('id') == 'subese70') {
            if (($(input).val().match(markpattern) == null) || (($(input).val() > 70))) {
                return false;
            }
        } else if ($(input).attr('id') == 'subtest30') {
            if (($(input).val().match(markpattern) == null) || (($(input).val() > 30))) {
                return false;
            }
        } else if ($(input).attr('id') == 'subtest50') {
            if (($(input).val().match(markpattern) == null) || (($(input).val() > 50))) {
                return false;
            }
        } else if ($(input).attr('id') == 'subtest25') {
            if (($(input).val().match(markpattern) == null) || (($(input).val() > 25))) {
                return false;
            }
        } else if ($(input).attr('id') == 'enrollmentno') {
            if ($(input).val().match(en) == null) {
                return false;
            }
        } else {
            if ($(input).val().trim() == '') {
                return false;


            }

        }
    }

    //form validation end----------










    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');

        $(thisAlert).append('<span class="btn-hide-validate">&#xf136;</span>')
        $('.btn-hide-validate').each(function() {
            $(this).on('click', function() {
                hideValidate(this);
            });
        });
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).removeClass('alert-validate');
        $(thisAlert).find('.btn-hide-validate').remove();
    }


})(jQuery);