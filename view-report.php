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
                    <div id="content-main" class="standard-box-alt">
                        <div class="assessment standard-padding">
                            <div class="assessment-header">
                                <h2 class="heading--inline heading--bold">Driver Assessment Complete!</h2>
                                <div class="assessment-status assessment-status--right">
                                    <a href="#"><span class="icon-arrow">Arrow</span></a>
                                    <a class="assessment-status--text" href="/RiskProfile/ViewPDFReport">View Report</a>
                                </div>  
                            </div>
                            <div class="assessment-body">
                                <p>Thank you, you have now completed your Driver Profile and your results have been saved. To download and view your report, click on the View Report link above.</p>
                                <p>Find out more about your Driver Profile by downloading the <a class="assessment--link" href="http://www.mbdriverprofile.com/Understanding_Your_Driver_Profile.pdf" target="_blank">Understanding Your Driver Profile PDF</a> here.</p>
                          
                                <h2 class="heading--bold">Your Driver Profile details:</h2>

                                <ul class="assessment-list">
                                    <li>
                                        <span class="assessment-list--label">Completion Date:</span>
                                        <span class="assessment-list--value">14/03/2014</span>
                                    </li>
                                    <li>
                                        <span class="assessment-list--label">Completion Time:</span>
                                        <span class="assessment-list--value">17:07</span>
                                    </li>
                                    <li>
                                        <span class="assessment-list--label">Risk Group:</span> 
                                        <span class="assessment-list--value">High</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php include 'elements/parts/footer.php'; ?>

    </body>
</html>     
