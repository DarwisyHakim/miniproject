<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Validator;



class UserController extends Controller
{
    function login(Request $req)
    {
        $user=User::where(['email'=>$req->email])->first();
        //$password=User::where(['password'=>$req->password])->first();

        $email=$req->input('email');
        $password=$req->input('password');

        $checkLogin = DB::table('users')->where(['email'=>$email,'password'=>$password])->get();
        if(count ($checkLogin) >0)
        {
            $req->session()->put('user',$user);
            return redirect('/?success=true');
        }
        else
        {
            return"Username or password not matched";
        }
    }

    function getuser(Request $req)
    {
        $data=DB::table('users')
            ->where('id',$req->rid)
            ->first();

        return view('edituser',['users'=>$data]);
    }

    function getuser2(Request $req)
    {
        $data=DB::table('users')
            ->where('id',$req->rid)
            ->first();

        return view('edituser',['users'=>$data]);
    }


    function edituser(Request $req)
    {
        DB::table('users')->where('id',$req->rid)
            ->update(array(
            'name'=>$req->fullname,
            'password'=>$req->password,
            'email'=>$req->email,
            'updated_at'=>now()
            ));

        return redirect('editmyuser?rid='.$req->rid.'&success=1');

    }

    function register(Request $req)
    {
       // try{
            DB::insert('insert into users
                (name,email,password,created_at) values(?,?,?,?)',
            [$req->fullname,$req->email,$req->password, now()]);



            return redirect('successfullyregistered');
    }

    function listuser()
    {
        return view('viewuser',['users'=>DB::table('users')->paginate(3)]);
    }

    function deleteuser(Request $req)
    {
        DB::table('users')->where('id',$req->rid)->delete();
        return "Successfully deleted";
    }

    function search(Request $req)
    {
        return view('viewuser',['users'=>DB::table('users')
        ->select(DB::raw('id,name,email,password,created_at'))
        ->where('email','like','%'. $req->search .'%')
        ->orWhere('name','like','%'. $req->search .'%')->paginate(10)]
        );
    }

    function upload(Request $req)
    {
        if(request()->has('image')){
            $imageuploaded=request()->file('image');
            $imagename=time().'.'.$imageuploaded->getClientOriginalExtension() ;
            $imagepath=public_path('/images/');
            $imageuploaded->move($imagepath,$imagename);

            DB::table('users')->where('id',$req->rid)
            ->update(array(
            'image'=>'/images/'.$imagename,
               ));
        }
        return redirect()->back();
    }


}
