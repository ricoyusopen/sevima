<?php 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\M_comment;
 
class Comment extends BaseController {

	public function getComment()	{
		$model = new M_comment();
		$data['komentar'] = $model->getComment();
        // var_dump($data);
        // die();
       return $berita;
	}   
 
    public function add_new()    {
        $data['title'] ='Berita - Sevima';
        $data['date'] = date("l, Y/m/d");
        echo view('header', $data);
        echo view('add_berita_view', $data);
        echo view('footer');
    }

	// public function create(){
	// 	return view('form_upload');
	// }

    public function edit($id)  {
        $model = new M_berita();
        $data['berita'] = $model->getBerita($id)->getRow();
        echo view('header',$data);
        echo view('edit_berita_view', $data);
        echo view('footer');
    }

 
	public function save()	{       
		if (!$this->validate([
			'title' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
            'description' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'image' => [
				'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,2048]',
				'errors' => [
					'uploaded' => 'Harus Ada Image yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]
 
			]
            ])) {
                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->back()->withInput();
		    }
 
		$berita = new M_berita();
		$dataBerita = $this->request->getFile('image');
		$fileName = $dataBerita->getRandomName();
		$berita->insert([
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image'       => $fileName,
            'author'      => $session->get('user_name')           		
		]);       
		$dataBerita->move('uploads/image/', $fileName);

		session()->setFlashdata('success', 'Berita Berhasil Di Submit');
		return redirect()->to(base_url('berita'));
	}

    public function detail($id)  {
        $model = new M_berita();
        $data['berita'] = $model->getBerita($id)->getRow();
        echo view('header');
        echo view('show_berita', $data);
        echo view('footer');
    }

    
 
}