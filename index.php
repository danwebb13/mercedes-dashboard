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
                <?php include 'elements/modules/table-profile.php' ?>
                <a class="link-small" href="#">Download a pdf of this page</a>
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