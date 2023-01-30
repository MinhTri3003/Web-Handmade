@extends('admin_layout')
@section('admin_content')
<div class="right">
    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Thêm Thể Loại Theo Mùa</p>
        
        <div class="right__formWrapper">
            <form action="{{URL::to('/save-brand-product')}}" method="post">
                {{ csrf_field() }}
                <div class="right__inputWrapper">
                    <label for="title">Tiêu đề</label>
                    <input type="text" name="brand_product_name" placeholder="Tên Thể Loại Theo Mùa">
                </div>
                <div class="right__inputWrapper">
                    <label for="desc">Mô tả</label>
                    <textarea name="brand_product_desc" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Hiển thị</label>
                    <select name="brand_product_status" class="custom-select">
                        <option value="1">Hiện</option>
                        <option value="0">Ẩn</option>
                      </select>
                </div>
                 <br>  
                <button name="add_brand_product" class="btn" type="submit">Thêm Thể Loại Theo Mùa</button>
                <?php
        $message = Session::get('message');
        if($message){
            echo '<br>';
            echo '<span style="color:red">'.$message.'</span> ';
            Session::put('message',null);
        }
        ?>
            </form>
        </div>
    </div>
</div>

@endsection
