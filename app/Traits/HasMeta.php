<?php

namespace App\Traits;

use App\Models\Meta;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasMeta
{
    public function metas(): MorphMany
    {
        return $this->morphMany(Meta::class, 'metaable');
    }
}
