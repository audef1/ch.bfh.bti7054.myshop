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
        $this->model = $model;
    }

    public function render() {
        echo "
            <div class='content'>
                <div class='container'>
                    <div class='p-content'>
                        <div class='p-content-header'>
                            <div class='p-content-header-left'>
                                <h1>" . $this->model->title . "</h1>
                            </div>
                            <div class='p-content-header-right'>

                            </div>
                            <div class='clearfix'> </div>
                        </div>

                        <p>" . $this->model->content . "</p>

                    </div>
                </div>
            </div>
        ";
    }

}