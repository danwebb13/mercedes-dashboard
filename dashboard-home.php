<!doctype html>
<html>

    <!-- Head section -->
    <?php include 'elements/parts/head.php'; ?>
    <body>

        <!-- Header -->
        <?php include 'elements/parts/header.php'; ?>
        <?php include 'elements/parts/nav3.php'; ?>

        <!-- Content -->
        <div class="wrapper">
            <div class="container">
                <div class="page page--dashboard">

                    <section>
                        <div class="intro intro-compact">
                            <?php include 'elements/home/intro.php'; ?>
                        </div>
                        <div class="assistant">
                            <?php include 'elements/home/assistant.php'; ?>
                        </div>
                        <div class="progress">
                            <?php include 'elements/parts/progress.php'; ?>
                        </div>
                    </section>

                    <section>
                        <div id="tabs">
                            <ul>
                                <li><a href="#tabs-1">Current Year</a></li>
                                <li><a href="#tabs-2">Year 2</a></li>
                                <li><a href="#tabs-3">Year 1</a></li>
                            </ul>
                            <div id="tabs-1">
                                <?php include 'elements/parts/table-profile.php' ?>
                            </div>
                            <div id="tabs-2">
                                <?php include 'elements/parts/table-profile-2.php' ?>
                            </div>
                            <div id="tabs-3">
                                <?php include 'elements/parts/table-profile-1.php' ?>
                            </div>
                        </div>
                        
                        <a class="link-pdf" href="#">
                            <img src="assets/images/icons/icon-pdf.png" alt="" />
                            <span>Download a pdf of this page</span>
                        </a>
                    </section>

                    <div id="js-dialog-incomplete" title="Please complete your Driver Profile">
                        <p>
                            <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
                            Welcome to your current course. Previous courses can be accessed using the tabs on your Dashboard. 
                            <br />To continue to your Driver Profile, click below. 
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <?php include 'elements/parts/footer.php'; ?>
        <?php include 'elements/parts/js.php'; ?>

    </body>
</html>