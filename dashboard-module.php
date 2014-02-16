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

            <section class="section--spaced">
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

            <section>
                <h4 class="notes--heading">Proactive Driving Module Notes</h4>
                <ul class="notes">
                    <li>Vivamus vestibulum auctor elit ut volutpat. Vestibulum ut mauris in justo blandit feugiat quis ac nibh. In auctor ligula enim, vel volutpat arcu gravida sed. Integer sem arcu, placerat vitae nisi id, rutrum luctus turpis. Curabitur accumsan nibh id magna elementum, ac bibendum tortor interdum.</li>
                    <li>Etiam mollis et lacus et eleifend. Morbi ut diam vel ipsum euismod elementum. In facilisis augue magna, at venenatis velit imperdiet at. Morbi iaculis, eros quis aliquet ornare, leo felis mattis dui, at consequat risus ligula in mauris.</li>
                    <li>Sed aliquet metus luctus iaculis ullamcorper. Ut sed vehicula erat. Proin semper nibh sit amet odio eleifend posuere. Proin suscipit hendrerit velit, in laoreet erat cursus quis.</li>
                </ul>
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