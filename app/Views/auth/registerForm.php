<form class="row" method="post" action="/register" id="form-register" novalidate>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="reg-user-name">User Name</label>
                    <input
                      class="form-control <?= isset($errors['username'])?'is-invalid':'' ?>"
                      type="username"
                      id="reg-user-name"
                      name="username"
                      value="<?= $params['username']??null ?>"
                      placeholder="Your username"
                      required
                    />
                    <div class="invalid-feedback">
                      <?= $errors['username']?? null;   ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="reg-email">E-mail Address</label>
                    <input
                      class="form-control <?= isset($errors['email'])?'is-invalid':'' ?>"
                      type="email"
                      id="reg-email"
                      name="email"
                      placeholder="example123@gmail.com"
                      value="<?= $params['email']??null ?>"
                      required
                    />
                    <div class="invalid-feedback">
                    <?= $errors['email']?? null;   ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="reg-pass">Password</label>
                    <input
                      class="form-control <?= isset($errors['password'])?'is-invalid':'' ?>"
                      type="password"
                      id="reg-pass"
                      value="<?= $params['password']??null ?>"
                      name="password"
                      placeholder="Password"
                      required
                    />
                    <div class="invalid-feedback">
                    <?= $errors['password']?? null;   ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="reg-pass-confirm">Confirm Password</label>
                    <input
                      class="form-control <?= isset($errors['confirm_password'])?'is-invalid':'' ?>"
                      type="password"
                      id="reg-pass-confirm"
                      value="<?= $params['confirm_password']??null ?>"
                      name="confirm_password"
                      placeholder="Confirm Password"
                      required
                    />
                    <div class="invalid-feedback">
                    <?= $errors['confirm_password']?? null;   ?>
                    </div>
                  </div>
                </div>
                <div class="button">
                  <button class="btn" type="submit">Register</button>
                </div>
                <p class="outer-link">
                  Already have an account? <a href="login.php">Login Now</a>
                </p>
              </form>