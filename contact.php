<?php

include 'top.php';

/******************** Initialize Variables ********************/
$name = '';
$email = '';
$subject = '';
$message = '';

/******************** Initialize Error Variables ********************/
$nameError = false;
$nameErrorMsg = '';
$emailError = false;
$emailErrorMsg = '';
$subjectError = false;
$subjectErrorMsg = '';
$messageError = false;
$messageErrorMsg = '';

// ****************** initialize misc variables and arrays ****************** //
$dataEntered = false;
$errorMsg = array();
$mailed = false;
$errorInputCSS = ' style="border: 1px solid red; border-radius: 3px; outline-color: red;"';


?>

<h2 class="pages-title">Contact Us</h2>

<div id="contact-info">
    <p><strong>Galanis Consulting, LLC</strong></p><br>
    <p>John Galanis</p>
    <p>1 Lillian Drive</p>
    <p>Ipswich, MA 01938</p><br>
    <p>Email: galanisllc@comcast.net</p><br>
    <a href="https://www.linkedin.com/in/john-galanis-79577382/" target="_blank" id="li-contact-link"><img class="li-icon" src="images/icons/li-icon.png" alt="Linked-In">LinkedIn</a>
</div>

<div id="contact-form-div">

<?php

// ***************** PROCESS FOR CREATING ACCOUNT ****************** //

if (isset($_POST['btnSendMsg'])) {



    // ****************** sanitize data ****************** //
    
    $name = htmlentities($_POST["txtName"], ENT_QUOTES, "UTF-8");
    
    $email = htmlentities($_POST["txtEmail"], ENT_QUOTES, "UTF-8");
    
    $subject = htmlentities($_POST["txtSubject"], ENT_QUOTES, "UTF-8");
    
    $message = htmlentities($_POST["txtMsg"], ENT_QUOTES, "UTF-8");



    // **************** INPUT VALIDATION ***************** //

    if ($name == '') {
        $nameErrorMsg = 'Enter your name.';
        $errorMsg[] = $nameErrorMsg;
        $nameError = true;
    } elseif (!preg_match("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $name)) {
        $nameErrorMsg = 'Your name appears to have extra characters.';
        $errorMsg = $nameErrorMsg;
        $nameError = true;
    }

    if ($email == '') {
        $emailErrorMsg = 'Enter your email address.';
        $errorMsg[] = $emailErrorMsg;
        $emailError = true;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErrorMsg = 'Your email address appears to be incorrect.';
        $errorMsg[] = $emailErrorMsg;
        $emailError = true;
    }

    if ($message == '') {
        $messageErrorMsg = 'Message must not be empty.';
        $errorMsg[] = $messageErrorMsg;
        $messageError = true;
    }


    if (!$errorMsg) { // IF DATA IS VALID
        
        // ***************** SEND MAIL TO Galanis Consulting LLC ******************* //
        
        $mailMessage = "New Message from Client:

                        Name: " . $name . 
                        "Email: " . $email . "

                        Message: 
                        " . $message;
        
        $to = 'bowarren00@gmail.com';
        $cc = '';
        $bcc = '';
        
        $from = $email;

        if ($subject == '') {
            $subject = 'New Message From Potential Client';
        }


        mail('bowarren00@gmail.com', $subject, $mailMessage);


        $dataEntered = true;

    } // END IF DATA IS VALID




} // END IF SEND MESSAGE BUTTON PRESSED




if ($dataEntered) { // IF SEND MESSAGE SUCCESSFULL
    
    print '<h3 id="form-confirmation">Thank you for contacting us!<br><br>We will be sure to get back to you as soon as possible.</h3>';

} else { // IF SEND MESSAGE NOT SUCCESSFUL

    if ($errorMsg) { // DISPLAY ERROR MESSAGES
        print '<p class="errors" id="errors-header"><img src="images/icons/caution_icon.png" id="caution-icon"/>There are items that require your attention<img src="images/icons/caution_icon.png" id="caution-icon"/></p>';
    }


} // END IF SEND MESSAGE NOT SUCCESSFUL

?>


<form action="#contact-form-div" method="post" id="contact-form">

    <label for="txtName" class="top-space">Name:</label><label class="required-field-star">*</label><br>
    <input type="text" placeholder="" maxlength="60" id="txtName" name="txtName" class="long-input" 
        <?php
        print ' value="' . $name . '"';

        // ADD ERROR BORDER IF NAME ERROR
        if ($nameError) {
            print $errorInputCSS;
        }

        ?>
        ><br>

        <?php

        // PRINT ERROR MSG IF NAME ERROR
        if ($nameError) {
            print '<p class="errors">' . $nameErrorMsg . '</p>';
        }

        ?>

    <div class="top-space">
        <label for="txtEmail" class="top-space">Email:</label><label class="required-field-star">*</label><br>
        <input type="text" placeholder="" maxlength="60" id="txtEmail" name="txtEmail" class="long-input"
            <?php
            print ' value="' . $email . '"';

            // ADD ERROR BORDER IF EMAIL ERROR
            if ($emailError) {
                print $errorInputCSS;
            }

            ?>
            ><br>


        <?php

        // PRINT ERROR MSG IF EMAIL ERROR
        if ($emailError) {
            print '<p class="errors">' . $emailErrorMsg . '</p>';
        }

        ?>
    </div>

    <div class="top-space">
        <label for="txtSubject" class="top-space">Subject:</label><br>
        <input type="text" placeholder="" maxlength="60" id="txtSubject" name="txtSubject" class="long-input"><br>

        <?php

        // ADD ERROR BORDER IF PHONE ERROR
        if ($subjectError) {
            print '<p class="errors">' . $subjectErrorMsg . '</p>';
        }

        ?>
    </div>

    <div class="top-space"><label for="txtMsg" class="top-space">Message:
        </label><label class="required-field-star">*</label><br>
        <textarea cols="55" rows="8" id="txtMsg" name="txtMsg"
            <?php
            // ADD ERROR BORDER IF MESSAGE ERROR
            if ($messageError) {
                print $errorInputCSS;
            }

            ?>
            ></textarea><br>
                
        <?php

        // PRINT ERROR MSG IF MESSAGE ERROR
        if ($messageError) {
            print '<p class="errors">' . $messageErrorMsg . '</p>';
        }

        ?>
    </div>

    <div class="top-space">
        <input type="submit" name="btnSendMsg" value="Send Message" tabindex="900" id="btnSendMsg" class="top-space">
    </div>

</form>
</div>


<?php


include 'footer.php';


?>