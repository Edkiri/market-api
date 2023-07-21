<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function create(Request $req)
    {
        try {

            $validator = Validator::make($req->all(), [
                'name' => ['required', 'string', 'min:4', 'unique:categories,name'],
                'description' => ['required', 'string', 'min:4'],
                'price' => ['required', 'numeric', 'gt:0'],
                'category_id' => ['required', 'int'],
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
            }

            $validData = $validator->validated();

            $newProduct = Product::create([
                'name' => $validData['name'],
                'description' => $validData['description'],
                'price' => $validData['price'],
                'category_id' => $validData['category_id'],
            ]);

            return response()->json([
                'success' => true,
                'data' => [
                    'category' => $newProduct,
                ]
            ], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            Log::error('Error creating product' . $th->getMessage());

            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
