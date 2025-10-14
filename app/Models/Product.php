<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'stripe_payment_link',
        'is_active',
        'stock_available'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
        'stock_available' => 'boolean'
    ];

    /**
     * Scope per ottenere solo prodotti attivi
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope per prodotti disponibili
     */
    public function scopeAvailable($query)
    {
        return $query->where('stock_available', true);
    }

    /**
     * Formatta il prezzo in euro
     */
    public function getFormattedPriceAttribute()
    {
        return '€ ' . number_format($this->price, 2, ',', '.');
    }
}
