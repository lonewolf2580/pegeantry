<?php
require 'header.php';
require 'email_file/mail-function.php';
?>
        <!--header section end-->

        <!--Contact form start-->
        <div class="contact-form ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="section-title text-center">
                            <h2>Join <?= $contest_title; ?></h2>
                            <h4>Follow the Processes below to join Contest.</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 order-md-1">
                        <div>
                            <h3>1. Pay a Sum of <?=$reg_fee; ?> to: <br><span style="visibility: hidden;">ABCD</span>Account Number: <?= $acc_number; ?><br><span style="visibility: hidden;">ABCD</span>Bank Name: <?= $bank_name; ?><br><span style="visibility: hidden;">ABCD</span>Account Name: <?= $acc_name; ?></h3>
                            <h3>2. Send proof of Payment, your Image and Full Name to <?= $phone_number; ?> or <?= $phone_number2; ?> via Whatsapp</h3><br>
                            <h4 style="font-style: italic;">You will be notified once your Application is successful...</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Contact form end-->
        

        <!--footer start-->
        <?php
        require 'footer.php';
        ?>