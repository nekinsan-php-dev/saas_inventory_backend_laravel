<?php

namespace App\Repositories;

use App\Models\Brand;
use Illuminate\Container\Attributes\Auth;

class BrandRepository
{
     public function all()
    {
        return Brand::where('tenant_id', Auth::user()->tenant_id)
            ->latest()
            ->get();
    }

    public function find($id)
    {
        return Brand::where('tenant_id', Auth::user()->tenant_id)
            ->findOrFail($id);
    }

    public function create(array $data): Brand
    {
        return Brand::create($data);
    }

    public function update(Brand $brand, array $data): Brand
    {
        $brand->update($data);
        return $brand;
    }

    public function delete(Brand $brand): bool
    {
        return $brand->delete();
    }
}
