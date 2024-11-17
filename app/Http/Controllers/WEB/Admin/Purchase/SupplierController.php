<?php

namespace App\Http\Controllers\WEB\Admin\Purchase;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {

        return view('admin.purchase.supplier.index',[
            'suppliers' => Supplier::all(),

        ]);
    }

    public function create()
    {
        return view('admin.purchase.supplier.create-supplier');
    }

    public function store(Request $request)
    {
        try {

            if (Supplier::where('phone', $request->phone)->exists()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Supplier already exists',
                    'url' => route('admin.supplier')
                ]);
            } 

            Supplier::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'company_name' => $request->company_name,
                'website' => $request->website,
                'contact_person' => $request->contact_person,
                'contact_person_phone' => $request->contact_person_phone,
                'contact_person_email' => $request->contact_person_email,
                'contract_start_date' => $request->contract_start_date,
                'contract_end_date' => $request->contract_end_date,
                'is_active' => $request->is_active,
                'notes' => $request->notes
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Supplier created successfully',
                'url' => route('admin.supplier')
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong.',
                'error' => $th->getMessage()
            ]);
        }
    }

    public function edit($id)
    {
        return view('admin.purchase.supplier.edit-supplier', [
            'supplier' => Supplier::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $supplier = Supplier::find($id);
            $supplier->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'company_name' => $request->company_name,
                'website' => $request->website,
                'contact_person' => $request->contact_person,
                'contact_person_phone' => $request->contact_person_phone,
                'contact_person_email' => $request->contact_person_email,
                'contract_start_date' => $request->contract_start_date,
                'contract_end_date' => $request->contract_end_date,
                'is_active' => $request->is_active,
                'notes' => $request->notes
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Supplier updated successfully',
                'url' => route('admin.supplier')
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong.',
                'error' => $th->getMessage()
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            Supplier::find($id)->delete();
            return response()->json([
                'status' => true,
                'message' => 'Supplier deleted successfully',
                'url' => route('admin.supplier')
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong.',
                'error' => $th->getMessage()
            ]);
        }
    }

    public function changeStatus(Request $request, $id){
            // if($product->status == 1){
            //     $product->status = 0;
            //     $product->save();
            //     $message = trans('admin_validation.Inactive Successfully');
            // }else{
            //     $product->status = 1;
            //     $product->save();
            //     $message = trans('admin_validation.Active Successfully');
            // }
            // return response()->json($message);

        try {
            $supplier = Supplier::find($id);

            if($supplier->is_active == 1){
                $supplier->is_active = 0;
                $supplier->save();
            }else{
                $supplier->is_active = 1;
                $supplier->save();
            }
            return response()->json([
                'status' => true,
                'message' => 'Status changed successfully',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong.',
                'error' => $th->getMessage()
            ]);
        }
        
    }
}
