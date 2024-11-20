<?php

namespace App\Http\Controllers\WEB\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {

        return view('admin.sales.customer.index', [
            'customers' => User::all(),
        ]);
    }

    public function create()
    {
        return view('admin.sales.customer.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|min:3|max:255',
                'phone' => 'required|unique:users',
                'email' => 'email|unique:users',
                'address' => 'required|string|min:3|max:255',
                'notes' => 'string|min:3|max:255',
                'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/customers'), $imageName);
            $imagePath = '/uploads/customers/' . $imageName;

            $customer = User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'notes' => $request->notes,
                'image' => $imagePath,
            ]);

            return response()->json(
                [
                    'status' => true,
                    'message' => 'Customer created successfully!',
                    'customer' => $customer,
                    'url' => route('admin.customer'),
                ]
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Customer creation failed!',
                    'error' => $th->getMessage(),
                ]
            );
        }
    }

    public function edit($id)
    {
        $customer = User::where('id', $id)->first();
        return view('admin.sales.customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        try {
            $customer = User::where('id', $id)->first();

            if ($request->hasFile('image')) {
                if ($customer->image != null) {
                    unlink(public_path($customer->image));
                }
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/customers'), $imageName);
                $imagePath = '/uploads/customers/' . $imageName;
            }
            $customer->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'notes' => $request->notes,
                'image' => $imagePath,
            ]);
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Customer updated successfully!',
                    'customer' => $customer,
                    'url' => route('admin.customer'),
                ]
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Customer update failed!',
                    'error' => $th->getMessage(),
                ]
            );
        }
    }

    public function destroy($id)
    {
        try {
            $customer = User::where('id', $id)->first();
            if ($customer->image != null) {
                unlink(public_path($customer->image));
            }

            $customer->delete();
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Customer deleted successfully',
                    'url' => route('admin.customer'),
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
