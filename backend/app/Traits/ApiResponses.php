<?php

namespace App\Traits;

trait ApiResponses {
    
    protected function ok(string $message) {
        return $this->success($message, 200);
    }

    protected function success(string $message, int $statusCode= 200) {
        return response()->json([
            'message' => $message,
            'status' => $statusCode
        ], $statusCode);
    }
}
