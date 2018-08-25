<?php

namespace App;

use App\Observers\ProductObserver;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Set the product price.
     *
     * @param  int  $value
     * @return number
     */
    public function getPriceAttribute($value)
    {
        $price = $value/100;

        $price_formatted = number_format($price, 2);

        return $price_formatted;
    }

    /**
     * Scope a query to only include related products.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
    */
    public function scopeRelatedProducts($query, $attribute, $value, $number=8)
    {
        return $query->inRandomOrder()->get()->whereNotIn($attribute, $value)->take($number);
    }
}
