<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <?php include 'elements/parts/head.php'; ?>

    <body>
        <?php include 'elements/parts/header.php'; ?>
        <?php include 'elements/modules/toolbar.php'; ?>

        <div class="container">
            <nav class="nav-primary">
                <ul>
                    <li><a>Mercedes Benz Driver Profile</a></li>
                </ul>
            </nav>
        </div>

        <!-- Content -->
        <div id="wrapper">
            <div class="container">

                <div class="page">
                                                             
                    <div id="content-main" class="standard-box">
                        <div class="standard-box-header">
                            <h2 class="heading--bold">Welcome</h2>
                        </div>
                        <form action="/Members/Welcome?codekitCB=416496822.523946" method="post">

                        <div class="standard-box-body">
                            <div class="form-content">
                               <h3>Your Mercedes-Benz Driver Profile</h3>
                                <p>The Driver Profile captures information about you, the vehicle you drive and the journeys you make. Once completed, you will have access to your own Driver Profile report, and if you are coming to drive at Mercedes-Benz World, it also provides information to the track team to help them plan your activities.</p>
                                <p><strong>Only five minutes to complete</strong></p>
                                <p>To begin, we require some basic information about you and about the vehicle you drive. Please have this information to hand: vehicle make, model, registration and year. The whole process can be completed in five minutes.</p>
                                <p>Click <strong>Next</strong> to get started.</p>
                            </div>
                        </div>

                        <div class="standard-box-footer">
                            <input class="button" type="submit" value="Next" id="Next" name="Command" />
                            <input class="button" type="submit" value="Log Out" id="Logout" name="Command" />
                        </div>
                        </form>
                    </div>

                    <!-- Sidebar -->
                    <div class="sidebar">
                    </div>                            

                </div>

            </div>
        </div>

        <?php include 'elements/parts/footer.php'; ?>

    </body>
</html>     
