@extends('admin_layout')
@section('admin_content')
<div class="right">
    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Cập nhập danh mục</p>
        
        <div class="right__formWrapper">
            @foreach ($edit_category_product as $key =>$edit_value)
            <form action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
                {{ csrf_field() }}
                <div class="right__inputWrapper">
                    
                        
                    
                    <label for="title">Tên danh mục</label>
                    <input value="{{$edit_value->category_name}}" type="text" name="category_product_name" >
                </div>
                <div class="right__inputWrapper">
                    <label for="desc">Mô tả</label>
                    <textarea  name="category_product_desc" id="" cols="30" rows="10" >{{$edit_value->category_desc}}</textarea>
                </div>
                
                 <br>  
                <button name="update_category_product" class="btn" type="submit">Cập Nhập Danh Mục</button>
                
                <?php
        $message = Session::get('message');
        if($message){
            echo '<br>';
            echo '<span style="color:red">'.$message.'</span> ';
            Session::put('message',null);
        }
        ?>
        @endforeach
            </form>
        </div>
    </div>
</div>

@endsection
