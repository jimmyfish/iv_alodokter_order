<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowCartDetailAction extends Controller
{
    public function __invoke(Request $request, $user_id)
    {
        $user = DB::table('users')->find($user_id);

        if (!$user) return $this->response(['message' => 'user not found'], true);

        $orders = Order::select('product_id')
            ->where([
                'user_id' => $user_id,
                'is_checked_out' => false,
            ])
            ->with('product')
            ->get();

        return $this->response([
            'products' => $orders->map(function ($order) {
                return $order->product;
            })
        ]);
    }
}
