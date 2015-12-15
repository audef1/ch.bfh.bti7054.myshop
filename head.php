<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 20.11.15
 * Time: 11:42
 */

?>

<?php
    require_once("inc/i18n.php");
    require_once("inc/functions.php");
    require_once("inc/db.php");
    require_once("inc/autoloader.php");
    require_once("inc/routing.php");
?>

<title>myWebshop | Home</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Styles -->
<link href="/myshop/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/myshop/css/style.css" rel='stylesheet' type='text/css' />
<link href="/myshop/css/etalage.css" rel='stylesheet' type='text/css' />
<link href="/myshop/css/bootstrap-responsive.css" rel='stylesheet' type='text/css' />

<!---- Scripts ---->
<script type="text/javascript" src="/myshop/js/jquery.min.js"></script>
<script type="text/javascript" src="/myshop/js/move-top.js"></script>
<script type="text/javascript" src="/myshop/js/easing.js"></script>
<script type="text/javascript" src="/myshop/js/jquery.responsiveTabs.js"></script>
<script type="text/javascript" src="/myshop/js/jquery.etalage.min.js"></script>
<script type="text/javascript" src="/myshop/js/jquery.responsiveTabs.js"></script>

<!---- Fonts ---->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<!----start-top-nav-script---->
<script>
    $(function() {
        var pull 		= $('#pull');
        menu 		= $('nav ul');
        menuHeight	= menu.height();
        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
        $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    });
</script>

<!---- smooth scrolling via jquery ---->
<script type="text/javascript">
    $(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
	    });
    });
</script>