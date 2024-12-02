@extends('layouts.app')

@section('title', 'Sản phẩm - Cửa hàng quần áo')

@section('content')
    <header>
        <h1>Sản phẩm</h1>
        <nav>
            <a href="/">Trang chủ</a>
            <a href="/products">Sản phẩm</a>
        </nav>
    </header>

    <section>
        <h2>Danh sách sản phẩm</h2>
        <div class="product-list">
            @foreach ($products as $product)
                <div class="product-item">
                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" />
                    <h3>{{ $product['name'] }}</h3>
                    <p>{{ number_format($product['price']) }} VND</p>
                    <button>Thêm vào giỏ</button>
                </div>
            @endforeach
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Cửa hàng quần áo</p>
    </footer>
@endsection
