<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notifications\SendEmail;
use App\Notifications\CustomEmail;

use App\Order;
use Auth;

class EmailController extends Controller
{
    public function index()
    {
      $users = User::all();
      return view('index')->with('users', $users);
    }
    public function send_email(Request $request)
    {
         $user = User::find($request->id);
         $data = [
             'product_price' => 200,
             'product_title'    => 'Samsung Galaxy'
         ];

         //Send an email to user
         $user->notify(new SendEmail($user, $data));
         return redirect('/');
    }

    public function send_custom(Request $request)
    {
        $user = User::find(Auth::id());
        $order = new Order;
        $order->shipping_address = $request->shipping_address;
        $order->phone_number = $request->phone_number;
        $order->price = $request->price;
        $order->user_id = $user->id;
        $order->save();

         //Send an email to user
         $user->notify(new CustomEmail($user, $order));
         return redirect('/');
    }

}
