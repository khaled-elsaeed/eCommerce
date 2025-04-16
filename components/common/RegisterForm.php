<?php
function renderRegisterForm($register_error = '') {
?>
<div class="login-form-container">
    <div class="login-register-form">
        <?php if(!empty($register_error)): ?>
        <div class="alert alert-danger" role="alert" style="color: red; margin-bottom: 15px; padding: 10px; border: 1px solid red;">
            <?php echo $register_error; ?>
        </div>
        <?php endif; ?>
        <form action="backend/authentication.php" method="post">
            <input type="text" name="user-name" placeholder="Username">
            <input type="password" name="user-password" placeholder="Password">
            <input name="user-email" placeholder="Email" type="email">
            <div class="button-box">
                <button type="submit" name="register-submit"><span>Register</span></button>
            </div>
        </form>
    </div>
</div>
<?php
}
?> 