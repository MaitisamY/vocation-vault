<div class="account-popup">
    <div class="account-popup-container">
        <button class="close-btn"><i class="fa-solid fa-xmark"></i></button>

        <div class="login-or-signup-selector">
            <button id="login" class="active" type="button">Login</button>
            <button id="signup" type="button">Sign Up</button>
        </div>

        <div class="login-container">
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Email" />
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password" />
                <span><i class="fa-solid fa-eye"></i></span>
            </div>

            <p>
                <input type="checkbox" name="agreement" id="agreement" />
                <label for="remember">
                    I accept and agree to the 
                    <a href="#">Terms of Service</a> and the <a href="{{ route('privacy-policy') }}">Privacy Policy</a> 
                    of the Vocation Vault Platform.
                </label>
            </p>
        </div>
    </div>
</div>