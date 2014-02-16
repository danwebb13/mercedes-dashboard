<!doctype html>
<html>

    <!-- Head section -->
    <?php include 'elements/parts/head.php'; ?>
    <body>

    <!-- Header -->
    <?php include 'elements/parts/header.php'; ?>

    <!-- Content -->
    <div class="container">
        <div class="page">

            <section>
                <a class="breadcrumb" href="/">&lt; Back to My Core Status Page</a>
                <div class="intro">
                    <?php include 'elements/dashboard-module/intro.php'; ?>
                </div>
                <div class="assistant">
                    <?php include 'elements/dashboard-module/assistant.php'; ?>
                </div>
            </section>

            <section>
                <div class="l-col3">
                    <div class="l-col3-col l-col3-col1">
                        <div class="js-dashboard-module dashboard-module">
                            <h3 class="dashboard-module--heading">Step 1</h3>
                            <img class="dashboard-module--icon" src="assets/images/icons/icon-video.gif" alt="" />
                            <a class="js-dashboard-module dashboard-module--action" href="#">Watch Video</a>
                            <p class="dashboard-module--status">Status: <span class="dashboard-module--status-complete">Complete</span></p>
                            <p><a class="js-dashboard-module--link dashboard-module--link" href="#">Click</a> to start the video automatically.</p>
                        </div>
                    </div>
                    <div class="l-col3-col l-col3-col2">
                        <div class="js-dashboard-module dashboard-module">
                            <h3 class="dashboard-module--heading">Step 2</h3>
                            <img class="dashboard-module--icon" src="assets/images/icons/icon-document.gif" alt="" />
                            <a class="js-dashboard-module dashboard-module--action" href="#">Read Notes</a>
                            <p class="dashboard-module--status">Status: <span class="dashboard-module--status-incomplete">Incomplete</span></p>
                            <p>Please watch the video first.</p>
                        </div>
                    </div>
                    <div class="l-col3-col l-col3-col3">
                        <div class="js-dashboard-module dashboard-module">
                            <h3 class="dashboard-module--heading">Step 3</h3>
                            <img class="dashboard-module--icon" src="assets/images/icons/icon-pencil.gif" alt="" />
                            <a class="js-dashboard-module dashboard-module--action" href="#">Take Test</a>
                            <p class="dashboard-module--status">Status: <span class="dashboard-module--status-incomplete">Incomplete</span></p>
                            <p>Please read the notes before taking test</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <!-- Footer -->
    <div class="container">
        <footer>
            <?php include 'elements/parts/footer.php'; ?>
        </footer>
    </div>

    <!-- Javascript -->
    <?php include 'elements/parts/js.php'; ?>

    </body>
</html>