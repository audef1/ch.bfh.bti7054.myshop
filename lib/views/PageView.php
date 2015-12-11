<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 09.12.15
 * Time: 13:33
 */
class PageView
{
    private $model;

    public function __construct(Page $model) {

    }

    public function render() {
        echo "
            <div class='content'>
                <div class='container'>

                    <h1>SEITENTITEL</h1>

                </div>
            </div>
        ";
    }

}
