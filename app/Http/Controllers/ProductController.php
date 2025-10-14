<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Mostra tutti i prodotti attivi
     */
    public function index()
    {
        $products = Product::active()
            ->available()
            ->orderBy('sort_order')
            ->get();

        return view('products.index', compact('products'));
    }

    /**
     * Mostra il dettaglio di un singolo prodotto
     */
    public function show($id)
    {
        $product = Product::active()->findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * API endpoint per ottenere prodotti (per uso AJAX se serve)
     */
    public function apiIndex()
    {
        $products = Product::active()
            ->available()
            ->orderBy('sort_order')
            ->get();

        return response()->json($products);
    }
}
