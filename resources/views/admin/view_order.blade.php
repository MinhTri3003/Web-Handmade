@extends('admin_layout')
@section('admin_content')


    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Xem chi tiết đơn hàng</p>
        <?php
                $message = Session::get('message');
                if($message){
                    echo '<br>';
                    echo '<span style="color:red">'.$message.'</span> ';
                    Session::put('message',null);
                }
                ?>

        <div class="right__table">
            <div class="right__tableWrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            
                        </tr>
                    </thead>
            
                    <tbody>
                        <tr>
                            <td data-label="Tên khách hàng">{{$order_by_id->customer_name}}</td>
                            <td data-label="Số điện thoại">{{$order_by_id->customer_phone}}</td>
                            <td data-label="Địa chỉ">{{$order_by_id->shipping_address}}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<hr style="size: 4px">

<div class="right">
    <div class="right__content">
        <p class="right__desc">Chi tiết đơn hàng</p>
        <?php
                $message = Session::get('message');
                if($message){
                    echo '<br>';
                    echo '<span style="color:red">'.$message.'</span> ';
                    Session::put('message',null);
                }
                ?>

        <div class="right__table">
            <div class="right__tableWrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng tiền</th>
                            
                        </tr>
                    </thead>
            
                    <tbody>
                        
                        
                        <tr >
                            
                            <td>{{$order_by_id->product_name}}</td>
            <td>{{$order_by_id->product_sales_quantity}}</td>
            <td>{{$order_by_id->product_price}}</td>
            <td>{{$order_by_id->product_price*$order_by_id->product_sales_quantity}}</td>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection