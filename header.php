<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 20.11.15
 * Time: 11:42
 */

?>

<div class="container">
    <div class="top-header">
        <div class="logo">
            <a href="/myshop/"><img src="/myshop/images/logo.png" title="barndlogo" /></a>
        </div>
        <div class="top-header-info">
            <div class="top-contact-info">
                <ul class="unstyled-list list-inline">
                    <li><span class="phone"> </span>+4112 345 67 89</li>
                    <li><span class="mail"> </span><a href="mailto:info@mywebshop.ch">info@mywebshop.ch</a></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="cart-details">
                <div class="add-to-cart">
                    <ul class="unstyled-list list-inline">
                        <a href="cart.php"><span class="cart"></span></a>
                    </ul>
                </div>
                <div class="login-rigister">
                    <ul class="unstyled-list list-inline">
                        <li><a class="login" href="#"><?php echo _("Login"); ?></a></li>
                        <li><a class="rigister" href="#"><?php echo _("Register"); ?><span> </span></a></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="top-header-nav">
        <nav class="top-nav main-menu">
            <?php echo get_top_menu(); ?>
            <a href="#" id="pull"><img src="/myshop/images/nav-icon.png" title="menu" /></a>
        </nav>
        <div class="top-header-search-box">
            <form>
                <input type="text" placeholder="<?php echo _("Search"); ?>" required  maxlength="22">
                <input type="submit" value=" " >
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>