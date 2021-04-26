<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>Register</h3>
        <hr>
        <form class="" action="/register" method="post">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <input type="text" placeholder="First Name" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <input type="text" placeholder="Last Name" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname') ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input type="text" placeholder="Email address" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control" name="password" id="password" value="">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <input type="password" placeholder="Confirm Password" class="form-control" name="password_confirm" id="password_confirm" value="">
              </div>
            </div>
            <?php if (isset($validation)) : ?>
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  <?= $validation->listErrors() ?>
                </div>
              </div>
            <?php endif; ?>
          </div>

          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-outline-dark">Register</button>
            </div>
            <div class="col-12 col-sm-8 text-right">
              <a href="/">Already have an account?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>