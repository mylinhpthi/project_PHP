<?php
// var_dump($params);
// die;
?>

<?php $this->layout(config('view.layout')); ?>
<?php $this->start('page'); ?>
<div class="account-login section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
            <div class="register-form">
              <?php if(isset($errors['failed'])) : ?>
                <div class="row">
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $errors['failed']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lable="Close"></button>
                  </div>
                </div>
              <?php endif; ?>  
              <div class="title">
                <h3>No Account? Register</h3>
                <p>
                  Registration takes less than a minute but gives you full
                  control over your orders.
                </p>
              </div>
             <?php
              $this->insert("auth/registerForm", ['errors'=>$errors??[],'params'=>$params??[]]);
             ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->stop(); ?>