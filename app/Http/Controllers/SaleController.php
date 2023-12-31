<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class SaleController extends Controller
{
    public function create(Request $req)
    {
        try {
            $userId = auth()->user()->id;

            $validator = Validator::make($req->all(), [
                'address' => ['required', 'string', 'min:4'],
                'phone' => ['required', 'string'],
                'orders' => ['required', 'array'],
                'orders.*.product_id' => ['required', 'integer', 'exists:products,id'],
                'orders.*.quantity' => ['required', 'integer', 'min:1']
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
            }

            $validData = $validator->validated();

            DB::beginTransaction();

            $newSale = Sale::create([
                'address' => $validData['address'],
                'phone' => $validData['phone'],
                'user_id' => $userId,
                'status' => 'pending',
            ]);

            foreach ($validData['orders'] as $orderData) {
                $product = Product::find($orderData['product_id']);
                $order = new Order([
                    'product_id' => $orderData['product_id'],
                    'quantity' => $orderData['quantity'],
                    'price' => $product->price,
                ]);

                $newSale->orders()->save($order);
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'data' => [
                    'sale' => $newSale,
                ]
            ], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            Log::error('Error while creating sale' . $th->getMessage());

            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function findByUser()
    {
        try {
            $userId = auth()->user()->id;

            // Product price excluded
            $sales = Sale::where('user_id', $userId)
                ->with(['orders.product' => function ($query) {
                    $query->select('id', 'name', 'description');
                }])
                ->get();

            return response()->json([
                'success' => true,
                'data' => [
                    'sales' => $sales,
                ]
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error('Error while finding user sales' . $th->getMessage());

            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function findAll()
    {
        try {
            $perPage = 10;

            $salesPage = Sale::with(['orders.product' => function ($query) {
                $query->select('id', 'name', 'description');
            }])
                ->paginate($perPage, ['*'], 'page');

            $previousPageUrl = $salesPage->previousPageUrl();
            $nextPageUrl = $salesPage->nextPageUrl();
            $lastPage = $salesPage->lastPage();


            return response()->json([
                'success' => true,
                'data' => [
                    'sales' => $salesPage->items(),
                    'previous_page_url' => $previousPageUrl,
                    'next_page_url' => $nextPageUrl,
                    'last_page' => $lastPage,
                ]
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error('Error while finding user sales' . $th->getMessage());

            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
