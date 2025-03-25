<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    // ...existing code...

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image_path')->store('portfolio_images', 'public'); // Perbaiki nama input file

        Portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Portfolio added successfully!');
    }

    public function index()
    {
        // Ambil semua produk dari database
        $portfolios = Portfolio::all();

        // Kirim data produk ke view
        return view('newhome', compact('portfolios'));
    }

    public function addPortfolioView()
    {
        // Ambil semua produk dari database
        $portfolios = Portfolio::all();

        // Kirim data produk ke view
        return view('addPortfolio', compact('portfolios'));
    }

    // ...existing code...
}
