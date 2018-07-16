<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Oders;
use App\Models\ProductOder;
use App\Models\Product;
use DB;

class BillController extends Controller
{
    //
    public function getBill()
    {
    	$data['orderlist'] = Oders::all();
    	return view('backend.bill',$data);
    }

    public function getEditBill($id)
    {
    	$data['detaillist'] = Oders::find($id);
    	// $data['detaillist'] = DB::table('product_oder')
    	// 					->join('oders','product_oder.oder_id', '=', 'oders.oder_id')
    	// 					->get();
    	$data['prodlist'] = DB::table('product_oder')
    					  ->join('product','product_oder.prod_id', '=', 'product.prod_id')
    					  ->get();
    	return view('backend.billdetail',$data);
    }

    public function getDeleteBill($id)
    {
    	Oders::destroy($id);
    	return back();
    }
}
