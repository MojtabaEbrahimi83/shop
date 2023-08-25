<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
//        $user =User::where('id','=',3)->first();
        $user = User::with(['metas'])->find(3);

        dd($user->metas()->where('key','=','age')->first()->value);

        $this->assertTrue(true);
    }
}
