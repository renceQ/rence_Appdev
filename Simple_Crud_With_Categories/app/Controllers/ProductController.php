<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\CategoryModel; 

class ProductController extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();

        return view('product/index', $data);
    }

    public function create()
    {
        $categoryModel = new CategoryModel(); 
        $data['categories'] = $categoryModel->findAll(); 

        return view('product/create', $data);
    }

    public function store()
    {
        $productModel = new ProductModel();
        
        
        $data = [
            'Product_Name' => $this->request->getPost('Product_Name'),
            'Product_Description' => $this->request->getPost('Product_Description'),
            'category_health' => $this->request->getPost('category_health'), 
            'Product_Quantity' => $this->request->getPost('Product_Quantity'),
            'Product_Price' => $this->request->getPost('Product_Price'),
            'Created_at' => date('Y-m-d H:i:s'),
            'Updated_at' => date('Y-m-d H:i:s'),
        ];

        $productModel->insert($data);

        return redirect()->to('/');
    }

    public function edit($id)
    {
        $productModel = new ProductModel();
        $categoryModel = new CategoryModel(); 
        $data['product'] = $productModel->find($id);

       
        $data['categories'] = $categoryModel->findAll(); 
        return view('product/edit', $data);
    }

    public function update($id)
{
    $productModel = new ProductModel();
    
    
    $existingProduct = $productModel->find($id);

    if (!$existingProduct) {
        
        return redirect()->to('/');
    }
    
    
    $data = [
        'Product_Name' => $this->request->getPost('Product_Name'),
        'Product_Description' => $this->request->getPost('Product_Description'),
        'category_health' => $this->request->getPost('category_health'), 
        'Product_Quantity' => $this->request->getPost('Product_Quantity'),
        'Product_Price' => $this->request->getPost('Product_Price'),
    ];


    $updatedProduct = array_merge($existingProduct, $data);


    $productModel->update($id, $updatedProduct);

    return redirect()->to('/');
}


    public function delete($id)
    {
        $productModel = new ProductModel();
        $productModel->delete($id);

        return redirect()->to('/');
    }
}
