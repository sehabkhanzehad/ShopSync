<?php

namespace App\Http\Controllers\WEB\Admin\Purchase;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\PurchaseItem;
use App\Models\PurchaseOrder;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function index()
    {
        return view('admin.purchase.purchase_order.index', [
            'purchaseOrders' => PurchaseOrder::with('supplier')->with('items')->get(),
        ]);
    }

    public function create()
    {
        return view(
            'admin.purchase.purchase_order.create',
            [
                'suppliers' => Supplier::all(),
                'products' => Product::all(),
            ]
        );
    }

    public function store(Request $request)
    {
        try {
            $purchase_order = PurchaseOrder::create([
                'supplier_id' => $request->supplier_id,
                'order_date' => $request->order_date,
                'notes' => $request->notes,
                'expected_delivery_date' => $request->expected_delivery_date,
                'actual_delivery_date' => $request->actual_delivery_date,
                'payment_status' => $request->payment_status,
                'payment_method' => $request->payment_method,
                'total_amount' => $request->total_amount,
                'discount' => $request->discount,
                'grand_total' => $request->grand_total,
                'order_number' => 'PO-' . time(),
            ]);

            foreach ($request->items as $item) {
                PurchaseItem::create([
                    'purchase_order_id' => $purchase_order->id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                    'price_per_unit' => $item['unit_price'],
                    'sell_price' => $item['sell_price'],
                    'subtotal' => $item['total'],
                ]);
            }
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Order created successfully',
                    'url' => route('admin.purchase-order'),
                ]
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Something went wrong',
                    'error' => $th->getMessage(),
                ]
            );
        }
    }

    public function show($id)
    {
        $order = PurchaseOrder::with('supplier', 'items.product')
        ->find($id);
        return $order;
    }

    public function edit($id)
    {
        return view('admin.purchase.purchase_order.edit',[
            'purchaseOrder' => PurchaseOrder::with('supplier')->with('items')->find($id),
            'suppliers' => Supplier::all(),
            'products' => Product::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        try {


            $purchase_order = PurchaseOrder::where('id', $id)->update([
                'supplier_id' => $request->supplier_id,
                'order_date' => $request->order_date,
                'notes' => $request->notes,
                'expected_delivery_date' => $request->expected_delivery_date,
                'actual_delivery_date' => $request->actual_delivery_date,
                'payment_status' => $request->payment_status,
                'payment_method' => $request->payment_method,
                'total_amount' => $request->total_amount,
                'discount' => $request->discount,
                'grand_total' => $request->grand_total,
            ]);

            PurchaseItem::where('purchase_order_id', $id)->delete();

            foreach ($request->items as $item) {
                PurchaseItem::create([
                    'purchase_order_id' => $id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                    'price_per_unit' => $item['unit_price'],
                    'sell_price' => $item['sell_price'],
                    'subtotal' => $item['total'],
                ]);
            }

            return response()->json(
                [
                    'status' => true,
                    'message' => 'Order updated successfully',
                    'url' => route('admin.purchase-order'),
                ]
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Something went wrong',
                    'error' => $th->getMessage(),
                ]
            );
        }
    }

    public function destroy($id)
    {
        try {
            PurchaseOrder::where('id', $id)->delete();
            PurchaseItem::where('purchase_order_id', $id)->delete();
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Order deleted successfully',
                    'url' => route('admin.purchase-order'),
                ]
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Something went wrong',
                    'error' => $th->getMessage(),
                ]
            );
        }
    }
}
