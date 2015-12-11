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

                    <h1>Kontaktformular</h1>
                    <form method='post' action='contactform.php'>
                        <label for='Name'>Name:</label>
                        <input type='text' name='Name' id='Name' />

                        <label for='Email'>Email:</label>
                        <input type='text' name='E-mail' id='Email' />
                        
                        <label for='Message'>Message:</label><br />
                        <textarea name='Message' rows='20' cols='20' id='Message'></textarea>
        
                        <input type='submit' name='submit' value='Submit' class='submit-button' />
                    </form>

                </div>
            </div>
        ";
    }
}
