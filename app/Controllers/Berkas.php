<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_berkas;

class Berkas extends BaseController {

	public function index()	{
		helper('form');
		$model = new M_berkas();
		if (!$this->validate([]))   {
            $data['validation'] = $this->validator;
            $data['gambar'] = $model->getGambar();
            echo view('berkas_view',$data);
        }
		//$data['berkas'] = $berkas->findAll();
		//return view('berkas_view', $data);
	}

	public function create()	{
        $data['title'] = 'Berkas - Sevima';
        echo view('header', $data);
		echo view('upload_berkas_view');
        echo view('footer');
	}

	public function proses() {
        $model = new M_berkas();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('berkas');
        }
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
 
        if ($validation == FALSE) {
            
            return $this->index();
        } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/images/');
        $data = array(
            'judul'  => $this->request->getPost('judul'),
            'gambar' => $upload->getName()
        );
        $model->simpan_gambar($data);
        return redirect()->to('./upload')->with('berhasil', 'Data Berhasil di Simpan');
        }
    }

    public function save()	{
		if (!$this->validate([
			'keterangan' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'berkas' => [
				'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]
 
			]
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
 
		$berkas = new M_berkas();
		$dataBerkas = $this->request->getFile('berkas');
		$fileName = $dataBerkas->getRandomName();
		$berkas->insert([
			'berkas' => $fileName,
			'keterangan' => $this->request->getPost('keterangan')
		]);
		$dataBerkas->move('uploads/berkas/', $fileName);
		session()->setFlashdata('success', 'Berkas Berhasil diupload');
		return redirect()->to(base_url('berkas'));
	}
}