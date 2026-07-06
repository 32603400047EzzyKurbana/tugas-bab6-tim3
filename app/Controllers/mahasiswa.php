<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function form()
    {
        return view('form_mahasiswa');
    }

    public function submit()
    {
        $nama        = $this->request->getPost('nama');
        $nim         = $this->request->getPost('nim');
        $kelas       = $this->request->getPost('kelas');
        $matakuliah  = $this->request->getPost('matakuliah');
        $dosen       = $this->request->getPost('dosen');
        $asisten     = $this->request->getPost('asisten');

        return "
            <h2>Data Mahasiswa</h2>
            <ul>
                <li>Nama: $nama</li>
                <li>NIM: $nim</li>
                <li>Kelas: $kelas</li>
                <li>Mata Kuliah: $matakuliah</li>
                <li>Dosen Pengampu: $dosen</li>
                <li>Asisten Praktikum: $asisten</li>
            </ul>
        ";
    }
}