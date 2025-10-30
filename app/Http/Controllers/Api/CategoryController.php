<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Category\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected CategoryService $service;

    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $categories = $this->service->getAll();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        $category = $this->service->create($validated);
        return response()->json($category, 201);
    }

    public function show(string $id)
    {
        $category = $this->service->getById($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        return response()->json($category);
    }

    public function update(Request $request, string $id)
    {
        $category = $this->service->getById($id);
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        $updated = $this->service->update($category, $validated);
        return response()->json($updated);
    }

    public function destroy(string $id)
    {
        $category = $this->service->getById($id);
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $this->service->delete($category);
        return response()->json(['message' => 'Category deleted successfully']);
    }
}
