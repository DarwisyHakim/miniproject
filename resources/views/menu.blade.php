

<form action="userlist" method="post">
    @csrf
   <br/> <input value="{{request()->input('search')}}" name="search" type="search" placeholder="Search User">
    <button type="submit">Search</button>
</form>
