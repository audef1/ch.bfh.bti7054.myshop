<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 27.11.15
 * Time: 08:59
 */

class OrderCompleteView
{
    public function __construct() {

    }

    public function render() {
        echo "
            <div class='content'>
                <div class='container'>
                    <div class='p-content'>
                        <div class='p-content-header'>
                            <div class='p-content-header-left'>
                                 <h1>" . Trans::_('Order Complete') . "</h1>
                            </div>
                            <div class='p-content-header-right'>
                                " . Trans::_('thxmessage') . "
                            </div>
                            <div class='clearfix'> </div>
                        </div>

                    </div>
                </div>
            </div>
        ";
    }
}
