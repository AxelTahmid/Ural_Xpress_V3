<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="card">
        <article class="card-body">
          <h4 class="card-title text-center mb-4 mt-1">Sign in</h4>
          <hr>
          <p class="text-success text-center">Enter Your Credentials</p>
          <?php if (session()->get('success')) : ?>
            <div class="alert alert-success" role="alert">
              <?= session()->get('success') ?>
            </div>
          <?php endif; ?>
          <form class="" action="/" method="post">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>" placeholder="something@example.com" type="email">
              </div> <!-- input-group.// -->
            </div> <!-- form-group// -->
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password">
              </div> <!-- input-group.// -->
            </div> <!-- form-group// -->
            <?php if (isset($validation)) : ?>
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  <?= $validation->listErrors() ?>
                </div>
              </div>
            <?php endif; ?>
            <div class="form-group">
              <button type="submit" class="btn btn-outline-dark btn-block"> Login </button>
            </div> <!-- form-group// -->
            <p class="text-center"><a href="/register" class="btn">Don't have an account??</a></p>
          </form>
        </article>
      </div><!-- card.// -->
    </div>
  </div>
</div>