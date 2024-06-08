<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubmitRequest;
use App\Jobs\StoreSubmission;

class SubmitController extends Controller
{
    public function __invoke(SubmitRequest $request)
    {
        $data = $request->validated();
        dispatch(new StoreSubmission($data));
        return response()->json([
            'success' => true,
        ]);
    }
}
