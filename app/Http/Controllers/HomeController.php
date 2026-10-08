<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(Request $request): View
    {
        // $user = User::find(1);
        // $user->update(['email' => 'kalindriagritechprivatelimited@gmail.com', 'password' => Hash::make('Kalindri@agritech')]);

        /*
        |--------------------------------------------------------------------------
        | Home Page Products
        |--------------------------------------------------------------------------
        |
        | Home page par sirf 8 active products dikhayenge.
        |
        */

        $products = Product::query()
            ->where('is_active', true)
            ->orderByDesc('is_featured')
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->limit(8)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Total Active Product Count
        |--------------------------------------------------------------------------
        |
        | Hero section me actual total products count dikhane ke liye.
        |
        */

        $totalProducts = Product::query()
            ->where('is_active', true)
            ->count();

        /*
        |--------------------------------------------------------------------------
        | Selected Product For Enquiry
        |--------------------------------------------------------------------------
        |
        | Product detail page se enquiry button click karne par
        | ?product=Product Name parameter aa sakta hai.
        |
        */

        $selectedProduct = null;

        if ($request->filled('product')) {
            $selectedProduct = trim($request->product);
        }

        return view('home', compact(
            'products',
            'totalProducts',
            'selectedProduct'
        ));
    }
}