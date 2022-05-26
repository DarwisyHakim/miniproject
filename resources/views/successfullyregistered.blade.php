{{View:: make('title')}}
@section('login')
 <div class="b-example-divider"></div>
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Successfully Registered</h1>
        <p class="col-lg-10 fs-4">Log in now to continue and enjoy our full benefits</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
          <form class="p-4 p-md-5 border rounded-3 bg-light" action="login" method="post">
              @csrf
              <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                  <label for="input Email">Email address</label>
              </div>
              <div class="form-floating mb-3">
                  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" />
                  <label for="inputPassword">Password</label>
              </div>
              <div class="checkbox mb-3">
                  <label>
                      <input type="checkbox" value="remember-me" /> Remember me
                  </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Log In</button>
              <hr class="my-4" />
              <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
          </form>
      </div>
    </div>
  </div>
{{View:: make('footer')}}
