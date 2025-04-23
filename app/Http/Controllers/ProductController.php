<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view("products.index", compact("products"));
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
    public function store(StoreProductRequest $request)
    {
        // $messages = [
        //     "required" => "El campo :attribute es requerido",
        //     "numeric" => "El campo :attribute debe ser un número",
        //     "min" => "El campo :attribute debe ser mayor a :min",
        //     "max" => "El campo :attribute debe ser menor a :max",
        //     "string" => "El campo :attribute debe ser una cadena de texto",
        // ];

        // $v = $request->validate([
        //     'name' => 'required',
        //     'price' => 'required|numeric|min:0',
        //     'description' => 'required',
        // ], $messages);

        $validated = $request->validated();

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('products.index')->with('success', 'Producto creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("products.edit", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route("products.index")->with("success", "Producto actualizado con éxito");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route("products.index")->with("success", "Producto eliminado con éxito");
    }
}
