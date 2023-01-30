@extends('admin_layout')
@section('admin_content')
<div class="right">
    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Thêm danh mục</p>
        
        <div class="right__formWrapper">
            <form action="{{URL::to('/save-category-product')}}" method="post">
                {{ csrf_field() }}
                <div class="right__inputWrapper">
                    <label for="title">Tiêu đề</label>
                    <input type="text" name="category_product_name" placeholder="Tiêu đề">
                </div>
                <div class="right__inputWrapper">
                    <label for="desc">Mô tả</label>
                    <textarea name="category_product_desc" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Hiển thị</label>
                    <select name="category_product_status" class="custom-select">
                        <option value="1">Hiện</option>
                        <option value="0">Ẩn</option>
                      </select>
                </div>
                 <br>  
                <button name="add_category_product" class="btn" type="submit">Thêm Danh Mục</button>
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
