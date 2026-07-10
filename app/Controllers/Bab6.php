<?php

namespace App\Controllers;

class Bab6 extends BaseController
{
    private function getCatatan()
    {
        $catatan = session()->get('bab6_catatan');

        if ($catatan === null) {
            $catatan = [
                [
                    'id' => 1,
                    'judul' => 'Membuat Repository GitHub',
                    'tanggal' => '2026-07-06',
                    'kategori' => 'Project',
                    'isi' => 'Tim 3 membuat repository GitHub untuk menyimpan project CRUD CodeIgniter 4.'
                ],
                [
                    'id' => 2,
                    'judul' => 'Upload Project CI4',
                    'tanggal' => '2026-07-06',
                    'kategori' => 'Tugas',
                    'isi' => 'Project diupload ke GitHub menggunakan perintah git add, git commit, dan git push.'
                ],
                [
                    'id' => 3,
                    'judul' => 'Dokumentasi Contributors',
                    'tanggal' => '2026-07-06',
                    'kategori' => 'GitHub',
                    'isi' => 'Screenshot grafik contributors diambil melalui menu Insights > Contributors pada repository GitHub.'
                ]
            ];

            session()->set('bab6_catatan', $catatan);
        }

        return $catatan;
    }

    private function saveCatatan($catatan)
    {
        session()->set('bab6_catatan', $catatan);
    }

    public function index()
    {
        $data = [
            'catatan' => $this->getCatatan()
        ];

        return view('bab6/index', $data);
    }

    public function tambah()
    {
        return view('bab6/tambah');
    }

    public function simpan()
    {
        $catatan = $this->getCatatan();

        $idBaru = 1;

        if (!empty($catatan)) {
            $idTerakhir = max(array_column($catatan, 'id'));
            $idBaru = $idTerakhir + 1;
        }

        $catatan[] = [
            'id' => $idBaru,
            'judul' => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
            'kategori' => $this->request->getPost('kategori'),
            'isi' => $this->request->getPost('isi')
        ];

        $this->saveCatatan($catatan);

        return redirect()->to(base_url('bab6'))->with('pesan', 'Data catatan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $catatan = $this->getCatatan();
        $dataEdit = null;

        foreach ($catatan as $item) {
            if ($item['id'] == $id) {
                $dataEdit = $item;
                break;
            }
        }

        if ($dataEdit === null) {
            return redirect()->to(base_url('bab6'))->with('pesan', 'Data tidak ditemukan.');
        }

        return view('bab6/edit', ['catatan' => $dataEdit]);
    }

    public function update($id)
    {
        $catatan = $this->getCatatan();

        foreach ($catatan as $key => $item) {
            if ($item['id'] == $id) {
                $catatan[$key] = [
                    'id' => $id,
                    'judul' => $this->request->getPost('judul'),
                    'tanggal' => $this->request->getPost('tanggal'),
                    'kategori' => $this->request->getPost('kategori'),
                    'isi' => $this->request->getPost('isi')
                ];
                break;
            }
        }

        $this->saveCatatan($catatan);

        return redirect()->to(base_url('bab6'))->with('pesan', 'Data catatan berhasil diupdate.');
    }

    public function hapus($id)
    {
        $catatan = $this->getCatatan();

        $catatan = array_filter($catatan, function ($item) use ($id) {
            return $item['id'] != $id;
        });

        $catatan = array_values($catatan);

        $this->saveCatatan($catatan);

        return redirect()->to(base_url('bab6'))->with('pesan', 'Data catatan berhasil dihapus.');
    }
}
