<?php 
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Session;
 
class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }
    

    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        
        session(['appointmentID' => $request->get('appointmentId')]);
        $productname = $request->get('productname');
        $totalprice = $request->get('total');
        $two0 = "00";
        $total = "$totalprice$two0";
 
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],
                 
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);
 
        return redirect()->away($session->url);
    }
 
    public function success()
    {   

        $appointmentID = session('appointmentID');

        $appointment = Appointment::find($appointmentID);

        if ($appointment) {
            $appointment->update([
                'States' => 'Paid'
            ]);

        Session::flash('success', 'Payment was successful!');

        $appointments = Appointment::all();
        return view('home')->with('Appointments', $appointments);

        }else {
            return redirect()->back()->with('error', 'Appointment not found.');
        }
        
    }
}