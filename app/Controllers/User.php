<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function register()
    {
        return view('user/register');
    }

    public function submitRegister()
    {
        // Ambil data dari form
        $validation = \Config\Services::validation();

    // Ambil data dari form
    $nama = $this->request->getPost('nama');
    $email = $this->request->getPost('email');
    $no_hp = $this->request->getPost('no_hp');
    $password = $this->request->getPost('password');

    // Aturan validasi
    $rules = [
        'nama' => 'required',
        'email' => 'required|valid_email|regex_match[/@/]', // Memastikan email mengandung karakter @
        'no_hp' => 'required',
        'password' => 'required|regex_match[/^(?=\D*\d)(?=\d*\D)/]', // Memastikan password mengandung huruf dan angka
    ];

    // Pesan kesalahan kustom
    $errors = [
        'nama' => [
            'required' => 'Nama wajib diisi.',
        ],
        'email' => [
            'required' => 'Email wajib diisi.',
            'valid_email' => 'Format email tidak valid.',
            'regex_match' => 'Email harus mengandung karakter @.',
        ],
        'no_hp' => [
            'required' => 'Nomor HP wajib diisi.',
        ],
        'password' => [
            'required' => 'Password wajib diisi.',
            'regex_match' => 'Password harus mengandung huruf dan angka.',
        ],
    ];

    // Jalankan validasi
    if (!$validation->setRules($rules, $errors)->run([
        'nama' => $nama,
        'email' => $email,
        'no_hp' => $no_hp,
        'password' => $password,
    ])) {
        // Jika validasi gagal, kirim kembali ke halaman registrasi dengan pesan kesalahan
        return view('user/register', ['validation' => $validation]);
    } else {
        // Jika validasi sukses, simpan data ke database menggunakan model
        $userModel = new UserModel();
        $userModel->save([
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $no_hp,
            'password' => $password,
        ]);

        // Redirect ke halaman login setelah registrasi berhasil
        return redirect()->to('/user/login');
    }
    }

    public function login()
    {
        return view('user/login');
    }

    public function submitLogin()
    {
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $cek = $userModel->get_data($email);

        if ($cek && $cek['email'] == $email && $cek['password'] == $password) {
            session()->set('email', $cek['email']);
            session()->set('nama', $cek['nama']);
            session()->set('id', $cek['id']);
            return redirect()->to(base_url('/'));
        } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('user/login'));
        }
    }

    public function profil()
    {
        return view('user/profil');
    }

    // Method untuk mengupdate profil
    public function updateProfile()
    {

    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('user/login');
    }
}