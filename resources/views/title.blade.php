<html>
<head>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
          <a type="submit"  href="/login" class="btn btn-outline-light me-2">Login</a>
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
