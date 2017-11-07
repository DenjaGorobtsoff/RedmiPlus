$( document ).ready( function () {

    // Добавление и удаление стилей при нажатии на бургер
    $( ".sandwich-menu" ).click( function () {
        $( ".sandwich-menu" ).toggleClass( "active" );
        $( ".overlay-slidedown" ).toggleClass( "open" );
        $( ".wraper" ).toggleClass( "close_wraper" );
    } );
    $( ".menu-title" ).click( function () {
        $( ".sandwich-menu" ).toggleClass( "active" );
        $( ".overlay-slidedown" ).toggleClass( "open" );
        $( ".wraper" ).toggleClass( "close_wraper" );
    } );
    $( ".sandwich" ).click( function () {
        $( ".sandwich" ).toggleClass( "active" );
        $( ".overlay-slidedown" ).toggleClass( "open" );
        $( ".wraper" ).toggleClass( "close_wraper" );
    } );
    //////////////////////////////////////////////////////
    $( ".btn-mn" ).click( function () {
        $( ".btn-mn.slide-in" ).toggleClass( "active" );
    } );

    //	Timer
    //$('.timer').countTo();
    //////////////////////////

    // Перестроение по высоте выпадающего меню
    if ( $( window ).width() < 768 ) {
        var navHeight = ($( "#nav" ).height() / 2);
        $( "#nav" ).css( 'margin-top', navHeight );
    }
    $( window ).resize( function () {
        if ( $( window ).width() < 768 ) {
            var navHeight = ($( "#nav" ).height() / 2);
            $( "#nav" ).css( 'margin-top', navHeight );
        }
    } );
    ///////////////////////////////////////////////
    // Галлерея фотографий
    var $gallery = $( '.gallery a' ).simpleLightbox( {
        overlay: true,
        preloading: true
    } );
    //////////////////////////////////////////////

    // Выравнивает меню и ставит его фиксированным

    //Высота шапки
    var headerHeight = $( ".mn" ).outerHeight();

    function menuFixed() {
        $( ".mn" ).animate( { top: -headerHeight }, 300 );
        $( ".mn" ).css( 'position', 'static' );
        $( "#sandwich" ).css( 'display', 'none' );
        $( window ).scroll( function () {
            if ( $( window ).scrollTop() > headerHeight + headerHeight ) {
                $( ".mn" ).css( 'position', 'fixed' );
                $( ".mn" ).animate( { top: 0 }, 200 );
                $( "#sandwich" ).css( 'display', 'block' );
            } else {
                $( ".mn" ).animate( { top: -headerHeight }, 300 );
                $( ".mn" ).css( 'position', 'static' );
                $( "#sandwich" ).css( 'display', 'none' );
            }
        } );
    }
    menuFixed();
    ////////////////////////////////////////////////
    //Растягивает блок main если высота wraper меньше высоты экрана
    // var windowHeight = window.innerHeight,
    //     wrapHeight = $( ".wraper" ).height();
    // if ( windowHeight > wrapHeight ) {
    //     $( "#main" ).css( 'min-height', (windowHeight - headerHeight) );
    // }
    /////////////////////////////////////////////////

    //Фиксирование футера если мало контента
    if( $(document).height() <= $(window).height() ){
        $("#footer").addClass("fixed-bottom");
    }
} );

