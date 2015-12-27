<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 18.12.15
 * Time: 12:01
 */
class FooterView
{

    public function __construct() {

    }

    public function render(){

        echo "
            <div class='footer'>
                <div class='container'>
                    <div class='col-md-3 footer-logo'>
                        <a href='index.php'><img src='/myshop/images/footer-logo.png' title='myshop' /></a>
                    </div>
                    <div class='col-md-9 footer-links'>
                        " . get_bottom_menu() . "
                    </div>
                    <div class='clearfix'> </div>
                </div>
            </div>
            <div class='clearfix'> </div>
            <div class='copy-right'>
                <div class='container'>
                    <p>&copy; 2015 myshop</p>
                    <a href='#' id='toTop' style='display: block;'> <span id='toTopHover' style='opacity: 1;'> </span></a>
                </div>
            </div>

            <script type='text/javascript'>
                $(document).ready(function() {
                    /*
                     var defaults = {
                     containerID: 'toTop', // fading element id
                     containerHoverID: 'toTopHover', // fading element hover id
                     scrollSpeed: 1200,
                     easingType: 'linear'
                     };
                     */
                    $().UItoTop({ easingType: 'easeOutQuart' });
                });
            </script>
        ";
    }


}