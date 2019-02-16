<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Donation;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // Donation::create([
        //         'user_id' => auth()->user()->id,
        //         'category_name' => $paymentDetails->category,
        //         'amount' => $request->amount
        //     ]);

        // dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want

        $user_id = auth()->user()->id;
        $category_name = (($paymentDetails['data'] ['metadata']['category_name'])); 
        $amount = (($paymentDetails['data'] ['amount'])); 

        if($paymentDetails['data']['status'] == 'success'){
            $donation = new Donation; 
            $donation->user_id = $user_id; 
            $donation->category_name = $category_name; 
            $donation->amount = $amount;
            $donation->save();
            return redirect()->route('donations.show', $user_id);
        }else{ 
            return redirect()->route('');
         }
    }
}