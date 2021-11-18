<?php $this->layout(config('view.layout')); ?>
<?php $this->start('page'); ?>
<body class="body-auth">
  <main class="main" id="top">
    <section class="login">
      <div class="container">
        <div class="form-container">
          <div class="header">
            <h2>Welcome,</h2>
            <p>To keep connect with us please login with your persional information...</p>
          </div>
          <form method="post" action="/login" class="form">
            <div class="input">
              <?php if (!empty($errors)) : ?>
                <div class="alert alert-danger">
                  <ul>
                    <?php
                    foreach ($errors as $err) {
                      echo "<li>$err</li>";
                    }
                    ?>
                  </ul>

                </div>
              <?php endif; ?>
              <div class="form-floating">
                <input type="username" class="form-control" id="floatingInput" name="username" id="username" required aria-describedby="inputGroup-sizing-sm" placeholder=" ">
                <label for="floatingInput" class="label">Username</label>
              </div>
              <div class="form-floating mb-3 ">
                <input type="password" class="form-control" id="floatingPassword" name="password" id="password" required placeholder=" ">
                <label for="floatingPassword" class="label">Password</label>
              </div>
            </div>
            <div class="sub-login">
              <div class="form-check">
                <input class="form-check-input checkbox-color" type="checkbox" name="remember_me" value="remember_password" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  Remember me
                </label>
              </div>
              <a href="#">Forgot password?</a>
            </div>

            <button class="btn btn btn-primary login-box" type="submit">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              LOGIN <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </button>
            <div class="sign-up">
              <p>Don't have an account?</p>
              <a href="register">Register now.</a>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
</body>

<?php $this->stop(); ?>