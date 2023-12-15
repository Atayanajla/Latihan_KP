<?php

namespace App\Controllers;
use App\Models\PerangkatModel;

class Perangkat extends BaseController
{
    public function index()
    {
        return view('crud/index');
    }

    public function add()
    {
        
        return view('crud/add');
    }

    public function submitAdd()
    {
        $perangkatModel = new PerangkatModel();

        $gambar = $this->request->getFile('gambar');
        $gambar->move('img', $gambar->getRandomName());

        $data = [
            'nama' => $this->request->getPost('nama'),
            'nama_perangkat' => $this->request->getPost('nama_perangkat'),
            'tipe_perangkat' => $this->request->getPost('tipe_perangkat'),
            'stock' => $this->request->getPost('stock'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $gambar->getName(),
            'tanggal_input' => $this->request->getPost('tanggal_input')
        ];

        $perangkatModel->insert($data);

        return redirect()->to('/crud/list');
    }

    public function list()
    {
        $perangkatModel = new PerangkatModel();
        $data['perangkat'] = $perangkatModel->findAll();

        return view('crud/list', $data);
    }

    public function detail($id)
    {
        $perangkatModel = new PerangkatModel();
        $data['perangkat'] = $perangkatModel->find($id);

        return view('crud/detail', $data);
    }

    public function delete($id)
    {
        $perangkatModel = new PerangkatModel();
        $perangkatModel->delete($id);

        return redirect()->to('/crud/list');
    }

    public function edit($id)
    {
        $perangkatModel = new PerangkatModel();
        $data['perangkat'] = $perangkatModel->find($id);

        return view('crud/edit', $data);
    }
    
    public function update($id)
    {
        $perangkatModel = new PerangkatModel();
        $data = $perangkatModel->find($id);
        // dd($data['gambar']);
        $file_path = 'img/' . $data['gambar'];
        unlink($file_path);
        
        $gambar = $this->request->getFile('gambar');
        $gambar->move('img', $gambar->getRandomName());
        
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nama_perangkat' => $this->request->getPost('nama_perangkat'),
            'tipe_perangkat' => $this->request->getPost('tipe_perangkat'),
            'stock' => $this->request->getPost('stock'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $gambar->getName(),
            'tanggal_input' => $this->request->getPost('tanggal_input')
        ];

        $perangkatModel->update($id, $data);

        return redirect()->to('/Perangkat/detail/' . $id);
    }
    
    public function datatabel()
    {
        
        $perangkatModel = new PerangkatModel();
        
        $data['perangkat'] = $perangkatModel->findAll();

        return view('/crud/datatabel', $data);
    }
}