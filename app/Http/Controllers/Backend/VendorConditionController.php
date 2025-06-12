<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\VendorCondition;
use Illuminate\Http\Request;

class VendorConditionController extends Controller
{
    public function index()
    {
        return view('admin.vendor-condition.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'content' => ['required']
        ]);

        VendorCondition::updateOrCreate(
            ['id' => 1],
            [
                'content' => $request->content
            ]
        );

        toastr()->success('Updated successfully!');

        return redirect()->back();
    }
}
