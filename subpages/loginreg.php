<?php
$register = ($page === "register.php") ? true : false;
$login    = ($page === "login.php")    ? true : false;
?>

<div class="section section-login">

    <div class="row">
    
        <header>
            <div class="row text-center">
                <div class="col-xs-12">
                    <h2>
                        <?php echo PAGE_TITLE ?>
                    </h2>
                </div>
            </div>
        </header>

        <section class="text-center">

            <div class="row ">

                <div class="col-md-4"></div>

                <div class="col-md-4">
                    <form method="post">

                        <label for="username" class="form-label text-danger">
                            Error message
                        </label>

                        <input type="text" name="username" class="form-control"
                        maxlength="<?php echo LIMIT_USERNAME; ?>"
                        placeholder="<?php echo LOGINREG_PLACEHOLDER_USERNAME; ?>">

                        <label for="password" class="form-label text-danger">
                            Error message
                        </label>

                        <input type="password" name="password" class="form-control"
                        maxlength="<?php echo LIMIT_PASSWORD; ?>"
                        placeholder="<?php echo LOGINREG_PLACEHOLDER_PASSWORD; ?>">

                        <a class="btn btn-primary" href="#">
                            <?php if ($register) echo LOGINREG_BUTTON_REGISTER; ?>
                            <?php if ($login)    echo LOGINREG_BUTTON_LOGIN; ?>
                        </a>

                        <a class="btn btn-info"
                        href="<?php if ($register) echo "login.php"; if ($login) echo "register.php"; ?>">
                            <?php if ($register) echo LOGINREG_CHANGE_LOGIN; ?>
                            <?php if ($login)    echo LOGINREG_CHANGE_REGISTER; ?>
                        </a>

                    </form>
                </div>

                <div class="col-md-4"></div>

            </div>

        </section>

        <footer class="section-login-footer">
            <div class="row text-center">
                <div class="col-xs-12">
<pre class="section-login-footer-logo">
░░█ ▄▀█ █▀▄▀█ █▀▀ █▀   █▀▄▀█ █▀▀ █░░ █░░ █▀█ █▀█
█▄█ █▀█ █░▀░█ ██▄ ▄█   █░▀░█ ██▄ █▄▄ █▄▄ █▄█ █▀▄
</pre>
                </div>
            </div>
        </footer>

    </div>
</div>