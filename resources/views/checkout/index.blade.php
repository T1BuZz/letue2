@extends('layouts.app')

@section('content')
<h1>Thanh toán</h1>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Tổng cộng</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cart as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ number_format($item['price']) }} VND</td>
                <td>{{ $item['quantity'] }}</td>
                <td>{{ number_format($item['subtotal']) }} VND</td>
            </tr>
        @endforeach
    </tbody>
</table>

<h3>Tổng giá trị đơn hàng: {{ number_format($total) }} VND</h3>

<h4>Phương thức thanh toán:</h4>
<form action="{{ route('checkout.process') }}" method="POST">
    @csrf
    <label>
        <input type="radio" name="payment_method" value="cod" required> Thanh toán khi nhận hàng
    </label><br>
    <label>
        <input type="radio" name="payment_method" value="online" required> Thanh toán qua thẻ
    </label><br>
    <button type="submit">Xác nhận thanh toán</button>
</form>
@endsection
