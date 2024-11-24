<?php

namespace App\Http\Controllers\WEB\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SalesItem;
use App\Models\SalesOrder;
use App\Models\User;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{
    public function index()
    {
        return view('admin.sales.order.index',[
            'salesOrders' => SalesOrder::with('customer')->with('items')->get(),
        ]);
    }

    public function create()
    {
        return view(
            'admin.sales.order.create',
            [
                'customers' => User::all(),
                'products' => Product::all()
            ]
        );
    }

    public function store(Request $request)
    {
        try {
            $salesOrder = SalesOrder::create([
                'user_id' => $request->customer_id,
                'notes' => $request->notes,
                'payment_status' => $request->payment_status,
                'payment_method' => $request->payment_method,
                'total_amount' => $request->total_amount,
                'discount' => $request->discount,
                'grand_total' => $request->grand_total,
                'order_number' => 'SO-' . time(),
            ]);

            foreach ($request->items as $item) {
                SalesItem::create([
                    'sales_order_id' => $salesOrder->id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                    'price_per_unit' => $item['unit_price'],
                    'subtotal' => $item['total'],
                ]);
            }

            return response()->json(
                [
                    'status' => true,
                    'message' => 'Sales Order Created Successfully',
                    'url' => route('admin.sales-order')
                ],
                200
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Failed to create sales order',
                    'error' => $e->getMessage(),
                ],
                500
            );
        }
    }

    public function show($id){
        $order = SalesOrder::with('customer', 'items.product')
        ->find($id);
        return $order;
    }

    public function edit($id){
        return view('admin.sales.order.edit',[
            'purchaseOrder' => SalesOrder::with('customer')->with('items')->find($id),
            'customers' => User::all(),
            'products' => Product::all(),
        ]);
    }

    public function update(Request $request, $id){
        try {
            $salesOrder = SalesOrder::find($id);
            $salesOrder->update([
                'user_id' => $request->customer_id,
                'notes' => $request->notes,
                'payment_status' => $request->payment_status,
                'payment_method' => $request->payment_method,
                'total_amount' => $request->total_amount,
                'discount' => $request->discount,
                'grand_total' => $request->grand_total,
            ]);

            SalesItem::where('sales_order_id', $id)->delete();

            foreach ($request->items as $item) {
                SalesItem::create([
                    'sales_order_id' => $salesOrder->id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                    'price_per_unit' => $item['unit_price'],
                    'subtotal' => $item['total'],
                ]);
            }

            return response()->json(
                [
                    'status' => true,
                    'message' => 'Sales Order Updated Successfully',
                    'url' => route('admin.sales-order')
                ],
                200
            );

        } catch (\Exception $e) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Failed to update sales order',
                    'error' => $e->getMessage(),
                ],
                500
            );
        }
    }

    public function destroy($id){
        try {
            SalesOrder::find($id)->delete();
            SalesItem::where('sales_order_id', $id)->delete();
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Sales Order Deleted Successfully',
                    'url' => route('admin.sales-order')
                ],
                200
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Failed to delete sales order',
                    'error' => $e->getMessage(),
                ],
                500
            );
        }
    }
}
