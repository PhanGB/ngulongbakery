<main>
    <form action="<?=$base_url?>/handle-register" method="POST" class="register-form">
        <h4 class="register-title">Đăng ký</h4>
        <?php if(isset($_SESSION['register-error']['unknown'])): ?>
            <div class="register-errors">
                <ul>
                    <li><?=$_SESSION['register-error']['unknown']?></li>
                </ul>
            </div>
        <?php unset($_SESSION['register-error']);
            endif; ?>
        <div class="full-name__form">
            <div class="form-group form-group__half">
                <label for="lastName" class="form-label">HỌ:</label>
                <input id="lastName" name="lastname" rules="required" type="text" class="form-control" value="<?=isset($_POST['lastname']) ? $_POST['lastname'] : ''?>" />
                <div class="form-message"></div>
            </div>
            <div class="form-group form-group__half">
                <label for="firstName" class="form-label">TÊN:</label>
                <input id="firstName" name="firstname" rules="required" type="text" class="form-control" value="<?=isset($_POST['firstname']) ? $_POST['firstname'] : ''?>" />
                <div class="form-message"></div>
            </div>
        </div>
        <div class="form-group form-group__full">
            <label for="email" class="form-label">EMAIL:</label>
            <input type="email" id="email" name="email" rules="required|email" class="form-control" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>" />
            <div class="form-message"><?=(isset($_SESSION['register-error']['email'])) ? $_SESSION['register-error']['email'] : ''?></div>
        </div>
        <div class="form-group form-group__full">
            <label for="password" class="form-label">MẬT KHẨU:</label>
            <div class="password-wrapper">
                <input
                    type="password"
                    name="password"
                    rules="required|min:8|passwordComplexity"
                    id="password"
                    class="form-control"
                    value="<?=isset($_POST['password']) ? $_POST['password'] : ''?>"
                />
                <button type="button" class="toggle-password" onclick="togglePassword('password', this)"><i class="fa-solid fa-eye-slash"></i></button>
            </div>
            <div class="form-message"></div>
        </div>
        <div class="form-group form-group__full">
            <label for="repassword" class="form-label">NHẬP LẠI MẬT KHẨU:</label>
            <div class="password-wrapper">
                <input
                    type="password"
                    name="repassword"
                    rules="required"
                    id="repassword"
                    class="form-control"
                    value="<?=isset($_POST['repassword']) ? $_POST['repassword'] : ''?>"
                />
                <button type="button" class="toggle-password" onclick="togglePassword('repassword', this)"><i class="fa-solid fa-eye-slash"></i></button>
            </div>
            <div class="form-message"><?=(isset($_SESSION['register-error']['repassword'])) ? $_SESSION['register-error']['repassword'] : ''?></div>
        </div>
        <?php 
            if(isset($_SESSION['register-error'])) {
                unset($_SESSION['register-error']);
            } 
        ?>
        <div class="register-action">
            <button class="register-btn">Đăng ký</button>
            <a href="<?=$base_url?>/login" class="login-title">
                Bạn đã có tài khoản?
                <span class="login-title__link">Đăng nhập</span>
            </a>
        </div>
    </form>
</main>
<!-- End main -->