<?php
if($_SESSION["logged-in"]) :
    header("Location: http://kumaransathianathan.ca/breakpoverty2015/");
    die();
else :
    include_once('./inc/php/header.php'); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <?php $error = $_GET["error"]; ?>
                            <?php if($error != '') : ?>
                            <div class="alert alert-danger" role="alert">
                                <span class="fa fa-exclamation-circle" aria-hidden="true"></span>
                                <span class="sr-only">Error:</span>
                                <?php echo $error; ?>
                            </div>
                            <?php endif; ?>
                            <form role="form" action="./inc/php/login.php" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php include_once('./inc/php/footer.php');
endif; ?>
