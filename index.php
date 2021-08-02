<!DOCTYPE html>
<html lang="en">
<?php
include('./includes/head.meta.php');
include('./includes/style.php');
?>

<body>
    <?php
    include('./includes/nav.php');
    ?>
    <div class="">
        <?php
        include('./includes/header.php');
        ?>
    </div>
    <!-- The Signup Modal -->
    <div class="modal fade" id="mySignupModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="">
                        <div class="row mx-auto p-0 shadofw-lg sm-user-account  my-radius">

                            <div class="d-none d-md-flex col-md-6 bg-side left-radius bg-signup">
                                <div class="overlay">

                                </div>
                            </div>
                            <div class="col-md-6 m-0 p-0 w-100">
                                <div class="w-100 m-0 p-0" id="signUpForm">

                                    <form class="container needs-validation  mx-auto bg-dkark pt-5" method="post" action="./db/accountpro.php">
                                        <div class="py-4">
                                            <h1>Sign Up</h1>
                                            <p>Please fill in this form to create an account.</p>
                                            <hr>

                                            <div class="form-group">
                                                <label for="email"><small><b>Email</b></small></label>
                                                <input type="text" placeholder="Enter Email" name="email" class="form-control " id="userEmail" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="username"><small><b>Username</b></small></label>
                                                <input type="text" placeholder="Enter Username" name="username" class="form-control" id="userId" required>

                                            </div>

                                            <div class="form-group">
                                                <label for="psw"><small><b>Password</b></small></label>
                                                <div id="passwrap"><input type="password" placeholder="Enter Password" required name="password" class="form-control userPass"><i class="fa fa-eye-slash text-dark eye-tog"></i></div>
                                            </div>
                                            <a class=" loginLink" href="" style="text-decoration: none;">already have an account? sign in</a>
                                            <br>
                                            <small class="text-success">By creating an account you agree to our <a href="#" class="" style="text-decoration: none;">Terms &
                                                    Privacy.</a>
                                            </small>

                                            <div class="">
                                                <input type="submit" value="SIGN UP" name="signup" class="btn btn-dark bg-transparent text-dark signup-btn" id="formSignupBtn">
                                            </div>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Signup modal end -->
    <!-- The Login Modal -->
    <div class="modal fade" id="myLoginModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="">
                        <div class="row mx-auto p-0 shadofw-lg sm-user-account  my-radius w-100">

                            <div class="d-none d-md-flex col-md-6 bg-side left-radius bg-login">
                                <div class="overlay">

                                </div>
                            </div>
                            <div class="col-md-6 m-0 p-0 w-100">
                                <div class="w-100 m-0 p-0" id="loginForm">

                                    <form class="container needs-validation  mx-auto pt-5" method="post" action="./db/accountpro.php">
                                        <div class="py-4">
                                            <h1>Log In</h1>
                                            <p>Please fill in your details to log in.</p>
                                            <hr>

                                            <label for="email"><b>Email/Username</b></label>
                                            <input type="text" placeholder="Enter Email/Username" name="user_access" class="form-control ">

                                            <label for="psw"><b>Password</b></label>
                                            <div id="passwrap"><input type="password" placeholder="Enter Password" name="password" class="form-control userPass"><i class="fa fa-eye-slash text-dark eye-tog"></i></div>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span><input type="checkbox" name="remember_me" /> Remember me</span><strong class="text-danger"><a href="/user-account/recovery" style="text-decoration: none;">Reset Password?</a></strong>
                                            </div>
                                            <div class="text-center mt-3">
                                                <span class="mt-3">Don't have an account yet?</span>
                                                <strong><a href="" style="text-decoration: none;" class="signUpLink">Create Account</a></strong>

                                            </div>

                                            <div class="mt-2">
                                                <input type="submit" value="Log in" name="login" class="form-control btn btn-primary login-btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Login modal end -->
</body>

</html>