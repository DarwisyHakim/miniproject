
@extends('header')
@section('login')
<div class="text-center">

    <main class="form-signin">
        <form action="login" method="post">
            @csrf
            <img class="mb-4" src="\bootstrap\Images\Logo.png" alt="" width="220" height="200" />
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                <label for="input Email"> Email Address</label>
            </div>

            <div class="form-floating ">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" />
                <label for="inputPassword"> Password</label>
            </div>

            <button class="mb-4 w-100 btn btn-lg btn-primary" type="submit">Log In</button>

            <button class="w-75 btn btn-lg btn-secondary" type="button" onclick="window.location.href='/register'">Sign-Up</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022–2022</p>
        </form>

    </main>



</div>


@endsection
