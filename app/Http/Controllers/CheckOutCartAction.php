<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CheckOutCartAction extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|integer|exists:users,id'
        ]);

        $orders = Order::select('id')->where([
            'user_id' => $request->get('user_id'),
            'is_checked_out' => false,
        ])->get();

        $orders->each(function ($order) {
            $checkout = Order::find($order->id)->update([
                'is_checked_out' => true,
            ]);
        });

        return $this->response(['message' => 'Successfully checkout.'], true);
    }
}
