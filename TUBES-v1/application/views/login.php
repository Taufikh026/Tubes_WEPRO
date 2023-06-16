    <section>
      <a href="#container" id="title" data-rellax-speed="7"></a>
    </section>

    <div class="container">
        <form class="form" id="login" action="<?php base_url()?>ControllerLogin/LoginCheck" method="post">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" name="username" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="password" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="ControllerRegister" id="linkCreateAccount"><br>Don't have an account? Create account</a>
            </p>
            
        </form>
    </div>