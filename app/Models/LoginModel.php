<?php
namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['Username', 'Password'];

    public function index()
    {
        return $this->findAll();
    }
    public function ambil($usr)
    {
        return $this->where(['Username' => $usr])->first();
    }
}
?>