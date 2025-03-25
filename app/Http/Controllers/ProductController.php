<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // ...existing code...

    public function create()
    {
        return view('addProduct');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaproduk' => 'required|string|max:255',
            'jeniskayu' => 'required|string|max:255',
            'hargaproduk' => 'required|numeric',
            'gambarproduk' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'detailproduk' => 'required|string',
        ]);

        $imagePath = $request->file('gambarproduk')->store('product_images', 'public');

        Product::create([
            'name' => $request->namaproduk,
            'wood_type' => $request->jeniskayu,
            'price' => $request->hargaproduk,
            'image' => $imagePath,
            'details' => $request->detailproduk,
        ]);

        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function index()
    {
        // Ambil semua produk dari database
        $products = Product::all();

        // Kirim data produk ke view
        return view('newlayanan', compact('products'));
    }

    public function addProductView()
    {
        // Ambil semua produk dari database
        $products = Product::all();

        // Kirim data produk ke view
        return view('addProduct', compact('products'));
    }

    public function updateProductView(Request $request, $id)
    {
        // Ambil semua produk dari database
        $products = Product::findOrFail($id);

        // Kirim data produk ke view
        return view('updateProduk', compact('products'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'namaproduk' => 'required|string|max:255',
        'jeniskayu' => 'required|string|max:255',
        'hargaproduk' => 'required|numeric',
        'gambarproduk' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'detailproduk' => 'required|string',
    ]);

    $product = Product::findOrFail($id);

    // Jika ada gambar baru diunggah, simpan dan hapus yang lama
    if ($request->hasFile('gambarproduk')) {
        $imagePath = $request->file('gambarproduk')->store('product_images', 'public');
        $product->image = $imagePath;
    }

        // Update data produk
        $product->name = $request->namaproduk;
        $product->wood_type = $request->jeniskayu;
        $product->price = $request->hargaproduk;
        $product->details = $request->detailproduk;

        $product->save();

        return redirect()->back()->with('success', 'Product updated successfully!');
    }


        // ...existing code...
}
