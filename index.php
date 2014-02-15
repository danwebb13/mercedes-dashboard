<!doctype html>
<html>

    <!-- Head section -->
    <?php include 'elements/head.php'; ?>
    <body>

    <!-- Header -->
    <?php include 'elements/header.php'; ?>

    <!-- Content -->
    <div class="container">
        <div class="page">

            <section>
                <div class="intro">
                    <?php include 'elements/home/intro.php'; ?>
                </div>
                <div class="assistant">
                    <?php include 'elements/home/assistant.php'; ?>
                </div>
                <div class="progress">
                    <?php include 'elements/modules/progress.php'; ?>
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
                        <?php include 'elements/modules/table-profile.php' ?>
                    </div>
                    <div id="tabs-2">
                        <?php include 'elements/modules/table-profile-2.php' ?>
                    </div>
                    <div id="tabs-3">
                        <?php include 'elements/modules/table-profile-1.php' ?>
                    </div>
                </div>
                
                <a class="link-pdf" href="#">Download a pdf of this page</a>
            </section>

        </div>
    </div>

    <!-- Footer -->
    <div class="container">
        <footer>
            <?php include 'elements/footer.php'; ?>
        </footer>
    </div>

    <!-- Javascript -->
    <?php include 'elements/js.php'; ?>

    </body>
</html>