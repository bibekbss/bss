
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bargadss</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
         <?php if($this->session->flashdata('message')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('message'); ?>
        </div>
                    <?php }  ?>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create Account</h3>
                    </div>
                    <div class="panel-body">
                        
                            <?php
                              echo form_open('registration/create', ['class' => '','role'=>'form']);
                            ?>
                            <fieldset>
                                <div class="form-group">
                                   
                                    <?php echo form_input(['name'=>'email','type'=>'email', 'id'=>'inputEmail','class'=>'form-control','placeholder'=>'Email','value'=>set_value('email')]);?>
                                        <?php  echo '<p>'.form_error('email').'</p>';?>
                                </div>
                                <div class="form-group">
                                    
                                     <?php echo form_input(['name'=>'name','type'=>'text','id'=>'inputname','class'=>'form-control','placeholder'=>'Name', 'value'=>set_value('uname')]);?>
                                     <?php echo "<p>".form_error('name'). "</p>";?>
                                </div>
                                <div class="form-group">
            
                                    <?php echo form_input(['name'=>'password', 'type'=>'password','id'=>'inputpassword','class'=>'form-control','placeholder'=>'password']);?>
                                        <?php echo '<p>'.form_error('password').'</p>';?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_input(['name'=>'cpassword', 'type'=>'password','id'=>'inputpassword','class'=>'form-control','placeholder'=>'conform password']);?>
                                        <?php echo '<p>'.form_error('cpassword').'</p>';?>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="reset" class="btn btn-default btn-block">Cancel</button>
                                <button type="submit" class="btn btn-success btn-block">Submit</button><br>
                                
                                <label>Already have account??</label>
                                <a href="<?php echo base_url('login'); ?>" class="btn btn-outline btn-info">login here</a>
                            </fieldset>
                        <?php echo form_close() ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/dist/js/sb-admin-2.js'); ?>"></script>

</body>

</html>
