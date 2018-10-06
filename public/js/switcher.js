/*********************************************  PLUGIN *************************************************************/

jQuery(function($) {

    jQuery.switcher = function(element, options) {
        this.element = element;
        this.$element = $( element );
        var defaults = {
            pane: 'right',
            presetLinker: 'csi-master-style',
            bgLinker: 'csi-switcher-bg-linker',

            //for color scheme
            colorHeaderText: 'Presets Color',
            colorCssPath: './css',
            color: false,

            //for background image or color
            backgroundImageText: 'Background',
            imagePath: './img',
            bgCssPath: './switcher/css/bg',
            bgImageThumb: false,

            //for different layout
            layoutText: 'Others Layout',
            layoutImagePath: './img/layout',
            layout: false
        };

        this.defaultOptions = jQuery.extend( {}, defaults, options );

        this.__init();

    };

    jQuery.extend( jQuery.switcher.prototype, {
        __init: function() {
            var self = this,
                pane = (this.defaultOptions.pane == 'right') ? ' right-pane' : ' left-pane';
            self.switcherHtml = [];

            $( 'head' ).append( '<link rel="stylesheet" href="./switcher/css/demo-themeoptions.css" media="all" />' );
            self.switcherHtml.push( '<div class="csi-theme-options' + pane + '">' );//push main container
            self.switcherHtml.push( '<div class="csi-options-inner">' );//option container
            self.switcherHtml.push( '<a href="javascript:void(0);" class="csi-option-trigger"><i class="fa fa-cogs" aria-hidden="true"></i></a>' );//option trigger button

            /*==============================================Start=====================================================*/
            if ( false != self.defaultOptions.color ) {
                self.switcherHtml.push( '<div class="csi-option-section">' );//color option section
                self.switcherHtml.push( '<h4>' + self.defaultOptions.colorHeaderText + '</h4>' );//color header
                self.switcherHtml.push( '<ul class="csi-presets preset-container clearfix">' );//color plate container

                //load all color plate
                var index = 0;
                $.each( self.defaultOptions.color, function( styleName, styleColor ) {
                    index += 1;
                    if ( index == 1 ) {
                        self.switcherHtml.push( '<li class="csi-preset active">' );//default active
                    } else {
                        self.switcherHtml.push( '<li class="csi-preset">' );
                    }
                    self.switcherHtml.push( '<a href="javascript:void(0);" data-style="preset" class="csi-opt-thumb" data-style-name="' + styleName + '" style="background-color: ' + styleColor + '"></a>' );
                    self.switcherHtml.push( '</li>' );
                } );
                //end load

                self.switcherHtml.push( '</ul>' );//end color plate container
                self.switcherHtml.push( '</div>' )//end color option section
            }
            /*==============================================End=====================================================*/

            /*==============================================Start=====================================================*/

            /*==============================================End=====================================================*/



            self.switcherHtml.push( '</div>' );//end option container
            self.switcherHtml.push( '</div>' );//end main container


            self.$element.html( self.switcherHtml.join( '' ) );

            self.__clickOnTrigger();
            self.__clickOnThumbPlate();
        },

        __clickOnTrigger: function() {
            var self = this;
            self.$element.find( 'a.csi-option-trigger' ).on( 'click', function() {
                $this = $( this );
                $this.parents( '.csi-theme-options' ).toggleClass( 'csi-open' );
            } );
        },

        __clickOnThumbPlate: function() {
            var self = this;
            $( self.$element.find( '.csi-option-section' ) ).on( 'click', 'a.csi-opt-thumb', function() {
                var $this = $( this );
                $this
                    .parents( '.csi-option-section' )
                    .find( 'li.csi-preset' )
                    .removeClass( 'active');

                $this.parent().addClass( 'active' );

                var $presetLinker = $( '#' + self.defaultOptions.presetLinker );//preset color style linker
                var $bgLinker = $( '#' + self.defaultOptions.bgLinker );//bg style linker

                if ( $this.data( 'style' ) == 'bg' ) {
                    if ( $bgLinker.length == 0 ) {
                        var link = '<link id="' + self.defaultOptions.bgLinker + '" rel="stylesheet" href="#" media="all" />';
                        $( 'head' ).append( link );
                    }

                    $( 'head' ).find( '#' + self.defaultOptions.bgLinker).attr( 'href', self.defaultOptions.bgCssPath + '/' + $this.data( 'style-name' ) + '.css' )
                } else {
                    if ( $presetLinker.length == 0 ) {
                        var link = '<link id="' + self.defaultOptions.presetLinker + '" rel="stylesheet" href="#" media="all" />';
                        // $( 'head' ).append( link );
                    }

                    $( 'head' ).find( '#' + self.defaultOptions.presetLinker).attr( 'href', self.defaultOptions.colorCssPath + '/' + $this.data( 'style-name' ) + '.css' )
                }
            } );
        }
    } );



    jQuery.fn.switcher = function(options) {
        var elem = this;
        return elem.each( function(index) {
            //console.log(elem);
            if ( 'undefined' == typeof $( elem ).eq( index ).data( 'csi-switcher' ) ) {
                var switcher = new jQuery.switcher( elem, options );
                $( elem ).eq( index ).data( 'csi-switcher', switcher );
            }
        } );
    };

    /********************************************* MAIN PLUGIN END *************************************************************/
});




jQuery( document ).ready( function($) {
    /********************************************* CALL SWITCHER PLUGIN *************************************************************/
    if ( $( '.csi-switcher-loader').length ) {

        $( '.csi-switcher-loader' ).switcher( {

            /*FOR COLOR*/
            colorCssPath: 'assets/css',
            color: {
                'style-default.min': '#b21e8e',
                'style-olive.min': '#77c043',
                'style-violet.min': '#7e24e6',
                'style-pink.min': '#ca396a',
                'style-teal.min': '#00695c',
                'style-red.min': '#b71c1c',
                'style-blue.min': '#1976d2',
                'style-orange.min': '#FFBB33'
            },

            /*FOR BG*/
            imagePath: './switcher/img/patterns/new',
            bgCssPath: 'switcher/css/bg',
            bgImageThumb: {'switcher-bg-three': '#f2f2f4', 'switcher-bg-four': '#fff', 'switcher-bg-two': '#c3c3c3', 'switcher-bg-one': '#f9fbfc'},

            /*layoutImagePath: './switcher/img/layout',
            layout: [

                {
                    image: 'demo-one.png',
                    link: 'http://themearth.com/demo/html/portme/view/index.html'
                },

                {
                    image: 'demo-two.png',
                    link: 'http://themearth.com/demo/html/portme/view/index-typed-clean.html'
                },
                {
                    image: 'demo-three.png',
                    link: 'http://themearth.com/demo/html/portme/view/index-typed.html'
                },

                {
                    image: 'demo-four.png',
                    link: 'http://themearth.com/demo/html/portme/view/index-slider.html'
                }
            ]*/
        } );
    } else {
        $(document.body).append('<div class="csi-switcher-loader"></div>');
    }

} );