<?php

class contactController extends Controller
{
    private $contactmodels;

    public function __construct()
    {
        $this->contactmodels = $this->model('contact');
    }

    public function index()
    {
        $data = [
            'title' => 'contact',
            'contact' => $this->contactmodels->getAll(),
        ];

        $this->view('pages/admin/contact/list', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah data contact',
        ];
        $this->view('pages/admin/contact/create', $data);
    }

    public function store()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $namacontact = $_POST['nama_contact'];
                $hargaPack = $_POST['nomor_hp'];


                $data = [
                    'nama_contact' => $namacontact,
                    'nomor_hp' => $hargaPack,

                ];
                $result = $this->contactmodels->store($data);

                if ($result) {
                    Message::setFlash('success', 'Data berhasil ditambahkan');
                    $this->redirect('contact');
                } else {
                    Message::setFlash('success', 'Data gagal ditambahkan');
                    $this->redirect('contact');
                }

            } else {
                echo 'Permintaan tidak valid.';
            }
        } catch (\Exception $e) {
            Message::setFlash('error', 'Terjadi kesalahan: ', $e->getMessage());
            $this->redirect('contact');
        }
    }

    public function show($id)
    {
        try {
            $url = $_SERVER['REQUEST_URI'];
            $result = explode('/', $url);

            $id = end($result);
            $result = $this->contactmodels->getbyid($id);
            $data = [
                'title' => 'Edit contact',
                'contact' => $result,
            ];
            $this->view('pages/admin/contact/edit', $data);
        } catch (\Exception $e) {
            Message::setFlash('error', 'Terjadi kesalahan: ', $e->getMessage());
            $this->redirect('dashboard');
        }
    }

    public function update($id)
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $namacontact = $_POST['nama_contact'];
                $hargaPack = $_POST['nomor_hp'];
                $data = [
                    'nama_contact' => $namacontact,
                    'nomor_hp' => $hargaPack,

                    'id_contact' => $id,
                ];

                $result = $this->contactmodels->updateDatacontact($data);

                if ($result) {
                    Message::setFlash('success', 'Data berhasil ditambahkan');
                    $this->redirect('contact');
                } else {
                    Message::setFlash('success', 'Data gagal ditambahkan');
                    $this->redirect('contact');
                }
            }

        } catch (\Exception $e) {
            echo 'Error';
            $this->redirect('contact');
        }
    }

    public function destroy()
    {
        try {
            $url = $_SERVER['REQUEST_URI'];
            $result = explode('/', $url);

            $id = end($result);
            $data = $this->contactmodels->getbyid($id); {
                $result = $this->contactmodels->destroy($id);
                if ($result) {
                    echo 'data berhasil terhapus';
                    $this->redirect('contact');
                } else {
                    echo 'data gagal dihapus';
                }
            }
        } catch (\Exception $e) {
            echo 'Error';
            $this->redirect('dashboard');
        }
    }
}

