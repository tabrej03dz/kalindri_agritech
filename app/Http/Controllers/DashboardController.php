<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Product;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        /*
        |--------------------------------------------------------------------------
        | Enquiry Statistics
        |--------------------------------------------------------------------------
        */
        $totalEnquiries = Enquiry::count();

        $todayEnquiries = Enquiry::whereDate(
            'created_at',
            today()
        )->count();

        $dealerEnquiries = Enquiry::where(
            'requirement',
            'Dealership / Bulk Order'
        )->count();

        /*
        |--------------------------------------------------------------------------
        | Product Statistics
        |--------------------------------------------------------------------------
        */
        $totalProducts = Product::count();

        $activeProducts = Product::where(
            'is_active',
            true
        )->count();

        $inactiveProducts = Product::where(
            'is_active',
            false
        )->count();

        $featuredProducts = Product::where(
            'is_featured',
            true
        )->count();

        $lowStockProducts = Product::where(
            'stock',
            '<=',
            5
        )->count();

        $outOfStockProducts = Product::where(
            'stock',
            0
        )->count();

        $totalStock = Product::sum('stock');

        /*
        |--------------------------------------------------------------------------
        | Recent Data
        |--------------------------------------------------------------------------
        */
        $recentEnquiries = Enquiry::latest()
            ->take(6)
            ->get();

        $recentProducts = Product::latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalEnquiries',
            'todayEnquiries',
            'dealerEnquiries',

            'totalProducts',
            'activeProducts',
            'inactiveProducts',
            'featuredProducts',
            'lowStockProducts',
            'outOfStockProducts',
            'totalStock',

            'recentEnquiries',
            'recentProducts'
        ));
    }
}