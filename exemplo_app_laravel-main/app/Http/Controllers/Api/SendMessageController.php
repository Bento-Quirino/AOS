<?php

namespace App\Http\Controllers\Api;

use App\Message\ApiMessages;
use App\Http\Controllers\Controller;
use Throwable;

class SendMessageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function message()
    {
        $data_send = [
                'number' => 123456,
                'date_in' => '2021-12-22 17:43:01',
                'string' => 'Alberto Ribeiro',
            ];

        return response()->json([
            'test' => 'Ok!',
            'data' => $data_send
        ]);
    }


}
