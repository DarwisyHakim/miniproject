{{View:: make('title')}}
{{View:: make('menu')}}
<div>
    <table id="paginationFirstLast'" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <caption> List of users</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Password</th>
                <th>Created Date</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr>
                <th> {{$loop->iteration}}</th>
                <td> {{$user->name}}</td>
                <td> {{$user->email}}</td>
                <td> {{$user->password}}</td>
                <td>
                    {{date('D,d F Y',strtotime($user->created_at)) }}
                    <td>
                        <a href="/editmyuser?rid={{$user->id}}">Edit</a>
                        <a href="/userdelete?rid={{$user->id}}">Delete</a>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div class="pagination">
        {{$users->links()}}
    </div>
</div>

{{View:: make('footer')}}
