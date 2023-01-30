@extends('admin_layout')
@section('admin_content')
<div class="right">
    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Xem danh mục</p>
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
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th>Mô tả</th>
                            <th>Hiện thị</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach ($all_category_product as $key =>$cate_pro)
                            
                        
                        <tr>
                            <td data-label="STT">{{ $cate_pro->category_id}}</td>
                            <td data-label="Tên danh mục">{{ $cate_pro->category_name}}</td>
                            <td data-label="Mô tả">{{ $cate_pro->category_desc}}</td>
                            <td data-label="Hiện thị">
                                <?php
                                if($cate_pro->category_status==0){
                                    ?>
                                    <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}"> <span><i class="fas fa-thumbs-down"></i></span></a>
                                <?php
                                }
                                else {
                                    ?>
                                    <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"> <span><i class="fas fa-thumbs-up"></i></span></a>
                                <?php
                                }
                                ?>
                            </td>
                            <td data-label="Sửa" class="right__iconTable"><a  href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}"><img src="{{asset('public/frontend/admin/assets/icon-edit.svg')}}" alt=""></a></td>
                            <td data-label="Xoá" class="right__iconTable"><a onclick="return confirm('Bạn có chắc chắn xóa không?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}"><img src="{{asset('public/frontend/admin/assets/icon-trash-black.svg')}}" alt=""></a></td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection