<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('home', [
            'title' => 'Home',
            'active' => 'home',
            'carousel' => $products->skip(0)->take(3),
            'products' => $products,
            'categories' => Product::getCategories(),
            'brands' => Product::getBrands(),
            'category' => '',
            'brand' => ''
        ]);
    }

    public function product(){
        $products = Product::all();

        if(request('search')){
            $products = Product::search(request('search'));
        }

        return view('product', [
            'title' => 'Product',
            'active' => 'product',
            'products' => $products,
            'categories' => Product::getCategories(),
            'category' => '',
            'brands' => Product::getBrands(),
            'brand' => ''
        ]);
    }

    public function category($category){
        return view('product',[
            'title' => "Product By Category : $category",
            'active' => "Category",
            'products' => Product::findByCategory($category),
            'categories' => Product::getCategories(),
            'category' => $category,
            'brands' => Product::getBrands(),
            'brand' => ''
        ]);
    }

    public function brand($brand){
        return view('product',[
            'title' => "Product By Brand : $brand",
            'active' => "Brand",
            'products' => Product::findByBrand($brand),
            'categories' => Product::getCategories(),
            'brand' => $brand,
            'brands' => Product::getBrands(),
            'category' => '',
        ]);
    }

    public function detail($id){
        $product = Product::findById($id);

        return view('detail',[
            'title' => $product->name,
            'active' => "Detail Product",
            'product' => $product,
            'categories' => Product::getCategories(),
            'brands' => Product::getBrands(),
            'category' => '',
            'brand' => ''
        ]);
    }
}
