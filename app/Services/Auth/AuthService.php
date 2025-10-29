<?php

namespace App\Services\Auth;

use App\Models\Role;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Exception;

class AuthService
{
    public function register(array $data): array
    {
        return DB::transaction(function () use ($data) {
            // 1. Create User
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            // 2. Create Tenant (with optional name)
            $tenant = $user->createTenant();

            // 3. Create Owner Role
            $ownerRoleId = $this->createOwnerRole($tenant);

            // 4. Assign tenant + role to user
            $user->role_id = $ownerRoleId;
            $user->tenant()->associate($tenant);
            $user->save();

            // 5. Create Sanctum Token
            $token = $user->createToken('auth_token')->plainTextToken;

            return [
                'user' => $user,
                'token' => $token,
            ];
        });
    }

    public function login(array $credentials): ?array
    {
        if (!Auth::attempt($credentials)) {
            return null;
        }

        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return [
            'user' => $user,
            'token' => $token,
        ];
    }

    public function logout($user): void
    {
        $user->currentAccessToken()->delete();
    }

    protected function createOwnerRole(Tenant $tenant)
    {
        return Role::create([
            'name' => 'Owner',
            'tenant_id' => $tenant->id,
            'description' => 'Owner role with full permissions',
        ])->id;
    }
}
