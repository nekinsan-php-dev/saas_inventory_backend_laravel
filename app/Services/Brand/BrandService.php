<?php

namespace App\Services\Brand;

use App\Repositories\BrandRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class BrandService
{
    protected BrandRepository $brands;

    public function __construct(BrandRepository $brands)
    {
        $this->brands = $brands;
    }

    public function list()
    {
        return $this->brands->all();
    }

    public function store(array $data)
    {
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $validated = $validator->validated();
        $validated['tenant_id'] = Auth::user()->tenant_id;
        $validated['created_by'] = Auth::id();

        return $this->brands->create($validated);
    }

    public function update($id, array $data)
    {
        $brand = $this->brands->find($id);

        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return $this->brands->update($brand, $validator->validated());
    }

    public function destroy($id)
    {
        $brand = $this->brands->find($id);
        return $this->brands->delete($brand);
    }

    public function show($id)
    {
        return $this->brands->find($id);
    }
}
