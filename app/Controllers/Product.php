<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Product_model;

class Product extends Controller {

    public function index()   {
        $model = new Product_model();
        $data['product'] = $model->getProduct();
        // var_dump($data);
        // die();
        $data['title']   = 'Product - Sevima';
        echo view('header.php',$data);
        echo view('product_view',$data);
        echo view('footer');
    }

    public function add_new() {
        echo view('header',$data);
        echo view('add_product_view');
        echo view('footer');
    }

    public function save()  {
        $model = new Product_model();
        $data = array(
            'product_name'  => $this->request->getPost('product_name'),
            'product_price' => $this->request->getPost('product_price'),
        );
        $model->saveProduct($data);
        return redirect()->to('/product');
    }

    public function edit($id)  {
        $model = new Product_model();
        $data['product'] = $model->getProduct($id)->getRow();
        echo view('header',$data);
        echo view('edit_product_view', $data);
        echo view('footer');
    }

    public function update() {
        $model = new Product_model();
        $id = $this->request->getPost('product_id');
        $data = array(
            'product_name'  => $this->request->getPost('product_name'),
            'product_price' => $this->request->getPost('product_price'),
        );
        $model->updateProduct($data, $id);
        return redirect()->to('/product');
    }

    public function delete($id) {
        $model = new Product_model();
        $model->deleteProduct($id);
        return redirect()->to('/product');
    }
}
