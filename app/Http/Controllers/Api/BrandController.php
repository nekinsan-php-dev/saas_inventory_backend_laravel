<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Brand\BrandService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class BrandController extends Controller
{
    protected BrandService $brands;

    public function __construct(BrandService $brands)
    {
        $this->brands = $brands;
    }

    public function index(): JsonResponse
    {
        $data = $this->brands->list();
        return response()->json($data);
    }

    public function store(Request $request): JsonResponse
    {
        $brand = $this->brands->store($request->all());
        return response()->json($brand, 201);
    }

    public function show(string $id): JsonResponse
    {
        $brand = $this->brands->show($id);
        return response()->json($brand);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $brand = $this->brands->update($id, $request->all());
        return response()->json($brand);
    }

    public function destroy(string $id): JsonResponse
    {
        $this->brands->destroy($id);
        return response()->json(['message' => 'Brand deleted successfully']);
    }
}
