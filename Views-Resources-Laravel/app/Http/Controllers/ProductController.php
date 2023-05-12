<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    $product = [
        [
            'id' => 1,
            'name' => 'Product 1',
            'price' => 10.99,
            'description' => 'Description of Product 1',
        ],
        [
            'id' => 2,
            'name' => 'Product 2',
            'price' => 19.99,
            'description' => 'Description of Product 2',
        ],
        [
            'id' => 3,
            'name' => 'Product 3',
            'price' => 5.99,
            'description' => 'Description of Product 3',
        ],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos campos
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        // Criação do produto
        $product = Product::create($validatedData);

        return redirect()->route('products.show', $product->id)
            ->with('success', 'Produto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validação dos campos
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        // Atualização do produto
        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->route('products.show', $product->id)
            ->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Produto apagado com sucesso!');
    }
}
