<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 27.11.15
 * Time: 08:59
 */

class ContactView
{
    public function __construct() {

    }

    public function render() {
        echo "
            <div class='content'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-8'>
                            <h1>Kontaktformular</h1>
                            <form method='post' action='contactform.php'>
                                <div class='row'>
                                    <label for='Name'>Name:</label>
                                    <input type='text' name='Name' id='Name' />
                                </div>
                                <div class='row'>
                                    <label for='Email'>Email:</label>
                                    <input type='text' name='E-mail' id='Email' />
                                </div>
                                <div class='row'>
                                    <label for='Message'>Message:</label><br />
                                    <textarea name='Message' rows='20' cols='20' id='Message'></textarea>
                                </div>
                                <div class='row'>
                                    <input type='submit' name='submit' value='Submit' class='submit-button' />
                                </div>
                            </form>
                        </div>
                        <div class='col-md-4'>
                            <!-- sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        ";
    }
}
