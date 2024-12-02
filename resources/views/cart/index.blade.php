@extends('layouts.app')

@section('content')
<h1>Giỏ hàng</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Tổng cộng</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cart as $id => $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ number_format($item['price']) }} VND</td>
                <td>{{ $item['quantity'] }}</td>
                <td>{{ number_format($item['subtotal']) }} VND</td>
                <td>
                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<h3>Tổng cộng: {{ number_format($total) }} VND</h3>
<a href="{{ route('checkout.index') }}">Thanh toán</a>
@endsection
