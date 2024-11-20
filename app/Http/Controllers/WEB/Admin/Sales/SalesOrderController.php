<?php

namespace App\Http\Controllers\WEB\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{
    public function index()
    {
        return view('admin.sales.order.index');
    }

    public function create()
    {
        return view('admin.sales.order.create',
            [
                'customers' => User::all(),
                'products' => Product::all()
            ]
        );
    }

    // function formSubmit() {
    //     let customerId = $('#customer_id').val();
    //     let orderDate = $('#order_date').val();
    //     let notes = $('#notes').val();
    //     let paymentStatus = $('#payment_status').val();
    //     let paymentMethod = $('#payment_method').val();
    //     let totalAmount = $('#total_amount').val();
    //     let discount = $('#discount').val();
    //     let grandTotal = $('#grand_total').val();

    //     let items = [];
    //     $('#items_table tbody tr').each(function() {
    //         let itemId = $(this).find('select[name="item_id[]"]').val();
    //         let quantity = $(this).find('input[name="quantity[]"]').val();
    //         let unitPrice = $(this).find('input[name="unit_price[]"]').val();
    //         let total = $(this).find('input[name="total[]"]').val();

    //         if (itemId) {
    //             items.push({
    //                 product_id: itemId,
    //                 quantity: quantity,
    //                 unit_price: unitPrice,
    //                 total: total
    //             });
    //         }
    //     });

    //     let data = {
    //         customer_id: customerId,
    //         order_date: orderDate,
    //         notes: notes,
    //         payment_status: paymentStatus,
    //         payment_method: paymentMethod,
    //         total_amount: totalAmount,
    //         discount: discount,
    //         grand_total: grandTotal,
    //         items: items
    //     };




    
}
