<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function response($data, $meta = false, $code = 200)
    {
        $return = [
            'meta' => [
                'status' => 'success',
                'code' => 200
            ],
            'data' => $data,
        ];

        if ($meta) {
            $data = gettype($data) === 'object' ? collect($data)->toArray() : $data;
            $return['meta'] = array_merge($return['meta'], $data);
            unset($return['data']);
        }

        return response()->json($return, $code);
    }
}
