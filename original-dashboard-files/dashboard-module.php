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
                    <a class="breadcrumb" href="/">&lt; Back to Course Status Page</a>
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
                            <a href="<?php echo $video_url; ?>" data-type="iframe" class="js-dash-mod js-fancybox dash-mod dash-mod--video">
                                <span class="dash-mod--heading">Step 1</span>
                                <img class="dash-mod--icon" src="assets/images/icons/icon-video.gif" alt="" />
                                <span class="dash-mod--action">Watch Video</span>
                                <span class="dash-mod--status-label">Status: <span class="dash-mod--status dash-mod--status-complete">Complete</span></span>
                                <span class="dash-mod--text"><span class="js-dash-mod--link dash-mod--link">Click</span> to start the video automatically.</span>
                                <span class="dash-mod--overlay dash-mod--overlay-video">
                                    <span class="dash-mod--overlay-text dash-mod--overlay-text-video">Watch Video</span>
                                </span>
                            </a>
                        </div>
                        <div class="l-col3-col l-col3-col2">
                            <a href="/" class="dash-mod dash-mod--notes">
                                <span class="dash-mod--heading">Step 2</span>
                                <img class="dash-mod--icon" src="assets/images/icons/icon-document.gif" alt="" />
                                <span class="dash-mod--action">Read Notes</span>
                                <span class="dash-mod--status-label">Status: <span class="dash-mod--status dash-mod--status-incomplete">Incomplete</span></span>
                                <span class="dash-mod--text">Please watch the video first.</span>
                                <span class="dash-mod--overlay dash-mod--overlay-notes">
                                    <span class="dash-mod--overlay-text dash-mod--overlay-text-notes">Read Notes</span>
                                </span>
                            </a>
                        </div>
                        <div class="l-col3-col l-col3-col3">
                            <a href="/" class="dash-mod dash-mod--test">
                                <span class="dash-mod--heading">Step 3</span>
                                <img class="dash-mod--icon" src="assets/images/icons/icon-pencil.gif" alt="" />
                                <span class="dash-mod--action">Take Test</span>
                                <span class="dash-mod--status-label">Status: <span class="dash-mod--status dash-mod--status-incomplete">Incomplete</span></span>
                                <span class="dash-mod--text">Please read the notes before taking test.</span>
                                <span class="dash-mod--overlay dash-mod--overlay-test">
                                    <span class="dash-mod--overlay-text dash-mod--overlay-text-test">Take Test</span>
                                </span>
                            </a>                            
                        </div>
                    </div>
                </section>

                <section>
                    <div class="notes">
                        <h4 class="notes--heading">Proactive Driving Module Notes</h4>
                        <ul class="notes--list">
                            <li>Vivamus vestibulum auctor elit ut volutpat. Vestibulum ut mauris in justo blandit feugiat quis ac nibh. In auctor ligula enim, vel volutpat arcu gravida sed. Integer sem arcu, placerat vitae nisi id, rutrum luctus turpis. Curabitur accumsan nibh id magna elementum, ac bibendum tortor interdum.</li>
                            <li>Etiam mollis et lacus et eleifend. Morbi ut diam vel ipsum euismod elementum. In facilisis augue magna, at venenatis velit imperdiet at. Morbi iaculis, eros quis aliquet ornare, leo felis mattis dui, at consequat risus ligula in mauris.</li>
                            <li>Sed aliquet metus luctus iaculis ullamcorper. Ut sed vehicula erat. Proin semper nibh sit amet odio eleifend posuere. Proin suscipit hendrerit velit, in laoreet erat cursus quis.</li>
                        </ul>
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