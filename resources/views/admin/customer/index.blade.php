@extends('layouts.admin.admin')

@section('content')
    <!-- Main content -->
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li> Quản lý khách hàng</li>
        </ol>

        <div class="container-fluid">

            <div class="animated fadeIn">

                <div class="card">
                    <div class="card-header">
                        <strong>Tìm kiếm khách hàng</strong>
                    </div>
                    <div class="card-body">
                        <form id="search-form-promotion" action="" method="get" class="form-horizontal">
                            <div class="row">
                                <div class="form-group row col-md-4">
                                    <label class="col-md-4 col-form-label" for="promotion_id">Quảng cáo</label>
                                    <div class="col-md-8">
                                        <select id="promotion_id" class="form-control" id="search_promotion_id" name="promotion_id">
                                            <option value="0">Tất cả</option>
                                            @foreach ($promotions as $pro) {
                                            <option {{ $request->get('promotion_id', 0) == $pro->id ? 'selected' : '' }} value="{{ $pro->id }}">{{ $pro->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <small style="float: right">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Tìm kiếm</button>
                                </small>

                            </div>
                        </form>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-edit"></i> Danh sách khách hàng
                        <small style="float: right">
                            <button type="button" onclick="Customer.addNew()" class="btn btn-primary" data-toggle="modal" data-target="#add_new_customer"><i class="fa fa-plus"></i>&nbsp; Thêm</button>
                        </small>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Điện thoại</th>
                                <th class="text-center">Địa chỉ</th>
                                <th class="text-center">Số lượng</th>
                                <th class="text-center">Màu sắc</th>
                                <th class="text-center">Ngày tạo</th>
                                <th class="text-center">Ghi chú</th>
                                <th class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody id="category-body">
                            @foreach($customers as $index=>$customer)
                                <tr>
                                    <td class="text-center">{{ ++$index }}</td>
                                    <td class="text-center">
                                        <?php
                                            $txtStatus = '';
                                            $colorStatus = '';
                                            switch ($customer->status){
                                                case 1: {
                                                    $txtStatus = "Mới";
                                                    $colorStatus = "#1E8449";
                                                    break;
                                                }
                                                case 2: {
                                                    $txtStatus = "Đang gọi (Chưa nghe máy)";
                                                    $colorStatus = "#2874A6";
                                                    break;
                                                }
                                                case 3: {
                                                    $txtStatus = "Đã gọi (Cần gọi lại)";
                                                    $colorStatus = "#6C3483";
                                                    break;
                                                }
                                                case 4: {
                                                    $txtStatus = "Không nhận";
                                                    $colorStatus = "#B03A2E";
                                                    break;
                                                }
                                                case 5: {
                                                    $txtStatus = "Đồng ý nhận";
                                                    $colorStatus = "#B7950B";
                                                    break;
                                                }
                                                case 6: {
                                                    $txtStatus = "Đã đóng gói, chờ vận chuyển";
                                                    $colorStatus = "#00897b";
                                                    break;
                                                }
                                                case 7: {
                                                    $txtStatus = "Đã giao cho bên vận chuyển";
                                                    $colorStatus = "#1de9b6";
                                                    break;
                                                }
                                                case 8: {
                                                    $txtStatus = "Hàng bị hoàn trả";
                                                    $colorStatus = "#795548";
                                                    break;
                                                }
                                                case 9: {
                                                    $txtStatus = "Khách đã nhận hàng";
                                                    $colorStatus = "#ffc107";
                                                    break;
                                                }

                                                default:{

                                                }
                                            }
                                        ?>
                                        <span style="background-color: {{$colorStatus}}; color: white; padding: 5px; border-radius: 5px"> {{ $txtStatus }} </span>
                                    </td>
                                    <td class="text-center">{{ $customer->name }}</td>
                                    <td class="text-center">{{ $customer->phone }}</td>
                                    <td class="text-center">{{ $customer->address }}</td>
                                    <td class="text-center">{{ $customer->quantity }}</td>
                                    <td class="text-center">{{ $customer->color }}</td>
                                    <td class="text-center">{{ $customer->created_at }}</td>
                                    <td class="text-center">{{ $customer->description }}</td>
                                    <td class="text-center">
                                        <button id="btn_item_edit" onclick="Customer.edit('{{$customer->id}}', '{{$customer->name}}', '{{$customer->phone}}', '{{$customer->address}}', '{{$customer->status}}', '{{$customer->description}}')" class="btn btn-info" data-toggle="modal" data-target="#add_new_customer">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button id="btn_item_remote" onclick="Customer.remove(`{{$customer->id}}`)" class="btn btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>

                {!! $customers->links() !!}

            </div>

            <div class="animated fadeIn">
                <div class="card-columns cols-2">
                    <div class="card">
                        <div class="card-header">
                            Biểu đồ tỉ lệ chốt sale
                        </div>
                        <div class="card-body">
                            <div class="chart-wrapper">
                                <canvas id="canvas-1"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Biểu đồ tỉ lệ hoàn trả
                        </div>
                        <div class="card-body">
                            <div class="chart-wrapper">
                                <canvas id="canvas-2"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Biểu đồ số lượng
                        </div>
                        <div class="card-body">
                            <div class="chart-wrapper">
                                <canvas id="canvas-3"></canvas>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>




    </main>

    <div class="modal" id="add_new_customer">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm khách hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="needs-validation" name="customer_form" action="" method="post" id="customer_form" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="card-body">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" id="customer_id">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Tên</label>
                                        <input type="text" class="form-control" required id="customer_name" name="name" placeholder="Tên khách hàng">
                                    </div>
                                </div>
                            </div>
                            <!--/.row-->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="phone">Điện thoại</label>
                                        <input type="text" class="form-control" required id="customer_phone" name="phone" placeholder="Điện thoại">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="address">Địa chỉ</label>
                                        <input type="text" class="form-control" required id="customer_address" name="address" placeholder="Địa chỉ">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="customer_status">Status</label>
                                        <select class="form-control" id="customer_status" name="customer_status">
                                            <option value="1">Mới</option>
                                            <option value="2">Đang gọi (Chưa nghe máy)</option>
                                            <option value="3">Đã gọi (Cần gọi lại)</option>
                                            <option value="4">Không nhận</option>
                                            <option value="5">Đồng ý nhận</option>
                                            <option value="6">Đã đóng gói, chờ vận chuyển</option>
                                            <option value="7">Đã giao cho bên vận chuyển</option>
                                            <option value="8">Hàng bị hoàn trả</option>
                                            <option value="9">Khách đã nhận</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="customer_description">Ghi chú</label> <br/>
                                        <textarea class="form-control" id="customer_description" rows="4" cols="50" name="description" placeholder="Ghi chú"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div id="div-promotion-id" class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="promotion_id">Thuộc quảng cáo</label>
                                        <select class="form-control" id="promotion_id" name="promotion_id">
                                            @foreach ($promotions as $pro) {
                                            <option value="{{ $pro->id }}">{{ $pro->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--/.row-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btn-save" class="btn btn-primary">Lưu</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script>
        let Customer = {
            isValid: true,
            init: function () {

            },
            validate: function () {
                let name = $('#customer_name').val();
                let phone = $('#customer_phone').val();
                let address = $('#customer_address').val();

                if(!name) {
                    $('#customer_name').focus();
                    return false;
                }

                if(!phone) {
                    $('#customer_phone').focus();
                    return false;
                }

                if(!address) {
                    $('#customer_address').focus();
                    return false;
                }

                return true;
            },
            search: function(){
                {{--let promotionId = $('#search_promotion_id').val();--}}
                {{--window.location.replace("{{ route('admin_search_customer') }}");--}}
            },
            edit : function(id, name, phone, address, status, description){
                $(".modal-title").text("Sửa thông tin khách hàng");
                $("#customer_name").val(name);
                $("#customer_phone").val(phone);
                $("#customer_address").val(address);
                $("#btn-save").text("Sửa");
                $("#customer_id").val(id);
                $("#customer_status").val(status);
                $("#customer_description").val(description);
                $("#div-promotion-id").hide();
            },
            remove: function(id){
                let _token = '{{csrf_token()}}'
                let result = confirm('Bạn chắc chắn muốn xóa!')
                if (result){
                    Customer.postAjax('{{ route('admin_remove_customer') }}', {id, _token}, function (response) {
                        console.log(response)
                        if (response.data) {
                            location.reload()
                        }else {
                            alert('Không xóa được')
                        }
                    });
                }
            },
            addNew : function(){
                $(".modal-title").text("Thêm mới khách hàng");
                $("#customer_name").val('');
                $("#customer_phone").val('');
                $("#customer_address").val('');
                $("#btn-save").text("Thêm");
                $("#customer_id").val(0);
                $("#customer_status").val(1);
                $("#customer_description").val('');
                $("#div-promotion-id").show();
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
            $("#customer_form").submit(function(e) {
                if(Customer.validate()) {
                    let id = $('#customer_id').val();
                    let address = $('#customer_address').val();
                    let name = $('#customer_name').val();
                    let phone = $('#customer_phone').val();
                    let promotion_id = $('#promotion_id').val();
                    let status = $('#customer_status').val();
                    let description = $('#customer_description').val();
                    let _token = '{{csrf_token()}}'
                    Customer.postAjax('{{ route('admin_update_customer') }}', {id, _token, name, phone, address, promotion_id, status, description}, function (response) {
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

    <script>

        $(function () {
            let totalNumber = '{{ $totalNumber }} ';
            let acceptNumber = '{{ $acceptNumber }} ';
            let returnNumber = '{{ $returnNumber }} ';

            new Chart($('#canvas-1'), {
                type: 'pie',
                data: {
                    labels: ['tỉ lệ chốt (%)', ''],
                    datasets: [{
                        label: '',
                        data: [acceptNumber/totalNumber*100, (1-acceptNumber/totalNumber)*100,],
                        backgroundColor: [
                            '#2e7d32',
                            '#bdbdbd',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {

                }
            });

            new Chart($('#canvas-2'), {
                type: 'pie',
                data: {
                    labels: ['tỉ lệ hoàn (%)', ''],
                    datasets: [{
                        label: '',
                        data: [returnNumber/acceptNumber*100, (1-returnNumber/acceptNumber)*100 ],
                        backgroundColor: [
                            '#ffc107',
                            '#bdbdbd'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {

                }
            });

            new Chart($('#canvas-3'), {
                type: 'bar',
                data: {
                    labels: ['tổng', 'chốt', 'hoàn'],
                    datasets: [{
                        label: '',
                        data: [totalNumber, acceptNumber, returnNumber],
                        backgroundColor: [
                            '#1de9b6',
                            '#2e7d32',
                            '#ffc107',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {

                }
            });
        })

    </script>

@endsection
