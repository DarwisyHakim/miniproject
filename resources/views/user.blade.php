logged in as {{session()->get('user')->email}}
| <a href="/logout">Log out</a> | <a href="/editmyuser?rid={{session()->get('user')->id}}">Edit</a>
