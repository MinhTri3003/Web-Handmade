@extends('admin_layout')
@section('admin_content')
<div class="right">
    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Xem Đơn Hàng</p>
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
                            <th>ID đơn hàng</th>
                            <th>Tên người đặt</th>
                            <th>Tổng giá tiền</th>
                            <th>Tình trạng</th>
                        
                            <th>Chi tiết đơn hàng</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach ($all_order as $key =>$order)
                            
                        
                        <tr>
                            <td data-label="ID">{{ $order->order_id}}</td>
                            <td data-label="Tên người đặt">{{ $order->customer_name}}</td>
                            <td data-label="Tổng giá tiền">{{ $order->order_total}}</td>
                            <td data-label="Trình trạng">{{ $order->order_status}}</td>
                            
                            <td data-label="Sửa" class="right__iconTable"><a  href="{{URL::to('/view-order/'.$order->order_id)}}"><img src="{{asset('public/frontend/admin/assets/icon-edit.svg')}}" alt=""></a></td>
                            <td data-label="Xoá" class="right__iconTable"><a onclick="return confirm('Bạn có chắc chắn xóa không?')" href="{{URL::to('/delete-order/'.$order->order_id)}}"><img src="{{asset('public/frontend/admin/assets/icon-trash-black.svg')}}" alt=""></a></td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection