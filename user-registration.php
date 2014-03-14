<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <?php include 'elements/parts/head.php'; ?>

    <body>
        <?php include 'elements/parts/header.php'; ?>

        <div class="container">
            <div class="toolbar">
                <a class="toolbar--user" href="/members/myprofile" title="logged in">Paul@newcompany.com</a>
            </div>
        </div>

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
                            <h2 class="heading--box">User registration - Step 1: About you</h2>
                        </div>

                        <form class="form-profile" action="/Members/Registration?codekitCB=416498280.308198" id="form0" method="post">

                            <div class="standard-box-body">
                                <div class="form-content">
                                    <div class="form-field">
                                        <input class="form-profile--input" type="hidden" name="CountryId" id="CountryId" value="1">
                                        <span class="field-validation-valid" id="CompanyId_validationMessage"></span>
                                        <input class="form-profile--input form-profile--input-compact" id="UserId" name="UserId" type="hidden" value="37bc9619-5099-47e6-a8be-156e1a17f43c" />
                                        <input class="form-profile--input" id="TermsId" name="TermsId" type="hidden" value="8d15f149-ad97-49d4-a73b-baae7d563942" />
                                        <label class="form-profile--label" for="name">Title:<abbr title="Required Field" class="require">*</abbr></label>
                                        <select class="form-profile--select" id="TitleId" name="TitleId" title="Title"><option value="">Please Select</option>
                                            <option value="1">Mr</option>
                                            <option value="2">Ms</option>
                                            <option value="3">Miss</option>
                                            <option value="4">Mrs</option>
                                            <option value="5">Dr</option>
                                        </select>
                                    </div>
                                    <div class="form-field">
                                        <span class="field-validation-valid" id="TitleId_validationMessage"></span>
                                        <label class="form-profile--label" for="name">Name:<abbr title="Required Field" class="require">*</abbr></label>
                                        <input class="form-profile--input form-profile--input-inline form-profile--input-inline-last" id="FirstName" name="FirstName" type="text" value="Paul" />
                                        <input class="form-profile--input form-profile--input-inline" id="LastName" name="LastName" type="text" value="Cooper" />
                                    </div>
                                    <div class="form-field">
                                        <label class="form-profile--label" for="address">Address:</label>
                                        <input class="form-profile--input form-profile--input-compact" id="Address1" name="Address1" type="text" value="" />
                                        <input class="form-profile--input" id="Address2" name="Address2" type="text" value="" />
                                    </div>
                                       <div class="form-field">
                                        <label class="form-profile--label" for="address">Town:</label>
                                        <input class="form-profile--input" id="TownCity" name="TownCity" type="text" value="" />
                                    </div>
                                    <div class="form-field">
                                        <label class="form-profile--label" for="address">County:</label>
                                        <select class="form-profile--select" id="CountyID" name="CountyID"><option value="">Please Select</option>
                                            <option value="1">Bedfordshire</option>
                                            <option value="90">Berkshire</option>
                                            <option value="2">Buckinghamshire</option>
                                            <option value="3">Cambridgeshire</option>
                                            <option value="4">Cheshire</option>
                                            <option value="5">Cornwall and Isles of Scilly</option>
                                            <option value="6">Cumbria</option>
                                            <option value="7">Derbyshire</option>
                                            <option value="8">Devon</option>
                                            <option value="9">Dorset</option>
                                            <option value="10">Durham</option>
                                            <option value="11">East Sussex</option>
                                            <option value="12">Essex</option>
                                            <option value="13">Gloucestershire</option>
                                        </select>                   
                                   </div>
                                   <div class="form-field">
                                        <label class="form-profile--label" for="address">Postcode:</label>              
                                        <input class="form-profile--input" id="PostcodeZip" maxlength="10" name="PostcodeZip" type="text" value="" />
                                    </div>                            
                                   <div class="form-field">
                                        <label class="form-profile--label" for="address">Job Title:</label>
                                        <input class="form-profile--input" id="JobTitle" name="JobTitle" type="text" value="" />
                                    </div>
                                    <label class="form-profile--label" for="email" class="emailaddress-container">Email:</label>
                                    <input class="form-profile--input" disabled="disabled" id="EmailAddress" name="EmailAddress" readonly="readonly" type="text" value="Paul@newcompany.com" />
                                    <span class="field-validation-valid" id="EmailAddress_validationMessage"></span>                  
                                </div>

                                <div class="validation-summary-valid" id="validationSummary">
                                    <span>Please correct the errors and try again.</span>
                                </div> 
                            </div>
                            <div class="standard-box-footer">
                                <div class="standard-box-footer-inner">
                                    <input class="button" type="submit" value="Next" id="Next" />
                                </div>
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
