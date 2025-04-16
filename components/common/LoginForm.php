<?php
function renderLoginForm($login_error = '') {
?>
<div class="login-form-container">
    <div class="login-register-form">
        <?php if(!empty($login_error)): ?>
        <div class="alert alert-danger" role="alert" style="color: red; margin-bottom: 15px; padding: 10px; border: 1px solid red;">
            <?php echo $login_error; ?>
        </div>
        <?php endif; ?>
        <form action="backend/authentication.php" method="post">
            <input type="text" name="user-name" placeholder="Username">
            <input type="password" name="user-password" placeholder="Password">
            <div class="button-box">
                <div class="login-toggle-btn">
                    <input type="checkbox">
                    <label>Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" name="login-submit"><span>Login</span></button>
            </div>
        </form>
    </div>
</div>
<?php
}
?> 