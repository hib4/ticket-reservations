<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('full_name', 'LIKE', '%' . $filters['search'] . '%')
                ->orWhere('destination_id', 'LIKE', '%' . $filters['search'] . '%')
                ->orWhere('nop', 'LIKE', '%' . $filters['search'] . '%');
        }

        if (isset($filters['destination_id']) ? $filters['destination_id'] : false) {
            return $query->where('destination_id', $filters['destination_id']);
        }
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
