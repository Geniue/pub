(function($){
    "use strict";
    var checkcookestatus = false;
    var currentItem;

    $(document).ready(function(){

        $('.beforeAfter').beforeAfter();

        $(document).on('click', "#review_dialog", function(e){
            var target = e.target;
            if( $(target).hasClass('modal') || $(target).hasClass('close') )  {
                $('#review_dialog').removeClass('modal-show');
            }

        });

        $(document).on('click', ".reviews_section .review ", function(){

            currentItem = $(this);

            $('#review_dialog .modal-body').html( currentItem.html() );
            $('#review_dialog').addClass('modal-show');

        });

        $(document).on('click', "#review_dialog span.prev ", function(e){
            if( $(currentItem).prev().length ){
                currentItem = $(currentItem).prev();
                $('#review_dialog .modal-body').html($(currentItem).prev().html());
            }
        });

        $(document).on('click', "#review_dialog span.next ", function(e){
            if( $(currentItem).next().length ){
                currentItem = $(currentItem).next();
                $('#review_dialog .modal-body').html($(currentItem).next().html());
            }
        });
        $('#clients-carousel').owlCarousel({
            loop: true,
            dots: false,
            responsiveClass: true,
            nav: true,
            margin: 6,
            items:1,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                992:{
                    items:3,
                    nav:true,
                    margin: 16,
                }
            }
        });

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {

            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }

            return "";
        }

        function checkCookie() {
            var user = getCookie("username");
            if (user != "") {
                //console.log('welcome visitor');
            } else {
                //user = prompt("Please enter your name:","");
                //user = 'visitor';
                if (user != "" && user != null) {
                    checkcookestatus = true;
                    setCookie("username", user, 30);
                }
            }
        }
        checkCookie();

        try{
            var myStorage = sessionStorage||window.sessionStorage;
        }catch(e){
            var myStorage =false;
        }

        jQuery(document).on("mouseleave", function(e){

            if( myStorage && myStorage.getItem('offer_show')==null ){

                myStorage.setItem('offer_show', 'show');
                jQuery('#modal-window #ouibounce-modal').show();
                jQuery('.close.nothanks').on("click", function(){
                    jQuery('#modal-window #ouibounce-modal').hide();
                    jQuery('#modal-window #modal_yes').hide();
                });
                jQuery('.exitblack.yes').on("click", function(){
                    jQuery('#modal-window #ouibounce-modal').hide();
                    jQuery('#modal-window #modal_yes').show();
                });
                jQuery('.exitno.close').on("click", function(){
                    jQuery('#modal-window #ouibounce-modal').hide();
                    jQuery('#modal-window #modal_yes').hide();
                });

                jQuery('#modal-window #ouibounce-modal').on("click", function(e){
                    if(e.target.id == 'ouibounce-modal' || ( e.target.getAttribute("class") == 'modal-dialog' && e.target.parentNode.id == 'ouibounce-modal' ) ){
                        jQuery('#modal-window #ouibounce-modal').hide();
                        jQuery('#modal-window #modal_yes').hide();
                    }
                });
            }
        });


        $(document).on('click', '.ubermenu-toggler', function(){

            var that = this;
            var toggleto = $(that).attr('data-toggleto');

            if( !toggleto || toggleto != '' || toggleto!=null ) {

                if( $(toggleto).hasClass('ubermenu-in-transition') || $(toggleto).hasClass('ubermenu-responsive-collapse') || $(toggleto).hasClass('ubermenu-active') ){

                    $(toggleto).removeClass('ubermenu-in-transition').removeClass('ubermenu-responsive-collapse').removeClass('ubermenu-active');

                }else{

                    $(toggleto).addClass('ubermenu-in-transition');
                    $(toggleto).addClass('ubermenu-active');
                    $(toggleto).removeClass('ubermenu-in-transition');
                    /*setTimeout(function(){
                        $(toggleto).addClass('ubermenu-active');
                        $(toggleto).removeClass('ubermenu-in-transition');
                    }, 500);*/

                }

            }


        });

        $(document).on('click', '.ubermenu-responsive-toggle', function(){

            var that = this;
            var toggleto = $(that).attr('data-ubermenu-target');

            if( !toggleto || toggleto != '' || toggleto!=null ) {

                if( $('#'+toggleto).hasClass('ubermenu-in-transition') || $('#'+toggleto).hasClass('ubermenu-responsive-collapse') || $('#'+toggleto).hasClass('ubermenu-active') ){

                    $('#'+toggleto).removeClass('ubermenu-in-transition').removeClass('ubermenu-responsive-collapse').removeClass('ubermenu-active');

                }else{

                    $('#'+toggleto).addClass('ubermenu-in-transition');
                    //$(toggleto).addClass('ubermenu-active');
                    setTimeout(function(){
                        $('#'+toggleto).addClass('ubermenu-active');
                        $('#'+toggleto).addClass('ubermenu-responsive-collapse');
                        $('#'+toggleto).removeClass('ubermenu-in-transition');
                    }, 500);

                }

            }
        });


        // var check;
        // check = getCookie("close_action");
        // if (check == "yes") {
        //     $(".top-noti-bar").hide();
        // }
        $(".cancel").click(function() {
            setCookie("close_action", "yes");
            $(".top-noti-bar").hide();
        });

        //cookie for topbar close
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }



        jQuery(document).on("submit","#subFormPopup", function (event) {
            event.preventDefault();
            var $form = $('#subFormPopup');
            // check if the input is valid
            if (!$form.valid()) return false;
            else {
                jQuery("#submit-btn-popup").attr("disabled", true);
                jQuery("#submit-btn-popup").html('Please Wait ...');
            }

            var mail = jQuery('#fieldEmailPopup').val();
            var status = 'On Exit Popup';

            //$form.submit();

            jQuery.ajax({
                url: $form.attr('action'),
                method: $form.attr('method'),
                data: {
                    "your-email": mail,
                    "get_coupon": true,
                    "ajaxRequest": true,
                    "status": status
                },
                success: function(data) {
                    if(data=='ok'){
                        jQuery("#submit-btn-popup").html('Coupon sent');
                    }else{
                        jQuery("#submit-btn-popup").html('Coupon sent failed');
                    }
                },
                error: function(errorThrown) {
                    //console.log(errorThrown);
                    jQuery("#submit-btn-popup").html('Sent failed');
                },
                complete: function(xhr){
                    //console.log(xhr.responseText);
                    setInterval(function(){
                        location.reload();
                    },1000);
                }
            });

        });

        $('body').attr('style', 'opacity: 1 !important');
        $('#subFormPopup').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: 'plz enter your email address'
            }
        });


        $(".mtsnb-hide span").click(function(){

            $(".header-nav").css("padding-top", "0");

            $(".page-template-page-freequote .ontop").css("padding-top", "0");

            if ($(window).width() < 480){
                $("#thanks .heading-text").css("margin-top", "30px");
            }
        });


        $.fn.placeholderTypewriter = function (options) {

            // Plugin Settings

            var settings = $.extend({

                delay: 50,

                pause: 1000,

                text: []

            }, options);

            // Type given string in placeholder

            function typeString($target, index, cursorPosition, callback) {

                // Get text
                var text = settings.text[index];


                // Get placeholder, type next character

                var placeholder = $target.attr('placeholder');

                $target.attr('placeholder', placeholder + text[cursorPosition]);

                // Type next character

                if (cursorPosition < text.length - 1) {

                    setTimeout(function () {

                        typeString($target, index, cursorPosition + 1, callback);

                    }, settings.delay);

                    return true;

                }

                // Callback if animation is finished

                callback();

            }



            // Delete string in placeholder
            function deleteString($target, callback) {

                // Get placeholder
                var placeholder = $target.attr('placeholder');

                var length = placeholder.length;

                // Delete last character
                $target.attr('placeholder', placeholder.substr(0, length - 1));

                // Delete next character

                if (length > 1) {

                    setTimeout(function () {

                        deleteString($target, callback)

                    }, settings.delay);

                    return true;

                }

                // Callback if animation is finished
                callback();

            }

            // Loop typing animation
            function loopTyping($target, index) {

                // Clear Placeholder
                $target.attr('placeholder', '');

                // Type string
                typeString($target, index, 0, function () {

                    // Pause before deleting string
                    setTimeout(function () {

                        // Delete string

                        deleteString($target, function () {

                            // Start loop over
                            loopTyping($target, (index + 1) % settings.text.length)

                        })

                    }, settings.pause);

                })
            }



            // Run placeholderTypewriter on every given field
            return this.each(function () {
                loopTyping($(this), 0);
            });

        };

        $('.typingField').placeholderTypewriter({
            text: ["Enter Your Postcode"],

            // delay between characters
            delay: 150,

            // delay between text
            pause: 1000,

        });


        $.fn.placeholderTypewriter = function (options) {

            // Plugin Settings

            var settings = $.extend({

                delay: 50,

                pause: 1000,

                text: []

            }, options);

            // Type given string in placeholder

            function typeString($target, index, cursorPosition, callback) {

                // Get text
                var text = settings.text[index];

                // Get placeholder, type next character

                var placeholder = $target.attr('placeholder');

                $target.attr('placeholder', placeholder + text[cursorPosition]);
                // Type next character

                if (cursorPosition < text.length - 1) {

                    setTimeout(function () {

                        typeString($target, index, cursorPosition + 1, callback);

                    }, settings.delay);

                    return true;

                }

                // Callback if animation is finished
                callback();

            }

            // Delete string in placeholder

            function deleteString($target, callback) {

                // Get placeholder
                var placeholder = $target.attr('placeholder');
                var length = placeholder.length;

                // Delete last character
                $target.attr('placeholder', placeholder.substr(0, length - 1));

                // Delete next character

                if (length > 1) {

                    setTimeout(function () {

                        deleteString($target, callback)

                    }, settings.delay);

                    return true;

                }

                // Callback if animation is finished
                callback();

            }
            // Loop typing animation

            function loopTyping($target, index) {

                // Clear Placeholder
                $target.attr('placeholder', '');

                // Type string
                typeString($target, index, 0, function () {
                    // Pause before deleting string
                    setTimeout(function () {
                        // Delete string
                        deleteString($target, function () {
                            // Start loop over
                            loopTyping($target, (index + 1) % settings.text.length)
                        })
                    }, settings.pause);

                })
            }

            // Run placeholderTypewriter on every given field
            return this.each(function () {
                loopTyping($(this), 0);
            });
        };

        $('.typingField2').placeholderTypewriter({
            text: ["Enter Your Phone Number"],
            // delay between characters
            delay: 150,
            // delay between text
            pause: 1000,
        });

        jQuery.fn.accordin=function( singleCollapse=true, openOnly=false ){

            var accordinClick = function(tgt){

                var item = jQuery(tgt).closest('.accordin-item');
                var hasClass = item.hasClass('active');

                if(singleCollapse===true){
                    jQuery(tgt).closest('.accordin').find('.accordin-item').removeClass('active');
                    item.addClass('active');
                }

                if(openOnly){
                    item.addClass('active');
                }else{
                    hasClass ? item.removeClass('active') : item.addClass('active');
                }

            }

            var accordin = function(that){
                jQuery(that).on('click', '.accordin-item .accordin-toggler', function(e){
                    accordinClick(this);
                });
            }

            return this.each(function(){
                accordin(this);
            });

        }

        $('.my-accordin').accordin(true,false);


    });
})(jQuery);
