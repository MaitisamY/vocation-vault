<div class="account-popup">
    <div class="account-popup-container">
        <button class="close-btn"><i class="fa-solid fa-xmark"></i></button>

        <div class="login-or-signup-selector">
            <button id="login-selector" class="active" type="button">Login</button>
            <button id="signup-selector" type="button">Sign Up</button>
        </div>

        <div id="login-container" class="login-container">
            <form id="login-form" action="" method="POST">
                <div class="input-group">
                    <input type="email" name="login-email" id="login-email" placeholder="Email" />
                </div>
                <div class="input-group">
                    <input type="password" name="login-password" id="login-password" placeholder="Password" />
                    <span id="toggle-login-password"><i class="fa-solid fa-eye-slash"></i></span>
                </div>

                <p>
                    <input type="checkbox" name="login-agreement" id="login-agreement" />
                    <label for="login-agreement">
                        I accept and agree to the
                        <a href="#">Terms of Service</a> and the <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                        of the Vocation Vault Platform.
                    </label>
                </p>

                <div class="input-group">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>

        <div id="signup-container" class="signup-container">
            <form id="signup-form" action="" method="POST">
                <div class="input-group">
                    <input type="text" name="signup-name" id="signup-name" placeholder="Name" />
                </div>
                <div class="input-group">
                    <input type="email" name="signup-email" id="signup-email" placeholder="Email" />
                </div>
                <div class="input-group">
                    <input type="password" name="signup-password" id="signup-password" placeholder="Password" />
                    <span id="toggle-signup-password"><i class="fa-solid fa-eye-slash"></i></span>
                </div>

                <p>
                    <input type="checkbox" name="signup-agreement" id="signup-agreement" />
                    <label for="signup-agreement">
                        I accept and agree to the
                        <a href="#">Terms of Service</a> and the <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                        of the Vocation Vault Platform.
                    </label>
                </p>

                <div class="input-group">
                    <button type="submit">Signup</button>
                </div>
            </form>
        </div>
    </div>
</div>
