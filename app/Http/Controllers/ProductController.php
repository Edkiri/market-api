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
                'name' => ['required', 'string', 'min:4', 'unique:products,name'],
                'description' => ['required', 'string', 'min:4'],
                'price' => ['required', 'numeric', 'gt:0'],
                'category_id' => ['required', 'int'],
                'image_key' => ['required', 'string'],
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
                'image_key' => $validData['image_key'],
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

    public function findAll(Request $request)
    {
        try {
            $perPage = 8;
            $category_id = $request->input('category_id');
            $name = $request->input('name');
            
            $query = Product::query();

            if ($name) {
                $query->where('name', 'LIKE', '%' . $name . '%');
            }
            
            if ($category_id) {
                $query->where('category_id', $category_id);
            }

            $productsPage = $query->paginate($perPage, ['*'], 'page');

            $previousPageUrl = $productsPage->previousPageUrl();
            $nextPageUrl = $productsPage->nextPageUrl();
            $lastPage = $productsPage->lastPage();

            return response()->json([
                'success' => true,
                'data' => [
                    'products' => $productsPage->items(),
                    'previous_page_url' => $previousPageUrl,
                    'next_page_url' => $nextPageUrl,
                    'last_page' => $lastPage,
                ]
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error('Error getting products' . $th->getMessage());

            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
