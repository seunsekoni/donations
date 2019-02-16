<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Donation;
use Session;
use Auth;

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

        $user_id = Auth::user()->id;
        $category_name = (($paymentDetails['data'] ['metadata']['category_name'])); 
        $amount = (($paymentDetails['data'] ['amount'])); 

        if($paymentDetails['data']['status'] == 'success'){

            // save returned data from paystack into database
            $donation = new Donation; 
            $donation->user_id = $user_id; 
            $donation->category_name = $category_name; 
            $donation->amount = $amount;
            $donation->save();
            
            Session::flash('success', 'Donation was successful, You just saved a life!');
            return redirect()->route('donations.success', $user_id);
        }else{ 
            Session::flash('error', 'Donation was not successful, Please try again');
            return redirect()->route('donations.show', $user_id);
         }
    }
}