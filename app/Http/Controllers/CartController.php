<?php

namespace App\Http\Controllers;
use App\Models\Product; 

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not found'], 404);
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->product,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->photo
            ];
        }

        session()->put('cart', $cart);

        return response()->json(['success' => true, 'message' => 'Product added to cart']);
    }

    public function showCart()
    {
        $cart = session()->get('cart', []);
        return view('CartPage', compact('cart'));
    }

    public function removeFromCart(Request $request, $id)
    {
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
        return response()->json(['success' => true, 'message' => 'Product removed from cart']);
    }

    return response()->json(['success' => false, 'message' => 'Product not found in cart']);
    }

    public function applyPromo(Request $request)
    {
    $promoCode = $request->input('promoCode');

    if ($promoCode === 'GarageGemsMantap') {
        $cart = session()->get('cart', []);

        if (!session()->has('promo_applied')) {
            // Limit promo to the first three users
            $promoCount = session()->get('promo_count', 0);
            if ($promoCount < 3) {
                $promoCount++;
                session()->put('promo_count', $promoCount);
            } else {
                return response()->json(['success' => false, 'message' => 'Promo limit reached']);
            }

            $cartTotal = array_sum(array_column($cart, 'price'));

            $discountedTotal = $cartTotal * 0.5;

            session()->put('cartTotal', $discountedTotal);
            session()->put('promo_applied', true); // Mark promo as applied

            return response()->json([
                'success' => true,
                'message' => 'Promo applied successfully',
                'cartTotal' => 'Rp ' . number_format($discountedTotal, 0, ',', '.')
            ]);
        } else {
            return response()->json(['success' => false, 'message' => 'Promo already applied']);
        }
    }

    return response()->json(['success' => false, 'message' => 'Invalid promo code']);
    }

}
