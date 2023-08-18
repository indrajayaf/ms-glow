<?php

namespace App\Models;

class Product 
{

    public static function all(){

        // $ch = curl_init('https://64cc65872eafdcdc8519cbdf.mockapi.io/products');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch);

        $api_url = 'https://64cc65872eafdcdc8519cbdf.mockapi.io/products';
        // read json file
        $json_data = file_get_contents($api_url);

        // decode json to array
        $response_data = json_decode($json_data);
        return collect($response_data); 
    }

    public static function findByCategory($category){
        $product = static::all();
        return $product->where('category', $category);

    }

    public static function findByBrand($brand){
        $product = static::all();
        return $product->where('brand', $brand);
    }

    public static function findById($id){
        $product = static::all();
        return $product->firstWhere('id', $id);
    }

    public static function getCategories(){
        $product = static::all();
        $categories = [];
        foreach ($product as  $value) {
            $categories[] = $value->category;
        }
        return array_unique($categories);
    }

    public static function getBrands(){
        $product = static::all();
        $brands = [];
        foreach ($product as  $value) {
            $brands[] = $value->brand;
        }
        return array_unique($brands);
    }

    public static function search($search){
        $product = static::all();
        $result = [];
        foreach($product as $item){
            if(stripos($item->name, $search) !== false){
                $result[] = $item;
            } 
        };
        return collect($result);
    }
}
