<?php

namespace App\Http\Controllers;

use App\Models\SeminarRegistration;
use Xenon\Paystation\Paystation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
//         $invoice_no1 = Str::uuid()->toString();
//         $invoice_no = rand(111111, 999999). time();
// dd($invoice_no);
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'mobile' => 'required|string|max:20',
                'diseases' => 'required|string|max:255',
                'address' => 'required|string',
                'age' => 'required|integer',
                'comment' => 'nullable|string',
            ]);
            $config = [
                'merchantId' => config('paystation.merchant_id'),
                'password' => config('paystation.merchant_password')
            ];

            $invoice_no ='AWC420'. rand(111111, 999999). time();
            $cust_name = $request->input('name');
            $cust_phone = $request->input('mobile');
            $cust_address = $request->input('address');
            $cust_age = $request->input('age');
            $cust_comment = $request->input('comment');
            $cust_diseases = $request->input('diseases');

            $seminarRegistration = new SeminarRegistration();
            $seminarRegistration->invoice_number = $invoice_no;
            $seminarRegistration->name = $cust_name;
            $seminarRegistration->mobile = $cust_phone;
            $seminarRegistration->address = $cust_address;
            $seminarRegistration->age = $cust_age;
            $seminarRegistration->comment = $cust_comment;
            $seminarRegistration->diseases = $cust_diseases;

            $seminarRegistration->save();

            $pay = new Paystation($config);
            $pay->setPaymentParams([
                'invoice_number' => $invoice_no,
                'currency' => "BDT",
                'payment_amount' => 1,
                'reference' => "AWC",
                'cust_name' => $cust_name,
                'cust_phone' => $cust_phone,
                'cust_email' => "awc@gmail.com",
                'cust_address' => $cust_address,
                'callback_url' => route('payment.verify'),
                'checkout_items' => "orderItems"
            ]);

            $pay->payNow(); //will automatically redirect to gateway payment page


        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function verifyPayment(Request $request)
    {

        if ($request->trx_id == null) {
            return redirect()->back()->with('error', 'Transaction Failed!');
        }

        $config = [
            'merchantId' => config('paystation.merchant_id'),
            'password' => config('paystation.merchant_password')
        ];

        $pay = new Paystation($config);

        $responseData  = $pay->verifyPayment($request->invoice_number, $request->trx_id); //this will retrieve response as json

        $response = json_decode($responseData, true);

        if ($response['status'] == 'success' && $response['status_code'] == 200) {
            $userData = SeminarRegistration::where('invoice_number',$request->invoice_number)->first();
            $userData->status = 'paid';
            $userData->trx_id= $request->trx_id;
            $userData->save();
            //store payment transaction and order information
            echo 'store payment transaction';

            return redirect()->route('seeinfo')->with('success', 'Registration successfully, Thyank You');

        } else {
            return redirect()->back()->with('error', 'Transaction Failed!');
        }
    }
}
