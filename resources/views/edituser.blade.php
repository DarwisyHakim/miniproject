{{View:: make('title')}}
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Billing</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a>
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="{{$users->image}}" width="220" height="200" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload-->
                     <div class="card-body">
                     <form action="upload?rid={{ Request::get('rid') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <input type="submit" value="Upload">
                    </form>
                </div>
                   
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="useredit?rid={{ Request::get('rid') }}" method="post">
        @csrf
                        <!-- Form Group (username)-->
                         <div class="col-md-6">
                               <label for="exampleInputName1" class="form-label">Full Name</label>
              <input maxlength="100" value="{{$users->name}}" type="text" class="form-control mb-3" name="fullname" id="exampleInputName1" placeholder="" value="" required>
            </div>
                        <!-- Form Row-->
   
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                 <label for="exampleInputEmail1" class="form-label">Email</label>
              <input maxlength="100" value="{{$users->email}}" type="email" class="form-control mb-3" name="email" id="exampleInputEmail1" placeholder="" value="" required>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
              <input maxlength="50" value="{{$users->password}}" type="text" class="form-control" name="password" id="exampleInputPassword1" placeholder="" value="" required>
                        </div>
                        <!-- Save changes button-->
                       <button type="submit" onclick="testalert()" class="btn btn-primary">Update</button>
        <button type="button" onclick="javascript:history.back()" class="btn btn-secondary"> Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{View:: make('footer')}}

<script>
function testalert() {
  alert("Successfully Made Changes");
}
</script>
