<?php

namespace App\Http\Controllers\WEB\Admin\Purchase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('admin.purchase.supplier.index');
    }
}
