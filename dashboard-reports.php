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
        </div>

        <?php include 'elements/parts/footer.php'; ?>
        <?php include 'elements/parts/js.php'; ?>

    </body>
</html>