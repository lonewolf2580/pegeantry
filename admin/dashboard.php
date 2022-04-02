<?php 
$title = "Dashboard";

require 'req/header.php';


$users = total_users();
if ($users !== false) {
    $num_user = $users;
} else {$num_user = 0;}


$total_dep = fetch_all_deposits();
if ($total_dep !== false) {
    $num_dep = $total_dep;
} else {$num_dep = 0;}


 ?>


                    
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <i class="fa fa-user fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?= $num_user ?></div>
                                            <div>Contestants</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="dashboard">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <i class="fa fa-money fa-4x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?= $num_dep ?></div>
                                            <div>Total Votes!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    </div>

                    <!-- /.row -->

                    <!-- Charts Beginning -->
<?php
if (isset($_GET['c_id'])) {

    $c_id = $_GET['c_id'];
    $user = fetch_user($c_id);


?>
					
                    
					<div class="row">
                        <div class="col-sm-3">
                            <div class="hero-widget well well-sm">
                            	<br>
                                <div class="icon">
                                    <?php if ($user['gender'] === "Male") {
                                        $icon = "glyphicon glyphicon-user";
                                    }elseif ($user['gender'] === "Female") {
                                        $icon = "fa fa-female";
                                    } ?>
                                    <i class="<?= $icon ?>"></i>
                                </div>
                                <div class="text">
                                	<br>
                                    <label class="text-muted"><?= $user['name'] ?></label>
                                </div>
                                <div class="options">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    User Information
                                </div>
                                <div class="panel-body">
                                    <h4 style="font-weight: bolder;">Name : <?= $user['name'] ?></h4>
                                    <h4 style="font-weight: bolder;">Email : <?= $user['email'] ?></h4>
                                    <h4 style="font-weight: bolder;">Gender : <?= $user['gender'] ?></h4>
                                    

                                    <h4 style="font-weight: bolder;">Contestant ID : <?= $user['c_id'] ?></h4>
                                    
                                    <h3 style="font-weight: bolder;">Total Votes : </h3>
                                    <input class="form-control" type="number" id="vote" placeholder="" value="<?= $user['vote'] ?>"><br>
                                    <!-- <label>Balance :  </label><input class="form-control" type="number" id="vote" placeholder="Balance"><br> -->
                                    <a onclick="updateBalance(document.getElementById('vote').value, <?= $user['id'] ?>)" class="btn btn-lg btn-primary">Update Votes</a>
                                    <script type="text/javascript">
                                        function updateBalance(vote, id) {
                                            
                                            // swal(`${vote}`, 'Code!', 'success');
                                            $.ajax(`profile_ajax.php?vote=${vote}&id=${id}`,
                                                {
                                                success : function(data){
                                                            let jData = JSON.parse(data);
                                                            if (jData.success == 1) {
                                                                window.location.href = window.location.href;
                                                            }else{
                                                                swal('Failed!', 'Process Failed!', 'success');
                                                        }
                                                        
                                                                               
                                                        },
                                                error : function(){
                                                        swal('Failed!', 'Link Failed!', 'success');
                                                        }
                                            });

                                        }

                                    </script>
                                   
                                </div>
                                
                            </div>
                        </div>

                        
                    </div>



<?php 
}else{

    if (isset($_GET['action'])) {
        if ($_GET['action'] === "success") {
            echo "<script>swal('Updated!', 'Successfully Approved!', 'success');</script>";
        }elseif ($_GET['action'] === "fail") {
            echo "<script>swal('Failed!', 'Try Again!', 'warning');</script>";        
        }elseif ($_GET['action'] === "delete") {
            echo "<script>swal('Updated!', 'Successfully Deleted!', 'success');</script>";        
        }
    }

 ?>


<!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    All Users
                                </div>

                                <div class="panel-heading">
                                    <form action="" method="get">
                                        <input name="variant" type="text" class="form-control" style="max-width: 250px; display: inline; height: 46px;" placeholder="Search ID...">
                                        <span class="input-group-btn" style="display: inline;">
                                            <button name="submit" class="btn btn-lg btn-primary" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </form>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Votes</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php 
                                                if (isset($_GET['submit']) && !empty($_GET['variant'])) {
                                                    $variant = $_GET['variant'];
                                                    $all_Users = fetch_all_users_match($variant); 
                                                }else{
                                                    $all_Users = fetch_all_users();
                                                }
                                                
                                                if($all_Users){
                                                    $i = 0;
                                                    foreach ($all_Users as $user) {
                                                        $i++;

                                                 ?>

                                                <tr class="odd gradeX">
                                                    <td><?= $i ?></td>
                                                    <td><a href="?c_id=<?= $user['c_id'] ?>"><?= $user['name']; ?></a></td>
                                                    <td><?= $user['email']; ?></td>
                                                    <td class="center"><?= number_format($user['vote']); ?></td>
                                                    
                                                </tr>


                                                <?php }
                                                } ?>


                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    <!-- Chart Ending -->
                    <!-- /.row -->
                





<?php
}
 require 'req/footer.php'; ?>