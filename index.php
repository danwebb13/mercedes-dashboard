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

            <section class="page--header">
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

            <section class="data-table">
                <?php include 'elements/modules/table-profile.php' ?>
            </section>

        </div>
    </div>

    <!-- Footer -->
    <?php include 'elements/footer.php'; ?>

    <!-- Javascript -->
    <?php include 'elements/js.php'; ?>

    </body>
</html>