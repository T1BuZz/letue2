@extends('layouts.admin')

@section('content')
<h1>Chi tiết Đơn Hàng #{{ $order->id }}</h1>

<h3>Thông tin khách hàng</h3>
<ul>
    <li>Tên: {{ $order->customer_name }}</li>
    <li>Email: {{ $order->customer_email }}</li>
    <li>Điện thoại: {{ $order->customer_phone }}</li>
    <li>Địa chỉ: {{ $order->address }}</li>
</ul>

<h3>Thông tin đơn hàng</h3>
<ul>
    <li>Tổng cộng: {{ number_format($order->total) }} VND</li>
    <li>Trạng thái: {{ ucfirst($order->status) }}</li>
</ul>

<form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
    @csrf
    <label for="status">Cập nhật trạng thái:</label>
    <select name="status" id="status" required>
        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Đang chờ xử lý</option>
        <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Đã hoàn thành</option>
        <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}>Đã hủy</option>
   
