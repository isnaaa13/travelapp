<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'role_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    // Check if user has specific permission
    public function hasPermission(string $permission): bool
    {
        return $this->role?->hasPermission($permission) ?? false;
    }

    // Check if user has any of the given permissions
    public function hasAnyPermission(array $permissions): bool
    {
        foreach ($permissions as $permission) {
            if ($this->hasPermission($permission)) {
                return true;
            }
        }
        return false;
    }

    // Check if user has all given permissions
    public function hasAllPermissions(array $permissions): bool
    {
        foreach ($permissions as $permission) {
            if (!$this->hasPermission($permission)) {
                return false;
            }
        }
        return true;
    }

    // Get user's role name
    public function getRoleName(): string
    {
        return $this->role?->name ?? 'No Role';
    }

    // Helper methods for role checking
    public function isAdmin(): bool
    {
        return $this->getRoleName() === 'admin';
    }

    public function isOfficer(): bool
    {
        return $this->getRoleName() === 'guide';
    }

    public function isCustomer(): bool
    {
        return $this->getRoleName() === 'customer';
    }

}
