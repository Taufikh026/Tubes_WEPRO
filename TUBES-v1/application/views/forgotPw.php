    <div class="container">
        <form class="form" id="ForgetPassword">
            <h1 class="form__title">New Password</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="password" id="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" id="confirm-password" class="form__input" autofocus placeholder="Confirm password">
                <div class="form__input-error-message"></div>
            </div>
            <button formaction="login.html" class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="ControllerLogin" id="linkLogin"><br>Already have an account? Sign in</a>
            </p>
        </form>
    </div>