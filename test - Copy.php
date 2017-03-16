<!--Breadcrumbs Section-->
<div class="breadcrumbs-sec" hide-sm hide-xs>
    <div class="container">
        <div class="breadcrumbs">
            <div ncy-breadcrumb></div>
        </div>
    </div>
</div>

<!--Register Section-->
<div class="login-sec">
    <div class="container">
        <div class="page-title user" id='errorLogin'>
            <h1>Registration</h1>
        </div>
        <div class="login-area" layout-wrap layout="row" layout-align="center center">
            <div flex="100" class="login-blog" ng-controller='registerCtrl'>
                <div  class="errorLogin" ng-show="registerErrorShow">{{registerErrorMess}}</div>
                <form name="registrationForm">
                    <md-input-container class="md-block" flex-gt-sm>
                        <label>Name</label>
                        <input type='text' required ng-model="userName" name="userName">
                        <div ng-messages="registrationForm.userName.$error">
                            <div ng-message="required">This is required.</div>
                        </div>
                    </md-input-container>
                    <md-input-container class="md-block" flex-gt-sm>
                        <label>Email Address</label>
                        <input type='text' required maxlength="100" ng-pattern="/^.+@.+\..+$/" ng-model="email" name='email'>
                        <div ng-messages="registrationForm.email.$error">
                            <div ng-message="required">This is required.</div>
                            <div ng-message="pattern">Please provide a valid email</div>
                        </div>
                    </md-input-container>
                    <md-input-container class="md-block" flex-gt-sm>
                        <label>Mobile Number</label>
                        <input type='text' required minlength="10" pattern='^[0-9]+$' ng-model="mob" name='mob'>
                        <div ng-messages="registrationForm.mob.$error">
                            <div ng-message="required">This is required.</div>
                            <div ng-message="pattern">Please provide a valid mobile number</div>
                            <div ng-message="minlength">Minimum 10 digits.</div>
                        </div>
                    </md-input-container>
                    <md-input-container class="md-block" flex-gt-sm>
                        <label>Password</label>
                        <input type='password' required minlength="6" ng-model="pwd" name='pwd'>
                        <div ng-messages="registrationForm.pwd.$error">
                            <div ng-message="required">This is required.</div>
                            <div ng-message="minlength">Minimum 6 characters.</div>
                        </div>
                    </md-input-container>
                    <md-input-container class="md-block" flex-gt-sm>
                        <label>Confirm Password</label>
                        <input type='password' required ng-model="cpwd" same-as='pwd' name='cpwd'>
                        <div ng-messages="registrationForm.cpwd.$error">
                            <div ng-message="required">This is required.</div>
                            <div ng-message="sameAs">Passwords are not matching. Please re-enter.</div>
                        </div>
                    </md-input-container>
                    <div class="check-section" layout="row">
                        <div class="login_check">
                            <md-checkbox md-no-ink aria-label="Checkbox No Ink" name="terms" ng-model="terms" class="md-primary" required></md-checkbox>
                            I agree to the <a ui-sref="home.privacy()">Privacy Policy</a> &amp; <a ui-sref="home.termsofsale()">Terms and Conditions</a>
                            <div ng-messages="registrationForm.terms.$error">
                                <div ng-message="required">This is required. Do You accept</div>
                            </div>
                        </div>
                    </div>
                    <div class="login-btn">
                        <md-button class="md-raised md-green medium full" ng-disabled="registrationForm.$invalid || registrationForm.$pending" ng-click='register()' type='submit'>Register</md-button>
                    </div>
                    <div flex class="login_foot">Already have an account?
                        <a ui-sref="home.login()">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Register Section-->
