<?php

namespace App\Traits;

use Couchbase\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasUser
{
    public function User():BelongsTo
    {
        return $this->belongsTO(User::class);
    }
}
