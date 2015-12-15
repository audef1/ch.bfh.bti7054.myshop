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
                    <h1>" . utf8_encode($this->model->title) . "</h1>
                    <p>" . $this->model->content . "</p>
                </div>
            </div>
        ";
    }

}