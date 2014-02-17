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
                <div class="intro intro-compact">
                    <?php include 'elements/reports/intro.php'; ?>
                </div>
                <div class="assistant">
                    <?php include 'elements/home/assistant.php'; ?>
                </div>
            </section>

            <section>
                <?php include 'elements/reports/table-reports.php' ?>
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