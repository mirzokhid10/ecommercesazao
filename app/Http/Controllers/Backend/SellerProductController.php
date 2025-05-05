<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\SellerPendingProductDataTable;
use App\DataTables\SellerProductDataTable;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SellerProductController extends Controller
{
    public function index(SellerProductDataTable $dataTable)
    {
        return $dataTable->render('admin.product.seller-product.index');
    }

    public function pendingProduct(SellerPendingProductDataTable $dataTable)
    {
        return $dataTable->render('admin.product.seller-pending-product.index');
    }

    public function changeApproveStatus(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->is_approved = $request->value;
        $product->save();

        return response(['message' => 'Product Approve Status Has Been Changed']);
    }
}
