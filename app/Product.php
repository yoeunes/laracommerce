<?php

namespace App;

use App\Observers\ProductObserver;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Bootstrap the application Product service.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::observe(ProductObserver::class);
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
}
