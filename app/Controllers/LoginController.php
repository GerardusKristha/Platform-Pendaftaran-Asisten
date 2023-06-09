<?php
namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login/loginpage');
    }
    public function check()
    {
        $post = $this->request->getPost(['usr', 'pwd']);
        $model = model((LoginModel::class));
        $asisten = $model->ambil($post['usr']);
        if ($asisten == null) {
            return view('login/loginpage', ['eror' => "Username tidak ditemukan"]);
        }

        if ($post['pwd'] == $asisten['Password']) {
            $session = session();
            $session->set('pengguna', $post['usr']);
            $view = new AsistenController;
            return $view->index();
        } else {
            return view('login/loginpage', ['eror' => "Password salah"]);
        }
    }
    public function home()
    {
        $session = session();
        if ($session->has('pengguna')) {
            $item = $session->get('pengguna');
            if ($item == 'admin') {
                return view('asisten/asistenView');
            } else {
                return view('login/loginpage');
            }
        } else {
            return view('login/loginpage');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return view('login/loginpage');
    }
}
?>