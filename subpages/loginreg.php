<?php
$register = ($page === "register.php") ? true : false;
$login    = ($page === "login.php")    ? true : false;
?>

<div class="section section-login">

    <div class="row section-login-row">

        <div class="col-md-4">
            <section class="section-login-left">
                <h3><?php echo PAGE_TITLE ?></h3>
<pre class="section-login-left-logo">
░░█ ▄▀█ █▀▄▀█ █▀▀ █▀   █▀▄▀█ █▀▀ █░░ █░░ █▀█ █▀█
█▄█ █▀█ █░▀░█ ██▄ ▄█   █░▀░█ ██▄ █▄▄ █▄▄ █▄█ █▀▄
</pre>
            </section>
        </div>
    
        <div class="col-md-8">
            <section class="section-login-right">

                <h3 class="text-center">
                    <?php
                        if ($register) {
                            echo LOGINREG_BUTTON_REGISTER;
                        } else if ($login) {
                            echo LOGINREG_BUTTON_LOGIN;
                        }
                    ?>
                </h3>
                
                <form class="section-login-right-form" method="post">

                    <label for="username" class="form-label text-danger">
                        Username already in use.
                    </label>

                    <input type="text" name="username" class="form-control"
                    maxlength="<?php echo LIMIT_USERNAME; ?>"
                    placeholder="<?php echo LOGINREG_PLACEHOLDER_USERNAME; ?>">

                    <label for="password" class="form-label text-danger">
                        Password incorect.
                    </label>

                    <input type="password" name="password" class="form-control"
                    maxlength="<?php echo LIMIT_PASSWORD; ?>"
                    placeholder="<?php echo LOGINREG_PLACEHOLDER_PASSWORD; ?>">

                    <div class="section-login-right-form-buttons">
                        <a class="btn btn-primary-1" href="#">
                            <?php if ($register) echo LOGINREG_BUTTON_REGISTER; ?>
                            <?php if ($login)    echo LOGINREG_BUTTON_LOGIN; ?>
                        </a>

                        <a
                        href="<?php if ($register) echo "login.php"; if ($login) echo "register.php"; ?>">
                            <?php if ($register) echo LOGINREG_CHANGE_LOGIN; ?>
                            <?php if ($login)    echo LOGINREG_CHANGE_REGISTER; ?>
                        </a>
                    </div>

                </form>

            </section>
        </div>

    </div>
</div>