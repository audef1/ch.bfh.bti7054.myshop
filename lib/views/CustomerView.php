<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 26.12.15
 * Time: 16:27
 */
class CustomerView
{

    private $model;

    public function __construct(Customer $model)
    {
        $this->model = $model;
    }

    public function render(){

        //welcom message
        echo "<div class='container'><div class='alert alert-success message' role='alert'><strong>" . Trans::_("Login successful") . ":</strong> ". Trans::_('Hello') . " <strong>".$this->model->__get('firstname')."</strong>!</div></div>";

        //hide message after x seconds
        echo "<script>$(function() { setTimeout(function() { $('.alert-success').hide(400) }, 5000); }); </script>";

        echo"
            <div class='content'>
                <div class='container'>
                    <div class='p-content'>
                        <div class='p-content-header'>
                            <div class='p-content-header-left'>
                                 <h1>" . Trans::_('Customercenter') . "</h1>
                            </div>
                            <div class='p-content-header-right'>

                            </div>
                            <div class='clearfix'> </div>
                        </div>

                        <div class='row'>
                            <div class='col-md-6'>
                                <h2>" . Trans::_('Address') . "</h2>"
                                . ($this->model->title) . "<br/>"
                                . ($this->model->firstname) . " " . ($this->model->lastname) . "<br/>"
                                . ($this->model->address) . "<br/>"
                                . ($this->model->zip) . " " . ($this->model->location) . "<br/>"
                                . "<h3>" . Trans::_('Contact Information') . "</h3>"
                                . "<i class='fa fa-phone'></i>" . $this->model->phone ."<br/>"
                                . "<i class='fa fa-envelope'></i><a href='mailto:". $this->model->email ."'>" . $this->model->email . "</a>"
                                ."
                            </div>
                            <div class='col-md-6'>
                            <h2>" . Trans::_('Alternative Billingaddress') ."</h2>"
                                . ($this->model->title2) . "<br/>"
                                . ($this->model->firstname2) . " " . ($this->model->lastname2) . "<br/>"
                                . ($this->model->address2) . "<br/>"
                                . ($this->model->zip2) . " " . ($this->model->location2) . "<br/>"
                                ."
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        ";
    }

}