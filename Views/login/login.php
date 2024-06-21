<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image">
            <img src="./public/img/images/login/login.jpg" alt="Signup" style=" width: 450px; height: 450px; object-fit: contain;">
            </div>
            <div class="col-lg-6 px-3">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h3 text-gray-900 mb-4 text-uppercase">Đăng nhập</h1>
                </div>
                <?php if (isset($_SESSION['msg1'])) { ?>
                  <div class="alert alert-danger">
                    <strong>Thông báo: </strong> <?php echo $_SESSION['msg1'] ?>
                  </div>
                <?php }; unset($_SESSION['msg1']); ?>
                <form class="user" action="?act=account&process=login_act" method="post">
                  <div class="form-group mb-3">
                    <input name="username" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Tài khoản">
                  </div>
                  <div class="form-group mb-3">
                    <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mật khẩu">
                  </div>
                  <div class="form-group mb-3">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input" id="customCheck">
                      <label class="custom-control-label" for="customCheck">Lưu tài khoản</label>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-user btn-block" type="submit">
                    Đăng nhập
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="?act=account&process=forgot">Quên mật khẩu?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="?act=account&process=signup">Tạo tài khoản!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>