<?php

namespace App\Events;

use App\Models\Ingredient;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class IngredientDecreasesEvent
{
    use Dispatchable,SerializesModels;

    public function __construct(public Ingredient $ingredient)
    {

    }
}