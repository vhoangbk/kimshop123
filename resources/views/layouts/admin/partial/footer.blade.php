<div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-primary" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cảnh báo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Vui lòng bấm <strong>Đồng ý</strong> để chắc chắn thực hiện tác vụ này, để huỷ bấm <strong>Huỷ</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnCancel">Huỷ</button>
                <button type="button" class="btn btn-primary" id="btnAgree">Đồng ý</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Bootstrap and necessary plugins -->
<script src="{{ asset('css/admin/vendors/js/popper.min.js') }}"></script>
<script src="{{ asset('css/admin/vendors/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('css/admin/vendors/js/pace.min.js') }}"></script>

<!-- Plugins and scripts required by all views -->
<script src="{{ asset('css/admin/vendors/js/Chart.min.js') }}"></script>

<!-- CoreUI Pro main scripts -->
<script src="{{ asset('js/admin/app.js') }}"></script>

<!-- Plugins and scripts required by this views -->
<script src="{{ asset('css/admin/vendors/js/gauge.min.js') }}"></script>
<script src="{{ asset('css/admin/vendors/js/moment.min.js') }}"></script>

<script src="{{ asset('css/admin/vendors/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('css/admin/vendors/js/daterangepicker.min.js') }}"></script>

<!-- Custom scripts required by this view -->
{{--<script src="{{ asset('js/admin/views/main.js') }}"></script>--}}
{{--<script src="{{ asset('js/lodash.js') }}"></script>--}}
{{--<script src="{{ asset('js/cleave.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/admin/jquery-confirm.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/admin/views/popovers.js') }}"></script>--}}
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    moment.locale('vi');
</script>
