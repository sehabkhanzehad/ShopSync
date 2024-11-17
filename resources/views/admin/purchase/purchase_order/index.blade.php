@extends('admin.master_layout')

@section('title')
    <title>Purchase Orders</title>
@endsection

@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Purchase Orders</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a
                            href="{{ route('admin.dashboard') }}">{{ __('admin.Dashboard') }}</a></div>
                    <div class="breadcrumb-item">Purchase Orders</div>
                </div>
            </div>
            <div class="section-body">
                <a href="{{ route('admin.purchase-order.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>
                    {{ __('admin.Add New') }}</a>
                <div class="row mt-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive table-invoice">
                                    <table class="table table-striped" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Order No/Id</th>
                                                <th>Order Date</th>
                                                <th>Supplier</th>
                                                <th>Supplier Company</th>
                                                <th>Delivery Date</th>
                                                <th>Amount</th>
                                                <th>Order Status</th>
                                                <th>Payment Status</th>
                                                <th>{{ __('admin.Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($purchaseOrders as $sl => $order)
                                                <tr>
                                                    <td>{{ ++$sl }}</td>
                                                    <td>{{ $order->order_number }}</td>
                                                    <td>{{ date('d-m-Y', strtotime($order->order_date)) }}</td>
                                                    <td>{{ $order->supplier->name }}</td>
                                                    <td>{{ $order->supplier->company_name }}</td>
                                                    <td>{{ date('d-m-Y', strtotime($order->actual_delivery_date )) }}</td>
                                                    <td>{{ $order->total_amount }}</td>
                                                    <td>{{ $order->status }}</td>
                                                    <td>{{ $order->payment_status }}</td>
                                                    {{-- <td>
                                                        @if ($supplier->is_active == 1)
                                                            <a href="javascript:;"
                                                                onclick="changeProductCategoryStatus({{ $supplier->id }})">
                                                                <input id="status_toggle" type="checkbox" checked
                                                                    data-toggle="toggle" data-on="{{ __('admin.Active') }}"
                                                                    data-off="{{ __('admin.Inactive') }}"
                                                                    data-onstyle="success" data-offstyle="danger">
                                                            </a>
                                                        @else
                                                            <a href="javascript:;"
                                                                onclick="changeProductCategoryStatus({{ $supplier->id }})">
                                                                <input id="status_toggle" type="checkbox"
                                                                    data-toggle="toggle" data-on="{{ __('admin.Active') }}"
                                                                    data-off="{{ __('admin.Inactive') }}"
                                                                    data-onstyle="success" data-offstyle="danger">
                                                            </a>
                                                        @endif
                                                    </td> --}}
                                                    <td>
                                                        <a href=""
                                                            class="btn btn-primary btn-sm"><i class="fa fa-edit"
                                                                aria-hidden="true"></i></a>

                                                        <a href="javascript:;" class="btn btn-danger btn-sm"
                                                            onclick="openDeleteModal({{ $order->id }})"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>








    <!-- Modal -->
    <div class="modal fade" id="deleteMod" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Item Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="delete_id">
                    <p>Are You sure delete this item ?</p>
                </div>

                {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('admin.Close') }}</button> --}}

                <div class="modal-footer bg-whitesmoke br">
                    {{-- <form id="supplierDelete" action="" method="POST">
                        <input type="hidden" name="_token" value="stM8H0sbxBH0rDDsC8Jb48mDZRo8s5gr4XgocvRO">
                        <input type="hidden" name="_method" value="DELETE">
                    </form> --}}

                    <button type="button" class="btn btn-danger"data-dismiss="modal">Close</button>
                    <button type="submit" id = "supplierDelete" onclick="deleteData()" class="btn btn-primary">Yes,
                        Delete</button>
                </div>

            </div>
        </div>
    </div>
{{--
    <script>
        function changeProductCategoryStatus(id) {

            $.ajax({
                type: "get",
                url: "{{ url('admin/supplier-change-status') }}" + "/" + id,
                success: function(response) {
                    if (response.status == true) {
                        toastr.success(response.message);
                        // setTimeout(function() {
                        //     window.location.href = response.url;
                        // }, 1000);
                    } else {
                        toastr.error(response.message);
                    }
                }
            })
        }

        function openDeleteModal(id) {
            $("#delete_id").val(id);
            $('#deleteMod').modal('show');
        }

        function deleteData() {
            var id = $("#delete_id").val();
            $.ajax({
                type: "get",
                url: "{{ url('/admin/supplier-delete/') }}" + "/" + id,
                success: function(response) {
                    if (response.status == true) {
                        toastr.success(response.message);
                        setTimeout(function() {
                            window.location.href = response.url;
                            $('#deleteMod').modal('toggle');
                            $("#delete_id").val('');
                        }, 1000);
                    } else {
                        toastr.error(response.message);
                    }
                }
            })
        }
    </script> --}}
@endsection
