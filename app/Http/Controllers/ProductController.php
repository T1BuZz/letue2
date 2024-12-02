<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Đây là dữ liệu giả lập. Bạn có thể thay thế bằng dữ liệu lấy từ cơ sở dữ liệu.
        $products = [
            ['name' => 'Áo thun', 'price' => 200000, 'image' => 'images/anh1.jpg'],
            ['name' => 'Quần jean', 'price' => 350000, 'image' => 'images/anh2.jpg'],
            ['name' => 'Áo sơ mi', 'price' => 300000, 'image' => 'images/anh3.jpg'],
            ['name' => 'Áo Phao', 'price' => 400000, 'image' => 'images/anh4.jpg'],
            ['name' => 'Áo BomBer', 'price' => 500000, 'image' => 'images/anh5.jpg'],
            ['name' => 'Bộ Ngủ', 'price' => 250000, 'image' => 'images/anh6.jpg'],
        ];

        return view('products.index', compact('products'));
    }
}
