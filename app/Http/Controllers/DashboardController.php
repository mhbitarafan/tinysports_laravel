<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Order;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $orders = User::find($user_id)->orders;
        return view('dashboard', [
            'orders' => $orders,
             'order_statuses' => Order::$order_statuses,
             'payment_types' => Order::$payment_types,
             'deliver_types' => Order::$deliver_types
             ]);
    }
}
