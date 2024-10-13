<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Popup;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    public function getById($id)
    {
        try {
            $popup = Popup::findOrFail($id);
            return response()->json([
                'status' => 200,
                'popup' => $popup
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 404,
                'message' => 'Popup not found'
            ], 404);
        }
    }
}
