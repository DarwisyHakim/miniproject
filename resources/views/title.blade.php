<html>
<head>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <!-- <link href="/bootstrap/headers/headers.css" rel="stylesheet">-->

    <title>Mini Project</title>
</head>

 <div class="b-example-divider"></div>

  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/mainpage" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="/userlist" class="nav-link px-2 text-white">Userlist</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
	

        <div class="text-end">
            @if (session()->has('user'))
            <a type="submit"  href="/editmyuser?rid={{session()->get('user')->id}}" class="btn btn-outline-light me-2">Profile</a>
            @else

          <a type="submit"  data-toggle="dropdown" href="#" class="btn btn-outline-light me-2">Login</a>
            <div class="dropdown-menu login-form">
		<form action="login" method="post">
            @csrf
					   <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                <label for="input Email"> Email Address</label>
            </div>
					   <div class="form-floating">
						<div class="clearfix">
							<a href="#" class="float-right text-muted"><small>Forgot?</small></a>
						</div>                            
  <div class="form-floating ">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" />
                <label for="inputPassword"> Password</label>
            </div>
					</div>
					 <button class="mb-4 w-100 btn btn-lg btn-primary" type="submit">Log In</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
				</form>					
			</div>		
            @endif

            @if (session()->has('user'))
            <a type="submit"  href="/logout" class="btn btn-warning">Log Out</a>
            @else
          <a type="submit"  href="/register" class="btn btn-warning">Sign-up</a>
            @endif
        </div>
      </div>
    </div>
  </header>
<body>


<!--TITLE BLADE-->
