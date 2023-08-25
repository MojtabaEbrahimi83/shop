<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Meta extends Model
{
    use HasFactory;

    public $timestamps = null;
    protected $fillable=[
        'key',
        'value',
        'metaable_id',
        'metaable_type',
    ];

    public function metaable():MorphTo
    {
        return $this->morphTo();
    }
}
