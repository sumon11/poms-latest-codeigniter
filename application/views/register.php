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

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">POMS</a>
            <small>Personal Office Management System</small>
        </div>
        <div class="card">
            <div class="body">
                <form>
                    <input type = "hidden" id = "baseUrl" value="<?= base_url();?>">
                    <div class="msg">Register a new membership</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" id = "name" placeholder="Full Name" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">library_books</i>
                        </span>
                        <div class="form-line">
                            <select class = "form-control" name = "department" id = "department" required="required">
                                <option value = "">--Select Department--</option>
                                <?php 
                                if($departments){
                                foreach($departments as $val){?>
                                <option value = "<?= $val['id'];?>"><?= $val['title'];?></option>
                                <?php }
                            }?>
                            </select>

                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <select class = "form-control" name = "user_type" id = "userType" required="required">
                                <option value = "">--Select Type--</option>
                                <option value = "student">Student</option>
                                <option value = "others">Others</option>
                            </select>

                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" id = "email" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" id = "password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" id = "confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="button" id = "register">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.html">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
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



    <script type="text/javascript">
        $(document).ready(function(){
            $('#register').click(function(){
                var baseUrl = $('#baseUrl').val();
                var name = $('#name').val();
                var department = $('#department').val();
                var userType = $('#userType').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var confirm = $('#confirm').val();

                if(name == ''){
                    alert('Name is required');
                    return false;
                }
                if(name == ''){
                    alert('Name is required');
                    return false;
                }
                if(department == ''){
                    alert('Department is required');
                    return false;
                }
                if(userType == ''){
                    alert('User type is required');
                    return false;
                }
                if(email == ''){
                    alert('Email is required');
                    return false;
                }
                if(password == ''){
                    alert('Password is required');
                    return false;
                }
                if(password!=confirm){
                    alert('Password and Confirm password will be same. Please try again.')
                    return false;
                }else{
                     $.ajax({
                        type: "POST",
                        url:baseUrl+'WelcomeController/submit_registration',
                        data: {name:name,department:department,userType:userType,email:email,password:password},
                        success: function(data){
                            if(data == 2){
                                alert('You are already registered.');
                                return false;
                             
                            }else{
                              window.location = baseUrl+'WelcomeController/confirm_registration/'+data;  
                            }
                        }

                    });
                }

            });
        });
    </script>
</body>

</html>