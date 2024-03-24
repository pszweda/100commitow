<?php

namespace App\Models\Services\Base;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model {
    use HasFactory, HasUuids, HasTimestamps;

    protected $table = 'services';

    protected $fillable = [
        'name',
        'price',
        'description',
        'team_id',
        'created_at',
    ];
}
