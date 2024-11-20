@extends('admin.master_layout')

@section('title')
    <title>Customers</title>
@endsection

@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Customers</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a
                            href="{{ route('admin.dashboard') }}">{{ __('admin.Dashboard') }}</a></div>
                    <div class="breadcrumb-item">Customers</div>
                </div>
            </div>
            <div class="section-body">
                <a href="{{ route('admin.customer.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>
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
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>{{ __('admin.Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($customers as $sl => $customer)
                                                <tr>
                                                    <td>{{ ++$sl }}</td>
                                                    <td>{{ $customer->name }}</td>
                                                    <td>
                                                        <img src="{{ $customer->image == null ? 'https://ui-avatars.com/api/?name=' . urlencode($customer->name) : asset($customer->image) }}" alt="Image" style="width: 50px; height: 50px;">

                                                    </td>
                                                    <td>{{ $customer->phone }}</td>
                                                    <td>{{ $customer->email }}</td>
                                                    <td>{{ $customer->address }}</td>


                                                    <td>
                                                        {{-- <a href="javascript:;" class="btn btn-info btn-sm"
                                                            onclick=""><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a> --}}
                                                        <a href="{{ route('admin.customer.edit', $customer->id) }}" class="btn btn-primary btn-sm"><i
                                                                class="fa fa-edit" aria-hidden="true"></i></a>

                                                        <a href="javascript:;" class="btn btn-danger btn-sm"
                                                            onclick="openDeleteModal({{ $customer->id }})"><i
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

    <!-- Invoice Modal -->
    <div class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="invoiceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="invoiceModalLabel">Invoice Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div id="invoiceContent">
                        <div class="invoice">
                            <div class="invoice-header text-center mb-2" style="border-bottom: 1px solid #dee2e6">
                                <h2 class="mt-0">RND Global Nest</h2>
                                <p class="mb-0">Dhanmondi, Dhaka, Bangladesh</p>
                                <p class="mb-0">Phone: 01711111111</p>
                            </div>

                            <div class="d-flex justify-content-between ">
                                <div class="invoice-header">
                                    <h2>Invoice</h2>
                                    <div class="invoice-info">
                                        <p id = "order_no" class="mb-0"></p>
                                        <p id = "order_date" class="mb-0"></p>
                                        <p id = "delivery_date" class="mb-0"></p>
                                        <p id = 'order_status' class="mb-0"></p>
                                    </div>
                                </div>

                                <div class="invoice-supplier">
                                    <h4>Supplier Details</h4>
                                    <p id="supplier_name" class="mb-0"></p>
                                    <p id="supplier_company" class="mb-0"></p>
                                    <p id="supplier_address" class="mb-0"></p>
                                    <p id="supplier_contact" class="mb-0"></p>
                                </div>
                            </div>

                            <div class="invoice-items mt-3">
                                <h4>Order Items</h4>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Item Name</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody id="order_items">
                                    </tbody>
                                </table>
                            </div>
                            <div class="invoice-summary">
                                <h4>Summary</h4>
                                <p id="sub_total" class="mb-0"></p>
                                <p id="discount" class="mb-0"></p>
                                <p id="total_amount" class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        // function printInvoice(orderId) {
        //     $.ajax({

        //         type: "GET",
        //         url: "{{ url('/admin/purchase-order') }}/" + orderId,
        //         success: function(response) {

        //             $('#order_no').html('<strong>Order No: </strong>' + response.order_number);
        //             $('#order_date').html('<strong>Order Date: </strong>' + response.order_date);
        //             $('#delivery_date').html('<strong>Delivery Date: </strong>' + response
        //             .actual_delivery_date);
        //             $('#order_status').html('<strong>Order Status: </strong>' + response.status + '(' + response
        //                 .payment_status + ')');
        //             $('#supplier_name').html('<strong>Name: </strong>' + response.supplier.name);
        //             $('#supplier_company').html('<strong>Company: </strong>' + response.supplier.company_name);
        //             $('#supplier_address').html('<strong>Address: </strong>' + response.supplier.address);
        //             $('#supplier_contact').html('<strong>Contact: </strong>' + response.supplier.phone);
        //             // add item with foreach loop here in tr table
        //             response.items.forEach(function(item) {
        //                 $('#order_items').append(`
        //                     <tr>
        //                         <td>${item.id}</td>
        //                         <td>${item.product.name}</td>
        //                         <td>${item.quantity}</td>
        //                         <td>${item.price_per_unit}</td>
        //                         <td>${item.subtotal}</td>
        //                     </tr>
        //                 `);
        //             })

        //             $('#sub_total').html('<strong>Subtotal: </strong>' + response.total_amount);
        //             $('#discount').html('<strong>Tax: </strong>' + response.discount);
        //             $('#total_amount').html('<strong>Total Amount: </strong>' + response.grand_total);

        //             // now print the invoice
        //             let printContents = document.getElementById('invoiceContent').innerHTML;
        //             let originalContents = document.body.innerHTML;
        //             document.body.innerHTML = printContents;
        //             window.print();
        //             document.body.innerHTML = originalContents;
        //         },
        //         error: function() {
        //             toastr.error('Failed to load invoice details.');
        //         }
        //     });
        // }

        // function showInvoice(orderId) {
        //     $.ajax({

        //         type: "GET",
        //         url: "{{ url('/admin/purchase-order') }}/" + orderId,
        //         success: function(response) {

        //             $('#order_no').html('<strong>Order No: </strong>' + response.order_number);
        //             $('#order_date').html('<strong>Order Date: </strong>' + response.order_date);
        //             $('#delivery_date').html('<strong>Delivery Date: </strong>' + response
        //             .actual_delivery_date);
        //             $('#order_status').html('<strong>Order Status: </strong>' + response.status + '(' + response
        //                 .payment_status + ')');
        //             $('#supplier_name').html('<strong>Name: </strong>' + response.supplier.name);
        //             $('#supplier_company').html('<strong>Company: </strong>' + response.supplier.company_name);
        //             $('#supplier_address').html('<strong>Address: </strong>' + response.supplier.address);
        //             $('#supplier_contact').html('<strong>Contact: </strong>' + response.supplier.phone);
        //             // add item with foreach loop here in tr table
        //             response.items.forEach(function(item) {
        //                 $('#order_items').append(`
        //                     <tr>
        //                         <td>${item.id}</td>
        //                         <td>${item.product.name}</td>
        //                         <td>${item.quantity}</td>
        //                         <td>${item.price_per_unit}</td>
        //                         <td>${item.subtotal}</td>
        //                     </tr>
        //                 `);
        //             })



        //             $('#sub_total').html('<strong>Subtotal: </strong>' + response.total_amount);
        //             $('#discount').html('<strong>Tax: </strong>' + response.discount);
        //             $('#total_amount').html('<strong>Total Amount: </strong>' + response.grand_total);



        //             $('#invoiceModal').modal('show');
        //         },
        //         error: function() {
        //             toastr.error('Failed to load invoice details.');
        //         }
        //     });
        // }

        function openDeleteModal(id) {
            $("#delete_id").val(id);
            $('#deleteMod').modal('show');
        }

        function deleteData() {
            var id = $("#delete_id").val();
            $.ajax({
                type: "get",
                url: "{{ url('/admin/customer-delete') }}" + "/" + id,
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
    </script>
@endsection
