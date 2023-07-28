<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile()
    {
        try {
            $user = auth()->user();
            return response()->json([
                'success' => true,
                'data' => [
                    'user' => $user,
                ]
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error('Error getting user' . $th->getMessage());

            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function updateProfile(Request $req)
    {
        try {
            $userId = auth()->user()->id;
            $user = User::find($userId);

            $validator = Validator::make($req->all(), [
                'name' => ['string', 'min:4'],
                'image_key' => ['string', 'min:1'],
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
            }

            $validData = $validator->validated();

            if (isset($validData['name'])) {
                $user->name = $validData['name'];
            }
            if (isset($validData['image_key'])) {
                $user->image_key = $validData['image_key'];
            }

            $user->save();

            return response()->json([
                'success' => true,
                'data' => [
                    'user' => $user
                ]
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error('Error updating user profile' . $th->getMessage());

            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
