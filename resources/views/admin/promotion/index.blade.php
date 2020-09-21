@extends('layouts.admin.admin')

@section('content')
    <!-- Main content -->
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li> Quản lý quảng cáo</li>
        </ol>

        <div class="container-fluid">

            <div class="animated fadeIn">

                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-edit"></i> Danh sách quảng cáo
                        <small style="float: right">
                            <button type="button" onclick="Promotion.addNew()" class="btn btn-primary" data-toggle="modal" data-target="#add_new_promotion"><i class="fa fa-plus"></i>&nbsp; Thêm</button>
                        </small>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Mã</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Ngày tạo</th>
                                <th class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody id="category-body">
                                @foreach($promotions as $index=>$promotion)
                                    <tr>
                                        <td class="text-center">{{ ++$index }}</td>
                                        <td class="text-center">{{ $promotion->name }}</td>
                                        <td class="text-center">{{ $promotion->code }}</td>
                                        <td class="text-center">
                                            <div> <label style="color: white; background-color: {{ $promotion->status ? "#2196f3" : "#e0e0e0" }}; padding: 2px 2px; border-radius: 5px; "> {{ $promotion->status ? 'Hoạt động' : 'Không hoạt động' }} </label> </div>
                                        </td>
                                        <td class="text-center">{{ $promotion->created_at }}</td>
                                        <td class="text-center">
                                            <button id="btn_item_edit" onclick="Promotion.edit(`{{$promotion->id}}`, `{{$promotion->name}}`, `{{$promotion->code}}`, `{{$promotion->status}}`)" class="btn btn-info" data-toggle="modal" data-target="#add_new_promotion">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button id="btn_item_remote" onclick="Promotion.remove(`{{$promotion->id}}`)" class="btn btn-danger">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

                {!! $promotions->links() !!}
            </div>

        </div>
    </main>



    <div class="modal" id="add_new_promotion">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm mới quảng cáo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="needs-validation" name="promotion_form" action="" method="post" id="promotion_form" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="card-body">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" id="promotion_id">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Tên quảng cáo</label>
                                        <input type="text" class="form-control" required id="promotion_name" name="name" placeholder="Tên Quảng cáo">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="code">Mã quảng cáo</label>
                                        <input type="text" class="form-control" required id="promotion_code" name="code" placeholder="Mã Quảng cáo">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="status">Trạng thái</label>
                                    <select class="form-control" id="promotion_status" name="status">
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Không hoạt động</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btn-save" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let Promotion = {
            isValid: true,
            init: function () {

            },
            validate: function () {
                let name = $('#promotion_name').val();
                let code = $('#promotion_code').val();

                if(!name) {
                    $('#promotion_name').focus();
                    return false;
                }

                if(!code) {
                    $('#promotion_code').focus();
                    return false;
                }

                return true;
            },
            edit : function(id, name, code, status){
                $(".modal-title").text("Sửa quảng cáo");
                $("#promotion_name").val(name);
                $("#promotion_code").val(code);
                $("#promotion_status").val(status);
                $("#btn-save").text("Sửa");
                $("#promotion_id").val(id);
            },
            addNew : function(){
                $(".modal-title").text("Thêm mới quảng cáo");
                $("#promotion_name").val('');
                $("#promotion_code").val('');
                $("#promotion_status").val(1);
                $("#btn-save").text("Thêm");
                $("#promotion_id").val(0);
            },
            remove: function(id){
                let _token = '{{csrf_token()}}'
                let result = confirm('Bạn chắc chắn muốn xóa!')
                if (result){
                    Promotion.postAjax('{{ route('admin_remove_promotion') }}', {id, _token}, function (response) {
                        console.log(response)
                        if (response.data) {
                            location.reload()
                        }else {
                            alert('Không xóa được')
                        }
                    });
                }
            },
            postAjax: function (url, data, callback) {
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: data,
                    success: function (res) {
                        if (callback) {
                            callback(res);
                        }
                    }
                });
            }
        }

        $(function () {
            $("#promotion_form").submit(function(e) {
                if(Promotion.validate()) {
                    let id = $('#promotion_id').val();
                    let code = $('#promotion_code').val();
                    let name = $('#promotion_name').val();
                    let status = $('#promotion_status').val();
                    let _token = '{{csrf_token()}}'
                    Promotion.postAjax('{{ route('admin_update_promotion') }}', {id, code, _token, name, status}, function (response) {
                        console.log(response)
                        if (response.status === 0) {
                            location.reload()
                        }else{
                            alert(response.message)
                        }
                    });
                }
                return false
            });
        })
    </script>
@endsection
