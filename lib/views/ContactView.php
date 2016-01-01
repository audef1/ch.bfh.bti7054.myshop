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
                    <div class='p-content'>
                        <div class='p-content-header'>
                            <div class='p-content-header-left'>
                                 <h1>" . _('Contactform') . "</h1>
                            </div>
                            <div class='p-content-header-right'>

                            </div>
                            <div class='clearfix'> </div>
                        </div>

                        <form method='post' action='contactform.php'>
                            <p>
                                <label for='name'>Name:</label>
                                <input type='text' name='name' id='name' />
                            </p>
                            <p>
                                <label for='email'>E-Mail:</label>
                                <input type='text' name='email' id='email' />
                            </p>
                            <p>
                                <label for='message'>Message:</label><br />
                                <textarea name='message' rows='5' id='message'></textarea>
                            </p>
                            <p>
                                <input type='submit' name='submit' value='Submit' class='submit-button' />
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        ";
    }
}
