<div class="header">
        <div class="container">
         
           
            <div class="w3l_header_right">
                <ul>
                    <?php if (strlen($_SESSION['rtomsuid']==0)) {?>
                   <li><a href="login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>log in</a></li>
                    <li><a href="sign-up.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>sign up</a></li> <?php } ?>
                    <?php if (strlen($_SESSION['rtomsuid']>0)) {?>
<li role="presentation" class="dropdown">
                            <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Apply For New Licence <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                <li><a href="learing-licence.php" tabindex="-1" role="tab" id="dropdown1-tab" aria-controls="dropdown1">Learining Licence</a></li>
                                <li><a href="driving-licence.php" tabindex="-1" role="tab" id="dropdown2-tab" aria-controls="dropdown2">Driving Licence</a></li>
                            </ul>
                        </li>
                        <li role="presentation" class="dropdown">
                            <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">My Accounts<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                <li><a href="profile.php" tabindex="-1" role="tab" id="dropdown1-tab" aria-controls="dropdown1">Profile</a></li>
                                <li><a href="setting.php" tabindex="-1" role="tab" id="dropdown2-tab" aria-controls="dropdown2">Setting</a></li>
                                <li><a href="logout.php" tabindex="-1" role="tab" id="dropdown2-tab" aria-controls="dropdown2">Logout</a></li>
                            </ul>
                        </li>
                        <li role="presentation" class="dropdown">
                            <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Request History<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                <li><a href="all-ll-request.php" tabindex="-1" role="tab" id="dropdown1-tab" aria-controls="dropdown1">LL Application</a></li>
                                <li><a href="all-dl-request.php" tabindex="-1" role="tab" id="dropdown2-tab" aria-controls="dropdown2">DL Application</a></li>
                              
                            </ul>
                        </li><?php } ?>
                </ul>

            </div>
            <div class="clearfix"> </div>
            <script type="text/javascript" src="js/demo.js"></script>
        </div>
    </div>
    <div class="logo_nav">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <div class="logo">
                        <h1><a class="navbar-brand" href="index.php">RTO MS</a></h1>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php"><span data-hover="Home">Home</span></a></li>
                            <li><a href="about.php"><span data-hover="About">About</span></a></li>

                            <li><a href="contact.php"><span data-hover="Mail Us">Mail Us</span></a></li>
                             <?php if (strlen($_SESSION['rtomsuid']==0)) {?>
                            <li><a href="admin/index.php"><span data-hover="Admin">Admin</span></a></li>
                            <li><a href="rto/index.php"><span data-hover="RTO">RTO</span></a></li>
                        <?php } ?>
                        </ul>

                    </nav>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>