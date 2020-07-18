    <?php 
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Bootstrap styles-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!--Custom stylesheet-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/loadexcel.js"></script>
        <title>Document</title>
    </head>
    <body>
        <div class="container-fluid mb-3 pt-5 pb-5">
            <div class="float-left m-5">

                <img src="images/logo.png" alt="Logo" width="250">
            </div>

            <div class="float-right m-5">
                <a href="/login.php" class="btn btn-info" role="button">Login</a>
            </div>
        </div>

        <div class="container mt-5">
            <div class="w-50 mx-auto">
                <h1>Roster</h1>
            </div>
            
        </div>
        <div class="container mt-5" id="le"></div>


        <a href="#" id="load" class="btn btn-info" role="button">Load</a>
        <a href="/update-roster.php" class="btn btn-info" role="button">Update Roster</a>
        <?php
        $sid = session_id();
        echo "Session ID".$sid;
        echo "Session Login".$_SESSION["login"];

        ?>
        <div class="container mt-3">
            <div class="container bg-white rounded p-5 shadow-sm">
                <div class="w-100 mb-5 mt-2">
                    <h3 class="text-center"><strong>Wintel Team<small>for today</small></strong></h3>
                    <div class="underline"></div>
                </div>
                <div class="row mt-5">
                    <div class="col bg-primary d-flex flex-wrap align-content-center bg-light justify-content-center" style="height: 200px">
                        <div class="bg-light"><h1>Hello World</h1></div>
                    </div>
                    <div class="col bg-secondary">
                    </div>

                </div>
                
            </div>
        </div>
<!--=================Teams Roster ========================================-->

        <div class="container mt-3">
            <div class="container bg-white rounded p-5 shadow-sm">
                <div class="w-100 mb-5 mt-2">
                    <h3 class="text-center"><strong>Wintel Team<small> for today</small></strong></h3>
                    <div class="underline"></div>
                </div>
                <div class="row w-75 mx-auto mt-5">
                    <div class="col p-4 mr-1 d-flex flex-wrap align-content-center justify-content-center">
                        <div>
                            <h4 class="mb-3 person-name"><span class=""><img src="icon/user_icon.png" alt="icon" width="32px"></span><span class="ml-3"><strong>Deep Baumik</strong></span></h4>
                            <p><span><img src="icon/mail_icon.png" alt="icon" width="24px"> </span>Email : deep.baumik@diligenta.co.uk</p>
                            <p><span><img src="icon/phone_icon.png" alt="icon" width="24px"> </span>Phone No : +91 9654125478</p>
                            <p><span><img src="icon/location_icon.png" alt="icon" width="24px"> </span>Location: Offshore</p>
                            <p><span><img src="icon/time_icon.png" alt="icon" width="24px"> </span>Time: 10:00 BST to 9:00 BST</p>
                            <h5 class="text-primary"><strong>Primary</strong></h5>
                        </div>
                        
                    </div>
                    <div class="col p-4 mr-1 d-flex flex-wrap align-content-center justify-content-center">
                        <div>
                            <h4 class="mb-3 person-name"><span class=""><img src="icon/user_icon.png" alt="icon" width="32px"></span><span class="ml-3"><strong>Sandip Dey</strong></span></h4>
                            <p><span><img src="icon/mail_icon.png" alt="icon" width="24px"> </span>Email : sandip.dey@diligenta.co.uk</p>
                            <p><span><img src="icon/phone_icon.png" alt="icon" width="24px"> </span>Phone No : +91 9654125478</p>
                            <p><span><img src="icon/location_icon.png" alt="icon" width="24px"> </span>Location: Offshore</p>
                            <p><span><img src="icon/time_icon.png" alt="icon" width="24px"> </span>Time: 10:00 BST to 9:00 BST</p>
                            <h5 class="text-primary"><strong>Secondary</strong></h5>
                        </div>
                        
                    </div>
            

                </div>
                
            </div>
        </div>

    </body>
    </html>