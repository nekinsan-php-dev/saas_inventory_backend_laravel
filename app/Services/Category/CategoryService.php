<?php

namespace App\Services\Category;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryService
{
    protected CategoryRepository $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->all();
    }

    public function getById(string $id)
    {
        return $this->repository->find($id);
    }

    public function create(array $data): Category
    {
        $data['created_by'] = Auth::id();
        $data['tenant_id'] = Auth::user()->tenant_id ?? null;

        return DB::transaction(function () use ($data) {
            return $this->repository->create($data);
        });
    }

    public function update(Category $category, array $data): Category
    {
        return DB::transaction(function () use ($category, $data) {
            return $this->repository->update($category, $data);
        });
    }

    public function delete(Category $category): bool
    {
        return DB::transaction(function () use ($category) {
            return $this->repository->delete($category);
        });
    }
}