@extends('admin.master_layout')
@section('title')
    <title>Edot Sales Order</title>
@endsection
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Sales Order</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a
                            href="{{ route('admin.dashboard') }}">{{ __('admin.Dashboard') }}</a></div>
                    <div class="breadcrumb-item">Edit Sales Order</div>
                </div>
            </div>

            <div class="section-body">
                <a href="{{ route('admin.sales-order') }}" class="btn btn-primary"><i class="fas fa-list"></i>
                    Sales Orders</a>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="form-group col-4">
                                            <label>Customer Name:<span class="text-danger">*</span></label>
                                            <select name="customer_id" id="customer_id" class="form-control">
                                                <option value="">Select Customer</option>
                                                @foreach ($customers as $customer)
                                                    <option {{ $customer->id == $purchaseOrder->user_id ? 'selected' : '' }}
                                                        value="{{ $customer->id }}">{{ $customer->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Order Date:<span class="text-danger">*</span></label>
                                            <input type="date" id="order_date" class="form-control" name="order_date"
                                                value="{{ date('Y-m-d', strtotime($purchaseOrder->created_at)) }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Notes:</label>
                                            <textarea name="notes" id="notes" cols="30" rows="50" class="form-control">{{ $purchaseOrder->notes }}</textarea>
                                        </div>

                                        <div class="form-group col-3">
                                            <label>Payment Status:<span class="text-danger">*</span></label>
                                            <select name="payment_status" id="payment_status" class="form-control">
                                                <option value="">Select Payment Status</option>
                                                <option {{ $purchaseOrder->payment_status == 'Unpaid' ? 'selected' : '' }}
                                                    value="Unpaid">Unpaid</option>
                                                <option {{ $purchaseOrder->payment_status == 'Paid' ? 'selected' : '' }}
                                                    value="Paid">Paid</option>
                                                <option
                                                    {{ $purchaseOrder->payment_status == 'Partially Paid' ? 'selected' : '' }}
                                                    value="Partially Paid">Partially Paid</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-3">
                                            <label>Payment Method:</label>
                                            <select name="payment_method" id="payment_method" class="form-control">
                                                <option value="">Select Payment Method</option>
                                                <option {{ $purchaseOrder->payment_method == 'Cash' ? 'selected' : '' }}
                                                    value="Cash">Cash</option>
                                                <option
                                                    {{ $purchaseOrder->payment_method == 'Bank Transfer' ? 'selected' : '' }}
                                                    value="Bank Transfer">Bank Transfer</option>
                                                <option
                                                    {{ $purchaseOrder->payment_method == 'Credit Card' ? 'selected' : '' }}
                                                    value="Credit Card">Credit Card</option>
                                                <option {{ $purchaseOrder->payment_method == 'Check' ? 'selected' : '' }}
                                                    value="Check">Check</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-12">
                                            <label>Items:<span class="text-danger">*</span></label>
                                            <table class="table table-bordered" id="items_table">
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Quantity</th>
                                                        <th>Unit Price</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($purchaseOrder->items as $item)
                                                        <tr>
                                                            <td>
                                                                <select id="item_id" onchange="getUnitPrice(this)"
                                                                    name="item_id[]" class="form-control">
                                                                    <option value="">Select Item</option>
                                                                    @foreach ($products as $product)
                                                                        <option data-price="{{ $product->price }}"
                                                                            {{ $product->id == $item->product_id ? 'selected' : '' }}
                                                                            value="{{ $product->id }}">
                                                                            {{ $product->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td><input type="number" name="quantity[]"
                                                                    class="form-control quantity"
                                                                    value="{{ $item->quantity }}">
                                                            </td>
                                                            <td><input type="number" name="unit_price[]"
                                                                    class="form-control unit_price"
                                                                    value="{{ $item->price_per_unit }}"></td>
                                                            <td><input type="number" name="total[]"
                                                                    class="form-control total"
                                                                    value="{{ $item->subtotal }}" readonly></td>
                                                            <td><button type="button" class="btn btn-danger remove-item"><i
                                                                        class="fa fa-trash"></i></button></td>
                                                        </tr>
                                                    @endforeach


                                                    <tr id="total_amount_row">
                                                        <td colspan="3">
                                                            <button type="button" class="btn btn-primary float-left"
                                                                id="add_item">Add Item</button>
                                                            <strong class="float-right">Total Amount:</strong>
                                                        </td>
                                                        <td><input type="number" id="total_amount" class="form-control"
                                                                name="total_amount"
                                                                value="{{ $purchaseOrder->total_amount }}" readonly></td>
                                                        <td></td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="3" class="text-right"><strong>Discount:</strong>
                                                        </td>
                                                        <td><input type="number" id="discount" class="form-control"
                                                                name="discount" value="{{ $purchaseOrder->discount }}">
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-right"><strong>Grand
                                                                Total:</strong></td>
                                                        <td><input type="number" id="grand_total" class="form-control"
                                                                name="grand_total"
                                                                value="{{ $purchaseOrder->grand_total }}" readonly></td>
                                                        <td></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <a onclick="formSubmit()" class="btn btn-primary float-right">Save</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>



    <script>
        function getUnitPrice(selectElement) {
            let unitPrice = $(selectElement).find('option:selected').data('price');
            let row = $(selectElement).closest('tr');
            row.find('.unit_price').val(unitPrice);
            // calculateRowTotal(row);
            var quantity = row.find('.quantity').val();
            var unit_price = row.find('.unit_price').val();
            var total = quantity * unit_price;
            row.find('.total').val(total);

            let totalAmount = 0;
            $('.total').each(function() {
                totalAmount += parseFloat($(this).val());
            });
            $('#total_amount').val(totalAmount);
            let discount = parseFloat($('#discount').val());
            let grandTotal = totalAmount - discount;
            $('#grand_total').val(grandTotal);
        }

        $(document).ready(function() {
            // Add new item row
            $('#add_item').click(function() {
                var newRow = `<tr>
                                                        <td class="handle">
                                                            <select name="item_id[]" class="form-control" onchange="getUnitPrice(this)">
                                                                <option value="">Select Item</option>
                                                                @foreach ($products as $item)
                                                                    <option data-price="{{ $item->price }}" value="{{ $item->id }}">{{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td><input type="number" name="quantity[]" class="form-control quantity" value="1"></td>
                                                        <td><input type="number" name="unit_price[]" class="form-control unit_price" value="0"></td>
                                                        <td><input type="number" name="total[]" class="form-control total" value="0" readonly></td>
                                                        <td><button type="button" class="btn btn-danger remove-item"><i class="fa fa-trash"></i></button></td>
                                                    </tr>`;
                $('#total_amount_row').before(newRow);
            });

            // Remove item row
            $(document).on('click', '.remove-item', function() {
                $(this).closest('tr').remove();
                calculateTotal();
            });

            // Calculate total for each row
            $(document).on('input', '.quantity, .unit_price', function() {
                var row = $(this).closest('tr');
                calculateRowTotal(row);
            });

            // Calculate grand total
            function calculateRowTotal(row) {
                var quantity = row.find('.quantity').val();
                var unit_price = row.find('.unit_price').val();
                var total = quantity * unit_price;
                row.find('.total').val(total);
                calculateTotal();
            }

            function calculateTotal() {
                let totalAmount = 0;
                $('.total').each(function() {
                    totalAmount += parseFloat($(this).val());
                });

                $('#total_amount').val(totalAmount);
                let discount = parseFloat($('#discount').val());
                let grandTotal = totalAmount - discount;
                $('#grand_total').val(grandTotal);
            }

            // Calculate total amount and grand total on discount change
            $('#discount').on('input', function() {
                calculateTotal();
            });
        });
    </script>

    <script>
        function formSubmit() {
            let customerId = $('#customer_id').val();
            let orderDate = $('#order_date').val();
            let notes = $('#notes').val();
            let paymentStatus = $('#payment_status').val();
            let paymentMethod = $('#payment_method').val();
            let totalAmount = $('#total_amount').val();
            let discount = $('#discount').val();
            let grandTotal = $('#grand_total').val();

            let items = [];
            $('#items_table tbody tr').each(function() {
                let itemId = $(this).find('select[name="item_id[]"]').val();
                let quantity = $(this).find('input[name="quantity[]"]').val();
                let unitPrice = $(this).find('input[name="unit_price[]"]').val();
                let total = $(this).find('input[name="total[]"]').val();

                if (itemId) {
                    items.push({
                        product_id: itemId,
                        quantity: quantity,
                        unit_price: unitPrice,
                        total: total
                    });
                }
            });

            let data = {
                customer_id: customerId,
                order_date: orderDate,
                notes: notes,
                payment_status: paymentStatus,
                payment_method: paymentMethod,
                total_amount: totalAmount,
                discount: discount,
                grand_total: grandTotal,
                items: items
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.sales-order.update', $purchaseOrder->id) }}",
                data: JSON.stringify(data),
                contentType: "application/json",
                success: function(response) {
                    if (response.status == true) {
                        toastr.success(response.message);
                        setTimeout(function() {
                            window.location.href = response.url;
                        }, 1000);
                    } else {
                        toastr.error(response.message);
                    }
                }
            });
        }
    </script>
@endsection
