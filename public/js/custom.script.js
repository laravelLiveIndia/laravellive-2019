(function($) {
    "use strict";

    $(document).ready(function() {

        /*=========================================================================
         ===  DYNAMIC SITE PATH
         ========================================================================== */

        var csi_path = window.location.protocol + '//' + window.location.host;
        var pathArray = window.location.pathname.split('/');
        for (var i = 1; i < (pathArray.length - 1); i++) {
            csi_path += '/';
            csi_path += pathArray[i];
        }

        /*=========================================================================
         ===  // SITE PATH END
         ========================================================================== */


        /*=========================================================================
         ===  MENU SCROLL FIXED
         ========================================================================== */
        var s = $(".csi-header-bottom");
        var pos = s.position();

        $(window).on('scroll', function () {
            var windowpos = $(window).scrollTop();
            if (windowpos >= pos.top) {
                s.addClass("menu-onscroll");
            } else {
                s.removeClass("menu-onscroll");
            }
        });

        /*=========================================================================
         ===  MENU SCROLL FIXED END
         ========================================================================== */




        /*=========================================================================
         ===  HOME PAGE Slider
         ========================================================================== */
        var csiMainSlider = $("#csi-main-slider");
        if (csiMainSlider.length) {
            csiMainSlider.owlCarousel({
                margin: 0,
                items: 1,
                loop: true,
                autoplay:true,
                dots: false,
                navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                autoplayTimeout: 5000,
                autoplaySpeed: 500,
                nav: true,
                addClassActive : true
            });
        }
        /*=========================================================================
         ===  HOME PAGE Slider END
         ========================================================================== */




        /*=========================================================================
         ===  Modal Video
         ========================================================================== */
        /* Get iframe src attribute value i.e. YouTube video url
         and store it in a variable */
        var url = $("#modalvideo").attr('src');

        /* Remove iframe src attribute on page load to
         prevent autoplay in background */
        $("#modalvideo").attr('src', '');

        /* Assign the initially stored url back to the iframe src
         attribute when modal is displayed */
        $("#csi-modal").on('shown.bs.modal', function(){
            $("#modalvideo").attr('src', url);
        });

        /* Assign empty url value to the iframe src attribute when
         modal hide, which stop the video playing */
        $("#csi-modal").on('hide.bs.modal', function(){
            $("#modalvideo").attr('src', '');
        });
        /*=========================================================================
         ===  Modal Video END
         ========================================================================== */


        /*=========================================================================
         ===  Typed Animation START
         ========================================================================== */
        if($('#csi-typed-string').length){
            $('#csi-typed-string').typed({
                strings: ["User Interface", "User Interface 2","User Interface 3"],
                // typing speed
                typeSpeed: 60,
                // time before typing starts
                startDelay: 0,
                // backspacing speed
                backSpeed: 0,
                // shuffle the strings
                shuffle: false,
                // time before backspacing
                backDelay: 500,
                // loop
                loop: true,
                // false = infinite
                loopCount: false,
                // show cursor
                showCursor: true,
                // character for cursor
                cursorChar: "|",
                // either html or text
                contentType: 'html'
            });
        }

        /*=========================================================================
         ===  Typed Animation END
         ========================================================================== */





        /*=========================================================================
         ===  SMOOTH SCROLL - REQUIRES JQUERY EASING PLUGIN
         ========================================================================== */

        $( 'a.csi-scroll' ).on( 'click', function(event) {
            var $anchor = $(this);
            var topTo   = $( $anchor.attr('href') ).offset().top;

            if ( window.innerWidth < 768 ) {
                topTo = ( topTo - 90 );
            }

            $( 'html, body' ).stop().animate({
                scrollTop: topTo
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
            return false;
        } );

        /*=========================================================================
         ===  SMOOTH SCROLL - REQUIRES JQUERY EASING PLUGIN END
         ========================================================================== */


        /*=========================================================================
         ===  magnific popup
         ========================================================================== */
        $('#csi-gallery').magnificPopup({
            delegate: '.csi-single-gallery a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery: {
                enabled: true
            },
            image: {
                titleSrc: 'title'
            }
            // other options
        });
        /*=========================================================================
         ===  magnific popup END
         ========================================================================== */



        /*=========================================================================
         ===  GOOGLE MAP
         ========================================================================== */
        if (typeof google != 'undefined') {
            //for Default  map
            var mapCanvasDefault = $('.map-canvas-default');
            if (mapCanvasDefault.length) {
                mapCanvasDefault.googleMap({
                    zoom: 8, // Initial zoom level (optiona
                    coords: [40.7127, 74.0059], // Map center (optional)
                    type: "ROADMAP", // Map type (optional),
                    mouseZoom: false
                });

                //for marker
                mapCanvasDefault.addMarker({
                    coords: [40.7127, 74.0059], // GPS coords
                    title: 'EventPro',
                    text: '121 King St, Melbourne VIC 3000, Australia',
                    icon: csi_path + '/assets/img/map/map-icon.png'
                });
            }

            // FOR DARK MAP
            if (mapCanvasDefault.length) {
                mapCanvasDefault.googleMap({
                    zoom: 8, // Initial zoom level (optiona
                    coords: [40.7127, 74.0059], // Map center (optional)
                    type: "HYBRID", // Map type (optional),
                    mouseZoom: false
                });

                //for marker
                mapCanvasDefault.addMarker({
                    coords: [40.7127, 74.0059], // GPS coords
                    title: 'EventPro',
                    text: '121 King St, Melbourne VIC 3000, Australia',
                    icon: csi_path + '/assets/img/map/map-icon.png'
                });
            }
        }

        /*=========================================================================
         ===  //GOOGLE MAP END
         ========================================================================== */



        /*=========================================================================
         ===  countdown
         ========================================================================== */
        if ( $('#csi-countdown').length ) {

            var dataTime = $('#csi-countdown').data('date'); // Date Format : Y/m/d

            $('#csi-countdown').countdown(dataTime, function(event) {
                var $this = $(this).html(event.strftime(''
                    /*+ '<span class="csi-weecks">%w <i> weeks </i></span> '*/
                    + '<span class="csi-days">%D <i> Days </i></span> '
                    + '<span class="csi-hr">%H <i> Hour </i></span> '
                    + '<span class="csi-min">%M <i> Minu </i></span> '
                    + '<span class="csi-sec">%S <i> Seco </i></span>'
                ));
            });
        }

        /*=========================================================================
         ===  countdown END
         ========================================================================== */





        /* ==========================================================================
         SUBSCRIPTION & AJAX SUBMISSION
         ========================================================================== */

        var isEmail = function (email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        $('form.csi-subscribe-form').on('submit', function (evnt) {
            evnt.preventDefault();
            //  console.log(csi_path);
            // console.log('subs submit');
            var $subform = $(this);
            var emailInput = $('form.csi-subscribe-form').find('input#subscribe');
            if (isEmail(emailInput.val())) {
                // console.log('ok');
                $.ajax({
                    url: csi_path + '/assets/php/subscribe.php',
                    type: 'post',
                    data: {'email': emailInput.val().toLowerCase()},
                    beforeSubmit: function (argument) {
                        // body...
                    },
                    success: function (ajaxResponse) {

                        var ajaxResponse = $.parseJSON(ajaxResponse);
                        // console.log(ajaxResponse);

                        $('#csi-subalert').addClass("alert alert-success csi-sub-alert").html(ajaxResponse.message);

                        try {
                            var ajaxResponse = $.parseJSON(ajaxResponse);
                            if (!ajaxResponse.error) {
                                emailInput.css('color', '#0f0');
                            } else {
                                emailInput.removeAttr('style'); //css('color', '#f00');
                                throw ajaxResponse.message;
                            }
                            //alert( ajaxResponse.message );
                        } catch (e) {
                            // e.message;
                            // alert(e.message );

                        }
                    },
                    error: function (argument) {
                        var ajaxResponse = $.parseJSON(ajaxResponse);
                        $('#csi-subalert').addClass("alert alert-danger csi-sub-alert").html(ajaxResponse.message);
                        // body...
                    }
                });
                $subform[0].reset();
            } else {
                emailInput.css('color', '#f00');
                return false;
            }
        });

        $('form.subscribe-form input#subscribe').on('keyup', function (evnt) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            this.style.color = (isEmail($(this).val())) ? '#f5832b' : '#f00';
        });

        /* ==========================================================================
         SUBSCRIPTION & AJAX SUBMISSION
         ========================================================================== */


        /*=========================================================================
         ===  Start Contact Form Validation And Ajax Submission
         ========================================================================== */

        var alertInterval;//store the timeout interval ID

        //clear interval for alert message window
        $('#csi-form-modal').on('hide.bs.modal', function (ev) {
            clearInterval(alertInterval);
        });

        var $contactForm = $('form.csi-contactform');
        $contactForm.validate({
            submitHandler: function (form) {
                //console.log(form);
                var $form = $(form);
                //console.log($form.serialize());
                $.ajax({
                    url: csi_path + '/assets/php/contact.php',
                    type: 'post',
                    data: $form.serialize(),
                    beforeSubmit: function (argument) {
                        //ajax loading icon
                    },
                    success: function (ajaxResponse) {
                        try {
                            var ajaxResponse = $.parseJSON(ajaxResponse);
                            if (ajaxResponse.error) {
                                //for field error
                                //console.log(ajaxResponse.error_field);
                                for (var i = 0; i < ajaxResponse.error_field.length; i++) {
                                    if ($('p#' + ajaxResponse.error_field[i] + '-error').length) {
                                        $('p#' + ajaxResponse.error_field[i] + '-error').text(ajaxResponse.message[ajaxResponse.error_field[i]]);
                                    } else {
                                        $('#' + ajaxResponse.error_field[i]).after('<p id="' + ajaxResponse.error_field[i] + '-error" class="help-block">' + ajaxResponse.message[ajaxResponse.error_field[i]] + '</p>');
                                    }
                                }

                            } else {
                                $('.csi-form-msg').removeClass('alert-danger').addClass('alert-success').text(ajaxResponse.message);
                                $('#csi-form-modal').modal('show');
                                alertInterval = setInterval(function () {
                                    $('#csi-form-modal').modal('hide');
                                }, 5000);
                                $form[0].reset();
                            }
                        } catch (e) {
                            $('.csi-form-msg').removeClass('alert-success').addClass('alert-danger').text('Sorry, we are failed to contact with you. Please reload the page and try again.');
                            $('#csi-form-modal').modal('show');
                            alertInterval = setInterval(function () {
                                $('#csi-form-modal').modal('hide');
                            }, 5000);
                        }
                    },
                    error: function (argument) {
                        $('.csi-form-msg').removeClass('alert-success').addClass('alert-danger').text('Sorry, we can not communicate with you. Please make sure you are connected with internet.');
                        $('#csi-form-modal').modal('show');
                        alertInterval = setInterval(function () {
                            $('#csi-form-modal').modal('hide');
                        }, 5000);
                    },
                    complete: function () {

                    }
                });

                return false;
            },
            errorElement: 'p',
            errorClass: 'help-block',
            rules: {
                'csiname': {
                    required: true,
                    minlength: 3
                },

                'csiemail': {
                    required: true,
                    email: true
                },

                'csisubject': {
                    required: true,
                    minlength: 5
                },

                'csimessage': {
                    required: true,
                    minlength: 5
                }
            }
        });

        /*=========================================================================
         ===  Start Contact Form Validation And Ajax Submission END
         ========================================================================== */

    });//DOM READY


})(jQuery);






