<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $intent = auth()->user()->createSetupIntent();
        return view('payment.show', compact('product', 'intent'));
    }

    public function purchase(Request $request, Product $product)
    {
        $user          = $request->user();
        $paymentMethod = $request->input('payment_method');

        try {
            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($paymentMethod);
            $user->charge($product->price * 100, $paymentMethod);        
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }

        // Here, complete the order, like, send a notification email
        $user->notify(new OrderProcessed($product)); 

        return back()->with('message', 'Product purchased successfully!');
    }



}