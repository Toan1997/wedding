<?php

namespace App\Http\Controllers\API\V1;

use App\Jobs\SendEmail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\JsonResponse;

class SendMailController extends Controller
{
    /**
     * Response trait to handle return responses.
     */

    public function store(Request $request)
    {
        SendEmail::dispatch($request->all(), 'info@odinbi.com')->delay(now()->addMinutes(2));
        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => 'success!'
        ]);
    }

}
