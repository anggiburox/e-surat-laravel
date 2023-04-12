<?php

namespace App\Http\Controllers;
use App\Models\UsersModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Auth extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        return view('pages/auth/login');
    }

    public function forgot()
    {  
        return view('pages/auth/lupa_password');
    }

    public function login(Request $request){  
        
        $post = request()->all();
        $user = UsersModel::where('Username', $post['username'])->first();

        if ($user) {
                $admin = UsersModel::where('ID_User',$user->ID_User)->first();
                if ($post['password'] == $user->Password) {
                    $params = [
                        'islogin'   => true,
                        'username'     => $admin->Username,
                        'password' =>$admin->Password
                    ];
                    $request->session()->put($params);
                        return redirect()->to('/admin/dashboard'); 
                } else { 
                    return redirect()->back()->with('error', 'Password salah!');
                }
            }else{
                return redirect()->back()->with('error', 'Username salah!');
            }
    }
    
    public function updatelupapassword(Request $request){
        $user = UsersModel::where('username', $request->username)->first();
        if ($user) {
            // jika username ditemukan
            // update data users
            DB::table('users')->where('Username',$request->username)->update([
                'Password' => $request->password,
            ]);
            // alihkan halaman ke halaman lupa_password
            return redirect('lupa_password')->withSuccess('Password berhasil diperbarui');
        } else {
            // jika username tidak ditemukan
            return back()->with('error', 'Username tidak ditemukan');
        }
    }

    public function logout(){
        Session::forget('islogin');
        Session::forget('username');
        Session::forget('password');
        Session::flush();
        return redirect()->to('/');
    }
}