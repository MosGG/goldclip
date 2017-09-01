<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use DB;
use App\Http\Requests;

use App\Http\Controllers\Controller;

class AdminActionController extends Controller
{
    public function appLoginTest(Request $request){

        $username = $request->input('username');
        $pwd = md5($request->input('password'));

        $admins = DB::select("select * from admins where username = '$username'");
        if (sizeof($admins) == 1) {
            if ($admins[0]->password == $pwd) {
                return '{"success":true}';
            }
        }

        return '{"success":false}';
    }


    public function login(Request $request)
    {
        $username = $request->input('username');
        $pwd = md5($request->input('pwd'));

        $admins = DB::select("select * from admins where username = '$username'");

        if (sizeof($admins) == 1) {
            if ($admins[0]->password == $pwd) {
                $request->session()->put('admin', $username);
                $request->session()->put('adminLevel', $admins[0]->level);
                return Redirect::to('/admin-home');
            }
        }
        return Redirect::to('/admin-login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return Redirect::to('/admin-login');
    }

    public function adminAdd(Request $request)
    {
        $username = $request->input('username');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('pwd');
        $level = $request->input('level');

        DB::table('admins')->insert([
            ['username' => $username, 'phone' => $phone, 'email' => $email, 'password' => md5($password), 'level' => $level]
        ]);

        $admins = DB::select('select * from admins');
        $admins = json_encode($admins);
        return '{"success":true}';
    }

    public function adminEdit(Request $request)
    {
        $id = $request->input('id');
        $username = $request->input('username');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('pwd');
        $level = $request->input('level');

        if(strlen($password) != 32){
            $password = md5($password);
        }

        DB::table('admins')
            ->where('id', $id)
            ->update(
                ['username' => $username, 'phone' => $phone, 'email' => $email, 'password' => $password, 'level' => $level]
        );

        return '{"success":true}';
    }

    public function adminDelete(Request $request)
    {
        $id = $request->input('id');

        DB::table('admins')->where('id', '=', $id)->delete();

        return '{"success":true}';
    }
}
