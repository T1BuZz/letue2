@extends('layouts.app')

@section('title', 'Trang chủ - Cửa hàng quần áo')

@section('content')
    <header>
        <h1>Chào mừng đến với cửa hàng quần áo</h1>
        <nav>
            <a href="/">Trang chủ</a>
            <a href="/products">Sản phẩm</a>
        </nav>
    </header>

    <section>
        <h2>Giới thiệu cửa hàng</h2>
        <p>Chúng tôi cung cấp các sản phẩm quần áo chất lượng với giá cả hợp lý.</p>
    </section>

    <footer>
        <p>&copy; 2024 Cửa hàng quần áo</p>
    </footer>
@endsection
