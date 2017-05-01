<?php
include 'includes/header.php';
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                         <?php

foreach ($data as $value) {
                       
echo "<h2>Welcome To Dashboard " . $value->email . "</h2>";

}
//endforeach;  
?>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <?php 
   include 'includes/footer.php';
   ?>

