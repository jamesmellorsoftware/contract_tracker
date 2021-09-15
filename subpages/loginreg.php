<?php
$register = ($page === "register.php") ? true : false;
$login    = ($page === "login.php")    ? true : false;
?>

<main class="section section-login">

    <div class="row section-row section-login-row">

        <div class="col-md-4">
            <section class="section-left section-login-left">
                <h3><?php echo PAGE_TITLE ?></h3>
<pre class="section-left-logo section-login-left-logo">
<?php include("snippets/logo.php"); ?>
</pre>
            </section>
        </div>
    
        <div class="col-md-8">
            <section class="section-right section-login-right">

                <h3 class="text-center">
                    <?php
                        if ($register) {
                            echo LOGINREG_BUTTON_REGISTER;
                        } else if ($login) {
                            echo LOGINREG_BUTTON_LOGIN;
                        }
                    ?>
                </h3>
                
                <div class="section-login-right-form" method="post">

                    <label for="username" class="form-label">
                        <?php echo LOGINREG_LABEL_USERNAME; ?>
                    </label>
                    <input type="text" id="username" name="username" class="form-control"
                    maxlength="<?php echo LIMIT_USERNAME; ?>"
                    placeholder="<?php echo LOGINREG_PLACEHOLDER_USERNAME; ?>">
                    <p class="error error-username text-danger invisible"></p>

                    <label for="password" class="form-label">
                        <?php echo LOGINREG_LABEL_PASSWORD; ?>
                    </label>
                    <input type="password" id="password" name="password" class="form-control"
                    maxlength="<?php echo LIMIT_PASSWORD; ?>"
                    placeholder="<?php echo LOGINREG_PLACEHOLDER_PASSWORD; ?>">
                    <p class="error error-password text-danger invisible"></p>

                    <div class="section-login-right-form-buttons">
                        <a id="loginreg_submit" href="#"
                        class="btn btn-primary-1
                        <?php
                            if ($register) {
                                echo "register";
                            } else if ($login) {
                                echo "login";
                            }
                        ?>">
                            <?php if ($register) echo LOGINREG_BUTTON_REGISTER; ?>
                            <?php if ($login)    echo LOGINREG_BUTTON_LOGIN; ?>
                        </a>

                        <a class="section-login-right-form-buttons-change"
                        href="<?php if ($register) echo "login.php"; if ($login) echo "register.php"; ?>">
                            <?php if ($register) echo LOGINREG_CHANGE_LOGIN; ?>
                            <?php if ($login)    echo LOGINREG_CHANGE_REGISTER; ?>
                        </a>
                    </div>

                    </div>

            </section>
        </div>

    </div>
</main>

<script src="js/loginreg.js"></script>