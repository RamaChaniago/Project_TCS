<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    /**
     * Display the payment page with QR code.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Generate a unique order ID
        $orderId = 'ORD-' . strtoupper(Str::random(10));
        
        // In a real application, you would:
        // 1. Fetch the user's order details from the database
        // 2. Check if the payment is pending
        // 3. Get the actual order total from the database
        
        // For now, we're using mock data
        $orderData = [
            'order_id' => $orderId,
            'total_amount' => 1485000, // Rp 1,485,000
            'course_name' => 'TOEFL Preparation Package',
            'payment_method' => request('method', 'qris'),
            'expiry_time' => now()->addDay()->format('Y-m-d H:i:s')
        ];
        
        return view('Payment.Payment', compact('orderData'));
    }

    /**
     * Process payment and store in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'payment_method' => 'required|string|in:bank-transfer,credit-card,e-wallet,qris',
            'order_id' => 'required|string'
        ]);
        
        // In a real application, you would:
        // 1. Create a payment record in the database
        // 2. Update order status
        // 3. Integrate with actual payment gateway
        
        // Mock successful payment
        session()->flash('success', 'Payment process initiated. Please complete the payment using the QR code.');
        
        // Redirect to the payment page with the payment method
        return redirect()->route('payment.index', ['method' => $request->payment_method]);
    }

    /**
     * Check payment status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkStatus(Request $request)
    {
        // In a real application, this would check with your payment provider
        // For demo purposes, we'll simulate a payment check
        
        $status = ['status' => 'pending'];
        
        // Simulate occasional successful payments (10% chance)
        if (rand(1, 10) === 1) {
            $status = ['status' => 'paid'];
        }
        
        return response()->json($status);
    }

    /**
     * Mark payment as successful (for testing).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function markPaid(Request $request)
    {
        // This is for demonstration only
        // In production, payment confirmation would come from your payment gateway
        
        return redirect()->route('payment.success');
    }

    /**
     * Show payment success page.
     *
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        return view('Payment.Success');
    }
}