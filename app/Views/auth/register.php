<?php
// var_dump($params);
// die;
?>

<?php $this->layout(config('view.layout')); ?>
<?php $this->start('page'); ?>
<body class="body-auth">
  <main class="main" id="top">
    <section class="login">
      <div class="container">
      <div class="form-container" style="padding: 0;">
      <div class="header">
        <h2>Sign up,</h2>
        <p>To the zone of happiness and start the journey now...</p>
      </div>
      <?php if(isset($errors['failed'])) : ?>
                <div class="row">
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $errors['failed']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lable="Close"></button>
                  </div>
                </div>
              <?php endif; ?> 
      <form method="post" action="/register" id="form-register" novalidate class="form">
        <div class="input">
            <div class="form-floating">
                <input type="username"
                      id="reg-user-name"
                      name="username"
                      value="<?= $params['username']??null ?>" class="form-control <?= isset($errors['username'])?'is-invalid':'' ?>" id="floatingInput" placeholder=" "
                  aria-describedby="inputGroup-sizing-sm" required>
                <label for="floatingInput" class="label">Username</label>
                <div class="invalid-feedback">
                      <?= $errors['username']?? null;   ?>
                    </div>
              </div>
          <div class="form-floating ">
            <input type="email" class="form-control <?= isset($errors['email'])?'is-invalid':'' ?>" id="floatingInput"type="email"
                      id="reg-email"
                      name="email"
                      placeholder=" "
                      value="<?= $params['email']??null ?>"
                      required
              aria-describedby="inputGroup-sizing-sm">
            <label for="floatingInput" class="label">Email address</label>
            <div class="invalid-feedback">
                    <?= $errors['email']?? null;   ?>
                    </div>
          </div>
          <div class="form-floating ">
            <input type="password" class="form-control <?= isset($errors['password'])?'is-invalid':'' ?>" type="password"
                      id="reg-pass"
                      value="<?= $params['password']??null ?>"
                      name="password"
                      placeholder=" " required>
            <label for="floatingPassword" class="label">Password</label>
           <div class="invalid-feedback">
                    <?= $errors['password']?? null;   ?>
                    </div>
          </div>
        <div class="form-floating mb-3 ">
            <input type="password" class="form-control <?= isset($errors['confirm_password'])?'is-invalid':'' ?>" id="reg-pass-confirm"
                      value="<?= $params['confirm_password']??null ?>"
                      name="confirm_password"
                      placeholder=" "
                      required>
            <label for="floatingPassword" class="label">Confirm password</label>
            <div class="invalid-feedback">
                    <?= $errors['confirm_password']?? null;   ?>
                    </div>
          </div>
        </div>
        <div class="sub-signup">
          <div class="form-check">
            <input class="form-check-input checkbox-color" type="checkbox" value="" id="flexCheckDefault" />
            <label class="form-check-label" for="flexCheckDefault">
                I agree all statements in <a href="#" style="color:black; font-size:1rem; opacity:.8">Terms of service</a>
            </label>
          </div>
         
        </div>
        
        <button class="btn btn btn-primary login-box" type="submit">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Register <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </button>
        <div class="sign-up">
          <p>Have already an account?</p>
          <a href="login">Login here.</a>
        </div>
      </form>
    </div>
      </div>
    </section>
  </main>
</body>
<?php $this->stop(); ?>