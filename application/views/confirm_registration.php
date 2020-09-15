<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?= base_url('resources/plugins/bootstrap/css/bootstrap.css');?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url('resources/plugins/node-waves/waves.css');?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url('resources/plugins/animate-css/animate.css');?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?= base_url('resources/css/style.css');?>" rel="stylesheet">
</head>

<body>
    <div class = "clear"></div><br><br><br>
    <div class = "row">
        <div class = "col-md-3"></div>
        <div class = "col-md-6">
            <div class="card">
                <div class="body">
                    <?php if($success == 1){?>
                    <div class="alert alert-success">
                        <strong>Well done!</strong> You have registered successfully. Please <a href = "<?= base_url();?>WelcomeController">Sign In</a> to access your dashboard."
                    </div>
                    <?php }else{?>
                    <div class="alert alert-danger">
                        <strong>Oh snap!</strong> Something wrong!. Please <a href = '<?= base_url();?>WelcomeController/register'>Try </a> again.
                    </div>
                        
                    <?php }?>
                </div>
            </div>
        </div>
        <div class = "col-md-3"></div>
    </div>
   

    <!-- Jquery Core Js -->
    <script src="<?= base_url('resources/plugins/jquery/jquery.min.js');?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url('resources/plugins/bootstrap/js/bootstrap.js');?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('resources/plugins/node-waves/waves.js');?>"></script>

    <!-- Validation Plugin Js -->
    <script src="<?= base_url('resources/plugins/jquery-validation/jquery.validate.js');?>"></script>

    <!-- Custom Js -->
    <script src="<?= base_url('resources/js/admin.js');?>"></script>
    <script src="<?= base_url('resources/js/pages/examples/sign-up.js');?>"></script>

</body>

</html>