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

                <?php $video_url = "http://embed-0.wistia.com/deliveries/19d2e8cd32379027c562fdf0d41b58756f1dc78c/file.mp4"; ?>

                <section class="section--spaced">
                    <div class="l-col3">
                        <div class="l-col3-col l-col3-col1">
                            <a href="<?php echo $video_url; ?>" data-type="iframe" class="js-dashboard-module js-fancybox dashboard-module dashboard-module--video">
                                <span class="dashboard-module--heading">Step 1</span>
                                <img class="dashboard-module--icon" src="assets/images/icons/icon-video.gif" alt="" />
                                <span class="dashboard-module--action">Watch Video</span>
                                <span class="dashboard-module--status-label">Status: <span class="dashboard-module--status dashboard-module--status-complete">Complete</span></span>
                                <span class="dashboard-module--text"><span class="js-dashboard-module--link dashboard-module--link">Click</span> to start the video automatically.</span>
                                <span class="dashboard-module--overlay dashboard-module--overlay-video"></span>
                            </a>
                        </div>
                        <div class="l-col3-col l-col3-col2">
                            <a href="/" class="dashboard-module dashboard-module--notes">
                                <span class="dashboard-module--heading">Step 2</span>
                                <img class="dashboard-module--icon" src="assets/images/icons/icon-document.gif" alt="" />
                                <span class="dashboard-module--action">Read Notes</span>
                                <span class="dashboard-module--status-label">Status: <span class="dashboard-module--status dashboard-module--status-incomplete">Incomplete</span></span>
                                <span class="dashboard-module--text">Please watch the video first.</span>
                                <span class="dashboard-module--overlay dashboard-module--overlay-notes"></span>
                            </a>
                        </div>
                        <div class="l-col3-col l-col3-col3">
                            <a href="/" class="dashboard-module dashboard-module--test">
                                <span class="dashboard-module--heading">Step 3</span>
                                <img class="dashboard-module--icon" src="assets/images/icons/icon-pencil.gif" alt="" />
                                <span class="dashboard-module--action">Take Test</span>
                                <span class="dashboard-module--status-label">Status: <span class="dashboard-module--status dashboard-module--status-incomplete">Incomplete</span></span>
                                <span class="dashboard-module--text">Please read the notes before taking test.</span>
                                <span class="dashboard-module--overlay dashboard-module--overlay-test"></span>
                            </a>                            
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