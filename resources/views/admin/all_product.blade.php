@extends('admin_layout')
@section('admin_content')

 <div class="right__content">
    <div class="right__title">Bảng điều khiển</div>
    <p class="right__desc">Xem sản phẩm</p>
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
                        <th>Hình ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Thể loại</th>
                        <th>Hiện thị</th>
                        
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($all_product as $key =>$pro)
                    <tr>
                        
                        <td data-label="Tên sản phẩm">{{$pro->product_name}}</td>
                        <td data-label="Hình ảnh sản phẩm"><img src="public/uploads/product/{{$pro->product_image}}" height="100" width="200"></td>
                        <td data-label="Giá sản phẩm">{{$pro->product_price}}</td>
                        <td data-label="Danh mục">{{$pro->category_name}}</td>
                        <td data-label="Thể loại">{{$pro->brand_name}}</td>
                        <td data-label="Hiện thị">
                            <?php
                            if($pro->product_status==0){
                                ?>
                                <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"> <span><i class="fas fa-thumbs-down"></i></span></a>
                            <?php
                            }
                            else {
                                ?>
                                <a href="{{URL::to('/active-product/'.$pro->product_id)}}"> <span><i class="fas fa-thumbs-up"></i></span></a>
                            <?php
                            }
                            ?>
                        </td>
                        <td data-label="Sửa" class="right__iconTable"><a  href="{{URL::to('/edit-product/'.$pro->product_id)}}"><img src="{{asset('public/frontend/admin/assets/icon-edit.svg')}}" alt=""></a></td>
                        <td data-label="Xoá" class="right__iconTable"><a onclick="return confirm('Bạn có chắc chắn xóa không?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}"><img src="{{asset('public/frontend/admin/assets/icon-trash-black.svg')}}" alt=""></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    
@endsection