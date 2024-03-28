<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\StripeClient;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {

        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function checkout()
    {
    }


    public function success(Request $request)
    {
    }

    public function cancel()
    {
    }

    public function webhook()
    {
    }
}
