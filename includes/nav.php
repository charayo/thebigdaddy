<?php
    // include('./config.php');
    include "$_SERVER[DOCUMENT_ROOT]/db/config.php";
    ?>
    <nav class="navbar navbar-expand-sm bg-black navbar-dark p-4" style="border-bottom: white solid 0.5px;">
        <a class="navbar-brand" href="#">The Big Daddy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <?php
                    if(!isset($_SESSION['logged'])){
                        echo '
                            <li class="nav-item mr-2 mb-1">
                                <button type="button" class="btn btn-warnin cust-btn bg-transparent" data-toggle="modal" data-target="#myLoginModal">
                                    Login
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="btn btn-warnin cust-btn bg-transparent" data-toggle="modal" data-target="#mySignupModal">
                                    Sign Up
                                </button>
                            </li>
                        ';
                    }else{
                        echo '
                            <li class="nav-item mr-2 mb-1">
                                <button type="button" class="btn  btn-dark border-0 bg-transparent">
                                    '. $_SESSION['user'] .'
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="btn btn-warnin cust-btn bg-transparent" id="signOut">
                                    Sign out
                                </button>
                            </li>
                    ';
                    }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="https://wa.me/2349092729544?text=HELLO%20THEBIGDADDY%20i.%2C%20want%20to%20watch%20bbn">Chat Support</a>
                </li>
            </ul>
        </div>
    </nav>
    <script>
        (function($){
            $('#signOut').on('click', ()=>{
                $.get('../db/accountpro.php', {
                    signOut: true
                }, function(res){
                    console.log(res);
                    window.location.href = '../';
                })
                
            })
        })(jQuery)
    </script>