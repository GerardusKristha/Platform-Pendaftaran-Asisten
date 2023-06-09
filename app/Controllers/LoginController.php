<?php
namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login/loginPage');
    }
    public function check()
    {
        $post = $this->request->getPost(['usr', 'pwd']);
        $model = model((LoginModel::class));
        $asisten = $model->ambil($post['usr']);
        if ($asisten == null) {
            return view('login/loginPage', ['eror' => "Username tidak ditemukan"]);
        }

        if ($post['pwd'] == $asisten['Password']) {
            $session = session();
            $session->set('pengguna', $post['usr']);
            $view = new AsistenController;
            return $view->index();
        } else {
            return view('login/loginPage', ['eror' => "Password salah"]);
        }
    }
    public function home()
    {
        $post = $this->request->getPost(['usr', 'pwd']);
        $session = session();
        if ($session->has('pengguna')) {
            $item = $session->get('pengguna');
            if ($item == $post['usr']) {
                return view('asisten/asistenView');
            } else {
                return view('login/loginPage');
            }
        } else {
            return view('login/loginPage');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return view('login/loginPage');
    }
}
?>