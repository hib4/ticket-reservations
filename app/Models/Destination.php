<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('name', 'LIKE', '%' . $filters['search'] . '%')
                ->orWhere('city', 'LIKE', '%' . $filters['search'] . '%')
                ->orWhere('country', 'LIKE', '%' . $filters['search'] . '%');
        }

        if (isset($filters['id']) ? $filters['id'] : false) {
            return $query->where('id', $filters['id']);
        }
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
