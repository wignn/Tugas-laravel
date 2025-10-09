<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function index($id = 0)
    {
        $result = $id + 66;
        return view('data', ['data' => $result]);
    }

    /**
     * Admin only page
     */
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Owner only page
     */
    public function ownerDashboard()
    {
        return view('owner.dashboard');
    }

    /**
     * Admin and Owner page
     */
    public function managementDashboard()
    {
        $user = Auth::user();
        return view('management.dashboard', compact('user'));
    }


    public function produk($parameter)
    {
        $isOdd = $parameter % 2 !== 0;
        
        $alertType = $isOdd ? 'warning' : 'success';
        $alertMessage = $isOdd ? 'Nilai ini adalah ganjil' : 'Nilai ini adalah genap';
        
        return view('produk', [
            'parameter' => $parameter,
            'alertType' => $alertType,
            'alertMessage' => $alertMessage
        ]);
    }
}
