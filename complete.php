<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <?php include 'elements/parts/head.php'; ?>

    <body>
        <?php include 'elements/parts/header.php'; ?>
        <?php include 'elements/modules/toolbar.php'; ?>
        <?php include 'elements/parts/nav1.php'; ?>

        <!-- Content -->
        <div class="wrapper">
            <div class="container">

                <div class="page page--default">
                                                             
                <div id="content-main" class="standard-box-alt">
                    <div class=" content-assessment standard-padding">
                         
                        <div class="assessment-header">
                            <h2 class="heading--bold">Finished!</h2>
                        </div>

                        <form id="dashboard" class="opt-in-checkbox-container" method="post" action="#">
                            <div class="assessment">
                                <p>That was the last question.</p>
                                <p>Your Driver Profile report will be available via the View Report link on your home page. The results show your response to each question along with feedback, tips and advice.</p>
                                <div class="assessment--terms">
                                    <p>Mercedes-Benz World may contact you to send you your Driver Profile feedback, to provide information about our products, services or special offers, or for purposes of research and analysis. By providing your contact details you agree to be contacted by these methods for these purposes. If you prefer <strong>not</strong> to receive information in a particular format please tick the relevant box:</span></p>
                                </div>
                                <ul class="assessment--terms-list">
                                    <li>
                                        <input class="form-profile--checkbox" type="checkbox" value="1"  id="post" name="post" />
                                        <label class="form-profile--label form-profile--label-small form-profile--label-right">Do not contact me by post</label>
                                    </li>
                                    <li>
                                        <input class="form-profile--checkbox" type="checkbox" value="1"  id="telephone" name="telephone" />
                                        <label class="form-profile--label form-profile--label-small form-profile--label-right MvcDynamicListFieldInputLabel" for="">Do not contact me by telephone</label>
                                    </li>
                                    <li>
                                        <input class="form-profile--checkbox" type="checkbox" value="1"  id="Email" name="Email" />
                                        <label class="form-profile--label form-profile--label-small form-profile--label-right">Do not contact me by email</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="standard-box-footer">
                            <a class="button button--right" href="#" id="ContinuetoDashboard">Continue to Home page &gt;</a>
                        </div>
                    </form>

                </div>

            </div>
        </div>

        <?php include 'elements/parts/footer.php'; ?>

    </body>
</html>     
