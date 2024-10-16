<?php
class user_forms {
    private $errors = array();

    public function sign_up_form($ObjGlob){
        ?>
        <div class="row align-items-md-stretch">
            <div class="col-md-9">
                <div class="h-100 p-5 text-bg-primary rounded-3">
                    <h2>Sign Up</h2>
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Fullname:</label>
                            <input type="text" name="fullname" class="form-control form-control-lg" maxlength="50" id="fullname" placeholder="Enter your name" value="<?php echo (isset($_SESSION["fullname"])) ? $_SESSION["fullname"] : ''; unset($_SESSION["fullname"]); ?>">
                            <?php
                            if (isset($this->errors['nameLetters_err'])) {
                                echo "<span class='invalid'>" . $this->errors['nameLetters_err'] . "</span>";
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="email_address" class="form-label">Email Address:</label>
                            <input type="email" name="email_address" class="form-control form-control-lg" maxlength="50" id="email_address" placeholder="Enter your email address" value="<?php echo (isset($_SESSION["email_address"])) ? $_SESSION["email_address"] : ''; unset($_SESSION["email_address"]); ?>">
                            <?php
                            if (isset($this->errors['email_format_err'])) {
                                echo "<span class='invalid'>" . $this->errors['email_format_err'] . "</span>";
                            }
                            if (isset($this->errors['mailExists_err'])) {
                                echo "<span class='invalid'>" . $this->errors['mailExists_err'] . "</span>";
                            }
                            if (isset($this->errors['mailDomain_err'])) {
                                echo "<span class='invalid'>" . $this->errors['mailDomain_err'] . "</span>";
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" name="username" class="form-control form-control-lg" maxlength="50" id="username" placeholder="Enter your username" value="<?php echo (isset($_SESSION["username"])) ? $_SESSION["username"] : ''; unset($_SESSION["username"]); ?>">
                            <?php
                            if (isset($this->errors['usernameExists_err'])) {
                                echo "<span class='invalid'>" . $this->errors['usernameExists_err'] . "</span>";
                            }
                            if (isset($this->errors['usernameLetters_err'])) {
                                echo "<span class='invalid'>" . $this->errors['usernameLetters_err'] . "</span>";
                            }
                            ?>
                        </div>
                        <button type="submit" name="signup" class="btn btn-warning">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }

    public function verify_code_form($ObjGlob) {
        ?>
        <div class="row align-items-md-stretch">
            <div class="col-md-9">
                <div class="h- 100 p-5 text-bg-primary rounded-3">
                    <h2>Verify Code</h2>
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="ver_code" class="form-label">Verification Code:</label>
                            <input type="number" name="ver_code" class="form-control form-control-lg" maxlength="6" min="100000" max="999999" id="ver_code" placeholder="Enter your verification code" value="<?php echo (isset($_SESSION["ver_code"])) ? $_SESSION["ver_code"] : ''; unset($_SESSION["ver_code"]); ?>">
                            <?php
                            if (isset($this->errors['not_numeric'])) {
                                echo "<span class='invalid'>" . $this->errors['not_numeric'] . "</span>";
                            }
                            if (isset($this->errors['lenght_err'])) {
                                echo "<span class='invalid'>" . $this->errors['lenght_err'] . "</span>";
                            }
                            if (isset($this->errors['ver_code_not_exist'])) {
                                echo "<span class='invalid'>" . $this->errors['ver_code_not_exist'] . "</span>";
                            }
                            if (isset($this->errors['ver_code_expired'])) {
                                echo "<span class='invalid'>" . $this->errors['ver_code_expired'] . "</span>";
                            }
                            ?>
                        </div>
                        <button type="submit" name="verify_code" class="btn btn-warning">Verify Code</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }

    public function validateInput($input) {
        // Implement input validation logic here
    }

    public function setError($error) {
        $this->errors[] = $error;
    }

    public function getErrors() {
        return $this->errors;
    }
}