<section>
      <a href="#container" id="title" data-rellax-speed="7"></a>
    </section>
    <div class="container">
        <form class="form" id="login" action="<?php base_url()?>ControllerRegister/Register" method="post">
            <h1 class="form__title">Register</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" name="username" autofocus placeholder="Username" require>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="password" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="confirmpassword" autofocus placeholder="Confirm Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="checkBox" />
                    <label class="form-check-label text-secondary" for="checkBox">
                        I agree all statements in <a href="#!" class="text-body"><u class="text-secondary">Terms of service</u></a>
                    </label>
            </div><br>
            <button class="form__button" type="submit">Continue</button>

        </form>
    </div>