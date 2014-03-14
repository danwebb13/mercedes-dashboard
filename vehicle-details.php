<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <?php include 'elements/parts/head.php'; ?>

    <body>
        <?php include 'elements/parts/header.php'; ?>
        <?php include 'elements/modules/toolbar.php'; ?>

        <div class="container">
            <nav class="nav-primary">
                <ul>
                    <li><a>Mercedes Benz Driver Profile</a></li>
                </ul>
            </nav>
        </div>

        <!-- Content -->
        <div id="wrapper">
            <div class="container">

                <div class="page">
                                                             
                    <div id="content-main" class="standard-box">
                        <div class="standard-box-header">
                            <h2 class="heading--box">User registration - Step 2: About your vehicle</h2>
                        </div>
                        <form class="form-profile" action="/Members/VehicleDetails?codekitCB=416501983.217024" id="form0" method="post">
                            <div class="standard-box-body">

                                <div class="form-field">                                    
                                    <label class="form-profile--label" for="name">Vehicle Type:<abbr title="Required Field" class="require">*</abbr></label>
                                    <select class="form-profile--select" id="VehicleTypeId" name="VehicleTypeId" style="width:150px"><option value="">Please Select</option>
                                        <option value="1">Company Car</option>
                                        <option value="2">Lease Car</option>
                                        <option value="3">Pool car</option>
                                        <option value="4">Own</option>
                                        <option value="5">Other Vehicle</option>
                                        <option value="7">Unknown</option>
                                    </select>
                                </div>

                                <div class="form-field">
                                    <label class="form-profile--label" for="name">Make:<abbr title="Required Field" class="require">*</abbr></label>
                                    <select class="form-profile--select" id="VehicleMakeId" name="VehicleMakeId" style="width:150px"><option value="">Please Select</option>
                                        <option value="2">Alfa Romeo</option>
                                        <option value="3">Alpina</option>
                                        <option value="4">Aston Martin</option>
                                        <option value="5">Audi</option>
                                        <option value="6">Bentley</option>
                                        <option value="8">BMW</option>
                                        <option value="7">Brilliance</option>
                                        <option value="9">Cadillac</option>
                                        <option value="55">Caterham</option>
                                        <option value="10">Chevrolet</option>
                                    </select>
                                </div>

                                <div class="form-field">                                    
                                    <label class="form-profile--label" for="name">Model:<abbr title="Required Field" class="require">*</abbr></label>
                                    <input class="form-profile--input form-profile--input-small" id="VehicleModel" name="VehicleModel" type="text" value="" /><br clear=all> 
                                     <div class="form-profile--hint">If you do not have your vehicle model<br /> information, please enter Unknown</div>
                                </div>

                                <div class="form-field">                                    
                                    <label class="form-profile--label" for="name">Registration:<abbr title="Required Field" class="require">*</abbr></label>
                                    <input class="form-profile--input form-profile--input-small" id="VehicleRegistration" name="VehicleRegistration" type="text" value="" /><br clear=all> 
                                    <div class="form-profile--hint">If you do not have your vehicle registration<br /> information, please enter Unknown</div>
                                </div>

                                <div class="form-field">                                    
                                    <label class="form-profile--label" for="name">Year:<abbr title="Required Field" class="require">*</abbr></label>
                                    <select class="form-profile--select" id="VehicleYearsId" name="VehicleYearsId"><option value="">Please Select</option>
                                        <option value="1">2013</option>
                                        <option value="2">2012</option>
                                        <option value="3">2011</option>
                                        <option value="4">2010</option>
                                        <option value="5">2009</option>
                                        <option value="6">2008</option>
                                        <option value="7">2007</option>
                                        <option value="8">2006</option>
                                        <option value="9">2005</option>
                                        <option value="10">2004</option>
                                        <option value="11">2003</option>
                                        <option value="12">2002</option>
                                    </select>
                                </div>
                                <div class="validation-summary-valid" id="validationSummary">
                                    <span>Please correct the errors and try again.</span>
                                </div> 
                            </div>
                            <div class="standard-box-footer">
                                <input class="button" type="submit" value="Next" id="Next" />
                            </div>
                        </form>
                    </div>

                    <!-- Sidebar -->
                    <div id="sidebar">
                    </div> 

                </div>

            </div>
        </div>

        <?php include 'elements/parts/footer.php'; ?>

    </body>
</html>     
