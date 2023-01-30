@extends('admin_layout')
@section('admin_content')
            
<div class="right">
    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Cập nhập sản phẩm</p>
        <div class="right__formWrapper">
            @foreach ($edit_product as $key => $pro)
                
           
            <form action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="right__inputWrapper">
                    <label for="title">Tên sản phẩm</label>
                    <input name="product_name" type="text" value="{{($pro->product_name)}}">
                </div>
                <div class="right__inputWrapper">
                    <label for="p_category">Danh mục sản phẩm</label>
                    <select name="product_cate">
                        @foreach ($cate_product as $key => $cate)
                        @if($cate->category_id==$pro->category_id)
                        <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                        @else
                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="right__inputWrapper">
                    <label for="p_category">Thể loại sản phẩm</label>
                    <select name="product_brand">
                        @foreach ($brand_product as $key => $brand)
                        @if($brand->brand_id==$pro->brand_id)
                        <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                        @else
                        <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                
                <div class="right__inputWrapper">
                    <label for="image">Hình ảnh sản phẩm</label>
                    <input name="product_image" type="file">
                    <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100" width="100" alt="">
                </div>
                
                <div class="right__inputWrapper">
                    <label for="title">Giá sản phẩm</label>
                    <input name="product_price" type="text" value="{{($pro->product_price)}}">
                </div>
                <div class="right__inputWrapper">
                    <label for="desc">Mô tả sản phẩm</label>
                    <textarea name="product_desc" id="" cols="30" rows="10" >{{($pro->product_desc)}}</textarea>
                </div>
                <div class="right__inputWrapper">
                    <label for="desc">Nội dung sản phẩm</label>
                    <textarea name="product_content" id="" cols="30" rows="10" >{{($pro->product_content)}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Hiển thị</label>
                    <select name="product_status" class="custom-select">
                        <option value="1">Hiện</option>
                        <option value="0">Ẩn</option>
                      </select>
                </div>
                 <br> 
                
             <button class="btn" type="submit" name="update_product">Cập nhập sản phẩm</button>
             
            </form>
            @endforeach
        </div>
    </div>
</div>
</div>
</div>

    
@endsection