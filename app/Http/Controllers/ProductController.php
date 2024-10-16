<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
    public function detail($id)
    {
        $details = Product::find($id);
        return view('detail', compact('details'));
    }
    public function search(Request $request){
        $products = Product::where('name', 'like', '%' . $request->input('query') . '%')->get();
        return view('search', compact('products'));
    }
    public function addToCart(Request $request)
    {

        if ($request->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    public static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    public function cartList()
    {
        if (Session::has('user')) {
            $userId = Session::get('user')->id;
            $products = DB::table('cart')
                ->join('products', 'cart.product_id', '=', 'products.id')
                ->where('cart.user_id', $userId)
                ->select('products.*', 'cart.id as cart_id')
                ->get();
            return view('cartlist', compact('products'));
        } else {
            return redirect('/login');
        }
    }
    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    public function orderNow()
    {
       
            $userId = Session::get('user')->id;
            $total = $products = DB::table('cart')
                ->join('products', 'cart.product_id', '=', 'products.id')
                ->where('cart.user_id', $userId)
                ->sum('products.price');
            return view('ordernow', compact('total'));
       
    }
    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        $req->input();
        return redirect('/');
    }
    function myOrders()
    {
        if (Session::has('user')) {
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('myorders', ['orders' => $orders]);
    } else {
        return redirect('/login');
    }
    }
}
