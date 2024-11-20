@extends('admin.master_layout')
@section('title')
    <title>Edit Purchase Order</title>
@endsection
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Purchase Order</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a
                            href="{{ route('admin.dashboard') }}">{{ __('admin.Dashboard') }}</a></div>
                    <div class="breadcrumb-item">Edit Purchase Order</div>
                </div>
            </div>

            <div class="section-body">
                <a href="{{ route('admin.purchase-order') }}" class="btn btn-primary"><i class="fas fa-list"></i>
                    Purchase Orders</a>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="form-group col-4">
                                            <label>Supplier Name:<span class="text-danger">*</span></label>
                                            <select name="supplier_id" id="supplier_id" class="form-control">
                                                <option value="">Select Supplier</option>
                                                @foreach ($suppliers as $supplier)
                                                    <option value="{{ $supplier->id }}"
                                                        {{ $supplier->id == $purchaseOrder->supplier_id ? 'selected' : '' }}>
                                                        {{ $supplier->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Order Date:<span class="text-danger">*</span></label>
                                            <input type="date" id="order_date" class="form-control" name="order_date"
                                                value="{{ date('Y-m-d', strtotime($purchaseOrder->order_date)) }}">
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Notes:</label>
                                            <textarea name="notes" id="notes" cols="30" rows="50" class="form-control">{{ $purchaseOrder->notes }}</textarea>
                                        </div>

                                        <div class="form-group col-3">
                                            <label>Expected Delivery Date:</label>
                                            <input type="date" id="expected_delivery_date" class="form-control"
                                                name="expected_delivery_date"
                                                value="{{ date('Y-m-d', strtotime($purchaseOrder->expected_delivery_date)) }}">
                                        </div>

                                        <div class="form-group col-3">
                                            <label>Actual Delivery Date:</label>
                                            <input type="date" id="actual_delivery_date" class="form-control"
                                                name="actual_delivery_date"
                                                value="{{ date('Y-m-d', strtotime($purchaseOrder->actual_delivery_date)) }}">
                                        </div>

                                        <div class="form-group col-3">
                                            <label>Payment Status:<span class="text-danger">*</span></label>
                                            <select name="payment_status" id="payment_status" class="form-control">
                                                <option value="">Select Payment Status</option>
                                                <option value="Unpaid"
                                                    {{ $purchaseOrder->payment_status == 'Unpaid' ? 'selected' : '' }}>
                                                    Unpaid</option>
                                                <option value="Paid"
                                                    {{ $purchaseOrder->payment_status == 'Paid' ? 'selected' : '' }}>Paid
                                                </option>
                                                <option value="Partially Paid"
                                                    {{ $purchaseOrder->payment_status == 'Partially Paid' ? 'selected' : '' }}>
                                                    Partially Paid</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-3">
                                            <label>Payment Method:</label>
                                            <select name="payment_method" id="payment_method" class="form-control">
                                                <option value="">Select Payment Method</option>
                                                <option value="Cash"
                                                    {{ $purchaseOrder->payment_method == 'Cash' ? 'selected' : '' }}>Cash
                                                </option>
                                                <option value="Bank Transfer"
                                                    {{ $purchaseOrder->payment_method == 'Bank Transfer' ? 'selected' : '' }}>
                                                    Bank Transfer</option>
                                                <option value="Credit Card"
                                                    {{ $purchaseOrder->payment_method == 'Credit Card' ? 'selected' : '' }}>
                                                    Credit Card</option>
                                                <option value="Check"
                                                    {{ $purchaseOrder->payment_method == 'Check' ? 'selected' : '' }}>Check
                                                </option>
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
                                                    {{-- <tr>
                                                        <td>
                                                            <select name="item_id[]" class="form-control">
                                                                <option value="">Select Item</option>
                                                                @foreach ($products as $item)
                                                                    <option value="{{ $item->id }}">{{ $item->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td><input type="number" name="quantity[]"
                                                                class="form-control quantity" value="1"></td>
                                                        <td><input type="number" name="unit_price[]"
                                                                class="form-control unit_price" value="0"></td>
                                                        <td><input type="number" name="total[]" class="form-control total"
                                                                value="0" readonly></td>
                                                        <td><button type="button" class="btn btn-danger remove-item"><i
                                                                    class="fa fa-trash"></i></button></td>
                                                                </tr> --}}
                                                    @foreach ($purchaseOrder->items as $item)
                                                        <tr>
                                                            <td>
                                                                <select name="item_id[]" class="form-control">
                                                                    <option value="">Select Item</option>
                                                                    @foreach ($products as $product)
                                                                        <option value="{{ $product->id }}"
                                                                            {{ $product->id == $item->product_id ? 'selected' : '' }}>
                                                                            {{ $product->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td><input type="number" name="quantity[]" class="form-control quantity"
                                                                    value="{{ $item->quantity }}"></td>
                                                            <td><input type="number" name="unit_price[]" class="form-control unit_price"
                                                                    value="{{ $item->price_per_unit }}"></td>
                                                            <td><input type="number" name="total[]" class="form-control total"
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
                                                                name="total_amount" value="{{ $purchaseOrder->total_amount }}" readonly></td>
                                                        <td></td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="3" class="text-right"><strong>Discount:</strong>
                                                        </td>
                                                        <td><input type="number" id="discount" class="form-control"
                                                                name="discount" value="{{ $purchaseOrder->discount }}"></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-right"><strong>Grand
                                                                Total:</strong></td>
                                                        <td><input type="number" id="grand_total" class="form-control"
                                                                name="grand_total" value="{{ $purchaseOrder->grand_total }}" readonly></td>
                                                        <td></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>



                                        <script>
                                            $(document).ready(function() {
                                                // Add new item row
                                                $('#add_item').click(function() {
                                                    var newRow = `<tr>
                                                        <td>
                                                            <select name="item_id[]" class="form-control">
                                                                <option value="">Select Item</option>
                                                                @foreach ($products as $item)
                                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td><input type="number" name="quantity[]" class="form-control quantity" value="1"></td>
                                                        <td><input type="number" name="unit_price[]" class="form-control unit_price" value="0"></td>
                                                        <td><input type="number" name="total[]" class="form-control total" value="0" readonly></td>
                                                        <td><button type="button" class="btn btn-danger remove-item"><i class="fa fa-trash"></i></button></td>
                                                    </tr>`;
                                                    // $('#items_table tbody').append(newRow);
                                                    // allways add new row before total amount row
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
                                                    var quantity = row.find('.quantity').val();
                                                    var unit_price = row.find('.unit_price').val();
                                                    var total = quantity * unit_price;
                                                    row.find('.total').val(total);
                                                    calculateTotal();
                                                });

                                                // Calculate grand total
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

                                                // Make table rows sortable
                                                $('#items_table tbody').sortable({
                                                    handle: '.handle',
                                                    update: function(event, ui) {
                                                        calculateTotal();
                                                    }
                                                });
                                            });
                                        </script>
                                        <script>
                                            $(document).ready(function() {
                                                // Calculate total amount and grand total on discount change
                                                $('#discount').on('input', function() {
                                                    calculateGrandTotal();
                                                });

                                                // Calculate total amount and grand total on item quantity or unit price change
                                                $(document).on('input', '.quantity, .unit_price', function() {
                                                    calculateGrandTotal();
                                                });

                                                function calculateGrandTotal() {
                                                    var totalAmount = 0;
                                                    $('.total').each(function() {
                                                        totalAmount += parseFloat($(this).val());
                                                    });
                                                    $('#total_amount').val(totalAmount);

                                                    var discount = parseFloat($('#discount').val());
                                                    var grandTotal = totalAmount - discount;
                                                    $('#grand_total').val(grandTotal);
                                                }
                                            });
                                        </script>


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
        function formSubmit() {
            let supplierId = $('#supplier_id').val();
            let orderDate = $('#order_date').val();
            let notes = $('#notes').val();
            let expectedDeliveryDate = $('#expected_delivery_date').val();
            let actualDeliveryDate = $('#actual_delivery_date').val();
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
                supplier_id: supplierId,
                order_date: orderDate,
                notes: notes,
                expected_delivery_date: expectedDeliveryDate,
                actual_delivery_date: actualDeliveryDate,
                payment_status: paymentStatus,
                payment_method: paymentMethod,
                total_amount: totalAmount,
                discount: discount,
                grand_total: grandTotal,
                items: items
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.purchase-order.update', $purchaseOrder->id) }}",
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
