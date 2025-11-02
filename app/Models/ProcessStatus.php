<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessStatus extends Model
{
    use HasFactory;

    protected $table = 'process_status';

    protected $fillable = [
        'status',
        'nomination_starts_at',
        'nomination_ends_at',
        'choosing_ends_at',
        'voting_ends_at',
    ];

    protected $casts = [
        'nomination_starts_at' => 'datetime',
        'nomination_ends_at' => 'datetime',
        'choosing_ends_at' => 'datetime',
        'voting_ends_at' => 'datetime',
    ];
}
