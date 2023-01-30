@extends('admin_layout')
@section('admin_content')
            
<div class="right">
    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Thêm sản phẩm</p>
        <?php
        $message = Session::get('message');
        if($message){
            echo '<br>';
            echo '<span style="color:red">'.$message.'</span> ';
            Session::put('message',null);
        }
        ?>
        <div class="right__formWrapper">
            <form action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="right__inputWrapper">
                    <label for="title">Tên sản phẩm</label>
                    <input name="product_name" type="text" placeholder="Tên sản phẩm">
                </div>
                <div class="right__inputWrapper">
                    <label for="p_category">Danh mục sản phẩm</label>
                    <select name="product_cate">
                        @foreach ($cate_product as $key =>$cate)
                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                        
                        @endforeach
                    </select>
                </div>
                <div class="right__inputWrapper">
                    <label for="p_brand">Thể loại sản phẩm</label>
                    <select name="product_brand">
                        @foreach ($brand_product as $key =>$brand)
                        <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                        
                        @endforeach
                    </select>
                </div>
                
                <div class="right__inputWrapper">
                    <label for="image">Hình ảnh sản phẩm</label>
                    <input name="product_image" type="file">
                </div>
                
                <div class="right__inputWrapper">
                    <label for="title">Giá sản phẩm</label>
                    <input name="product_price" type="text" placeholder="Giá sản phẩm">
                </div>
                <div class="right__inputWrapper">
                    <label for="desc">Mô tả sản phẩm</label>
                    <textarea name="product_desc" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                </div>
                <div class="right__inputWrapper">
                    <label for="desc">Nội dung sản phẩm</label>
                    <textarea name="product_content" id="" cols="30" rows="10" placeholder="Nội dung sản phẩm"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Hiển thị</label>
                    <select name="product_status" class="custom-select">
                        <option value="1">Hiện</option>
                        <option value="0">Ẩn</option>
                      </select>
                </div>
                 <br> 
                
             <button class="btn" type="submit" name="add_product">Thêm sản phẩm</button>
             
            </form>
        </div>
    </div>
</div>
</div>
</div>

    
@endsection