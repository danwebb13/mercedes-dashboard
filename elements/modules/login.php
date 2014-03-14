<div id="login-home">
    <form class="form-login" action="/Account/LogOn" id="form0" method="post">
        <div class="form-field">
            <label class="label-login--label">
                Email:</label>
            <input class="form-login--input" id="UserName" name="UserName" type="text" value="" />
        </div>
        <div class="form-field">
            <label class="form-login--label">Password:</label>
            <input class="form-login--input login-error" id="Password" name="Password" type="password" />
        </div>
        <div class="form-field">
            <a href="/Account/ForgottenPassword" class="form-login--forgotten-pw forgottenlink">Forgotten Password</a>
            <input class="form-login--submit" type="submit" value="Login" id="Submit" />
        </div>
    </form>
</div>