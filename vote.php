<?php
require 'header.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cont = fetch_cont($id);
}else {
    echo "<script>location.href = 'index#contestants'</script>";
}
?>
        <!--header section end-->
        
        <!-- product details start -->
        <div class="product-details-area  ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 overflow-hidden">
                       <div class="zoomWrapper clearfix">
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="<?= $cont['picture']; ?>" data-zoom-image="<?= $cont['picture']; ?>" alt="big-1">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-detail single-product-info">
                            <h3><?= $cont['name']; ?></h3>
                            
                            <h3>ID: <?= $cont['c_id']; ?></h3>
                            <h4>Total Votes : <b><?= $cont['vote']; ?></b></h4>
                            <h5 class="overview">How To Vote: (NGN100 per Vote)</h5>
                            <p>1. Send an amount equivalent to the number of votes you want to cast to:</p>
                            <p>Account Number: <?= $acc_number; ?></p>
                            <p>Account Name: <?= $bank_name; ?></p>

                            <p>2. Send proof of Payment and Contestant ID () to <?= $phone_number; ?> or <?= $phone_number2; ?> via Whatsapp</p>

                            <h4><i>You will get a notification that your vote was successful...</i></h4>
                            
                        </div>
                    </div>  
                </div> 
            </div>
            
        </div>
        <!-- product details end -->
        
        <!--footer start-->
        
        <?php
        require 'footer.php';
        ?>