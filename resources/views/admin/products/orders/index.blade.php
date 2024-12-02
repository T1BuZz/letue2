<!-- resources/views/admin/orders/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Đơn Hàng</title>
</head>
<body>
    <h1>Quản lý Đơn Hàng</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên Khách Hàng</th>
            <th>Trạng Thái</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ ucfirst($order->status) }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
