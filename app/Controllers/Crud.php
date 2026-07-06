<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $mahasiswa;

    public function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }

    public function index()
    {
        $all = $this->mahasiswa->orderBy('nim', 'ASC')->findAll();

        $data = [
            'title'     => 'Data Mahasiswa',
            'mahasiswa' => $all,
        ];

        return view('CRUD/View', $data);
    }

    public function tambah()
    {
        return view('CRUD/Upload', [
            'title' => 'Tambah Data Mahasiswa'
        ]);
    }

    public function simpan()
    {
        $nim         = trim((string) $this->request->getPost('nim'));
        $nama        = trim((string) $this->request->getPost('nama'));
        $prodi       = trim((string) $this->request->getPost('prodi'));
        $universitas = trim((string) $this->request->getPost('universitas'));
        $noHp        = trim((string) $this->request->getPost('no_hp'));

        if ($nim === '' || $nama === '' || $prodi === '' || $universitas === '' || $noHp === '') {
            return redirect()->back()->withInput()->with('error', 'Semua data wajib diisi.');
        }

        $data = [
            'nim'         => $nim,
            'nama'        => $nama,
            'prodi'       => $prodi,
            'universitas' => $universitas,
            'no_hp'       => $noHp,
        ];

        $this->mahasiswa->insert($data);

        return redirect()->to(base_url('/crud'))->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function edit($nim)
    {
        $mahasiswa = $this->mahasiswa->find($nim);

        if (!$mahasiswa) {
            return redirect()->to(base_url('/crud'))->with('error', 'Data mahasiswa tidak ditemukan.');
        }

        $data = [
            'title'     => 'Edit Data Mahasiswa',
            'mahasiswa' => $mahasiswa,
        ];

        return view('CRUD/Edit', $data);
    }

    public function update()
    {
        $nimLama     = trim((string) $this->request->getPost('nim_lama'));
        $nimBaru     = trim((string) $this->request->getPost('nim'));
        $nama        = trim((string) $this->request->getPost('nama'));
        $prodi       = trim((string) $this->request->getPost('prodi'));
        $universitas = trim((string) $this->request->getPost('universitas'));
        $noHp        = trim((string) $this->request->getPost('no_hp'));

        if ($nimLama === '' || $nimBaru === '' || $nama === '' || $prodi === '' || $universitas === '' || $noHp === '') {
            return redirect()->back()->withInput()->with('error', 'Semua data wajib diisi.');
        }

        $data = [
            'nim'         => $nimBaru,
            'nama'        => $nama,
            'prodi'       => $prodi,
            'universitas' => $universitas,
            'no_hp'       => $noHp,
        ];

        $this->mahasiswa->where('nim', $nimLama)->set($data)->update();

        return redirect()->to(base_url('/crud'))->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function hapus($nim)
    {
        $this->mahasiswa->delete($nim);

        return redirect()->to(base_url('/crud'))->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}