<?php
require 'header.php';
?>
        <!--header section end-->

        <!--Contact form start-->
        <div class="contact-form ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="section-title text-center">
                            <h2>Join <?= $contest_title; ?></h2>
                            <p>Fill the form below and Upload a Good Quality Picture to join Contest.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 order-md-2">
                        <div class="contact-form-img text-center">
                            <img src="images/common/contact.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 order-md-1">
                        <div>
                            <?php
                            if (isset($_POST['submit']) && isset($_FILES['picture'])) {
                                $join_contest = join_contest($_POST, $_FILES['picture']);
                                if ($join_contest === true) {
                                    echo "<script>swal('Successfully Joined', 'Check your email for more Information', 'success');</script>";
                                }else {
                                    $errors = $join_contest;
                                    echo "<script>swal('Failed', 'Try Again', 'warning');</script>";
                                }
                            }
                            ?>
                            <?php
                            if (isset($errors)) {
                                foreach ($errors as $error) {
                                    
                            ?>
                                <p class="form-messege" style="color: red;"><?= $error; ?></p>
                            <?php
                                }
                            }
                            ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name"><h4>Full Name</h4></label>
                                    <input class="form-control" name="name" type="text" placeholder="John Doe">
                                </div><br>

                                <div class="form-group">
                                    <label for="email"><h4>Email Address</h4></label>
                                    <input class="form-control" name="email" type="email" placeholder="user@example.com">
                                </div><br>

                                <div class="form-group">
                                    <label for="picture"><h4>Upload a good Quality Picture</h4></label>
                                    <input class="form-control" type="file" name="picture" id="picture">
                                    <p>Supported Formats(JPG, JPEG, PNG)</p>
                                </div><br>
                                
                                <div class="form-group">
                                    <label for="gender"><h4 for="gender">Gender</h4></label>
                                    <select class="form-control" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div><br>
                                
                                <div class="form-group">
                                    <label for="state"><h4>State of Residence</h4></label>
                                    <input class="form-control" name="state" type="text" placeholder="Enugu, Abia, Imo...">
                                </div><br>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                </div>
                                
                            </form>
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