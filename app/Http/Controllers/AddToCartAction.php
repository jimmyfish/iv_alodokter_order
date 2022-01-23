<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AddToCartAction extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id'
        ]);

        $order = new Order([
            'user_id' => $request->get('user_id'),
            'product_id' => $request->get('product_id'),
        ]);

        $order->save();

        return $this->response([
            'message' => 'Successfully add a product to cart.'
        ], true);
    }
}
