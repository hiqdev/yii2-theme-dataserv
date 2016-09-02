<section id="main-body" class="container">

    <div class="row">
        <!-- Container for main page display content -->
        <div class="col-xs-12 main-content">


            <div class="logincontainer">

                <div class="header-lined">
                    <h1>Login
                        <small>This page is restricted</small>
                    </h1>
                </div>


                <div class="alert alert-danger text-center">
                    Login Details Incorrect. Please try again.
                </div>


                <form method="post" action="dologin.php" role="form">
                    <input type="hidden" name="token" value="af56db2b7ef491c6143f363e076ff69b9fce724e">
                    <div class="form-group">
                        <label for="inputEmail">Email Address</label>
                        <input type="email" name="username" class="form-control" id="inputEmail"
                               placeholder="Enter email" autofocus="">
                    </div>

                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword"
                               placeholder="Password" autocomplete="off">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="rememberme"> Remember Me
                        </label>
                    </div>

                    <div align="center">
                        <input id="login" type="submit" class="btn btn-primary" value="Login"> <a href="pwreset.php"
                                                                                                  class="btn btn-default">Forgot
                            Password?</a>
                    </div>
                </form>

            </div>

            <p style="text-align:center;">Powered by <a href="http://www.whmcs.com/"
                                                        target="_blank">WHMCompleteSolution</a></p>

        </div><!-- /.main-content -->
    </div>
    <div class="clearfix"></div>
</section>