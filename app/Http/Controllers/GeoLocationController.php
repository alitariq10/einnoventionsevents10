<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Stripe;
class GeoLocationController extends Controller
{
    public function index(Request $request)
    {
            // $ip = '103.239.147.187';
            
            $ip = '202.163.118.203';
             
            // $ip = '52.163.205.146';
           

            // return $ip;
            $currentUserInfo = Location::get($ip);
            
            if($currentUserInfo->countryCode == 'IN')
            {
                return "India";
            }else if($currentUserInfo->countryCode == 'SG'){
               return 'singapore dbs'; 
            }else{
                return "American Dollar";
                // return view('location');
            }
             
    }
    public function handlePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 150,
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "Making test payment." 
        ]);
  
        Session::flash('success', 'Payment has been successfully processed.');
          
        return back();
    }
    public function store(Request $request)
    {
        $input = $request->all();
  
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
  
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
          
        Session::put('success', 'Payment successful');
        return redirect()->back();
    }
}
