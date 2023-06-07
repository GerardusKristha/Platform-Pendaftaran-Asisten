<?php
namespace App\Controllers;

use App\Models\AsistenModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class AsistenController extends BaseController
{
    public function index()
    {
        $model = model(AsistenModel::class);
        $data =
            [
                'mahasiswa' => $model->index()
            ];
        return view('asisten/asistenView', $data);
    }
    public function simpan()
    {
        helper('form');

        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('/asisten/simpan');
        }
        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'nim',
            'nama',
            "praktikum",
            "ipk"
        ]);
        // Mengakses Model untuk menyimpan data
        $model = model(AsistenModel::class);
        $model->simpan($post);
        return view('/asisten/success');

    }

    public function update()
    {
        helper('form');

        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('/asisten/update');
        }
        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'nim',
            'nama',
            "praktikum",
            "ipk"
        ]);
        // Mengakses Model untuk menyimpan data
        $model = model(AsistenModel::class);

        if ($model->find($post['nim']) == null) {
            return view('/asisten/update');

        }

        $model->where('NIM', $post['nim'])->set(['NAMA' => $post['nama'], 'PRAKTIKUM' => $post['praktikum'], 'IPK' => $post['ipk']])->update();
        return view('/asisten/success');
    }

    public function delete()
    {
        if (!$this->request->is('post')) {
            return view('/asisten/delete');
        }

        $post = $this->request->getPost([
            'nim'
        ]);

        $model = model(AsistenModel::class);
        $model->where('NIM', $post['nim'])->delete($post['nim']);

        return view('/asisten/success');
    }

    public function search()
    {
        if(!$this->request->is('post'))
        {
            return view('/asisten/search');
        }
        $nim = $this->request->getPost(['key']);

        $model = model((AsistenModel::class));
        $asisten = $model->ambil($nim['key']);

        $data = ['hasil'=> $asisten];
        return view('asisten/search',$data);
    }
}
?>