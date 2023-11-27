<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function __construct(){
        $this->categories = new Category();
    }
    function index(){
        return view('category')->with(['categories'=>Category::all()]);
    }
    function save_categories(Request $request){
        $data = [
            'ProductName' => $request->ProductName,
            'Description' => $request->Description,
            'Price' => $request->Price,
            'QuantityInStock' => $request->QuantityInStock,
        ];
        $this->categories->saveCategories($data);
        return back();
    }
    function delete_categories($id){
        $this->categories->deleteCategories($id);
        return back();
    }
    function update_categories($id){
        $categories = $this->categories->updateCategories($id);
        return view('update_categories', compact('categories'));
    }
    function save_updated_categories(Request $request){
        $data = [
            'ProductName' => $request->update_product_name,
            'Description' => $request->update_description,
            'Price' => $request->update_price,
            'QuantityInStock' => $request->update_quantityinstock,
        ];
        $this->categories->updatedCategories($data, $request->id);
        return redirect()->route('category');
    }
}
