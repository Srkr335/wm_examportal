<?php

  

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentPayment;
use App\Models\StudentPurchasedCourse;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

  

class InvoiceController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index(Request $request,$id)

    {
        $studentInvoice = StudentPayment::with('student','course')->find($id);
        $studentPayment = StudentPayment::where('student_id',$studentInvoice->student_id)->get();
        $totalPaid = $studentPayment->sum('pay_amount');
        $tax = 18;
        $totalTax = $studentInvoice->pay_amount * $tax/100;
        $paidAmount = $studentInvoice->pay_amount;
        $courseFee =  $paidAmount -  $totalTax;
        
        $purchasedCouse = StudentPurchasedCourse::where('student_id', $studentInvoice->student_id)->first();
        $balanceDue = $purchasedCouse->course_total_amount - $totalPaid;
        if ($purchasedCouse->installment > 0) {
            $monthlyInstallment = $purchasedCouse->course_total_amount / $purchasedCouse->installment;
            $monthlyInstallment = number_format($monthlyInstallment, 2); // Formats to two decimal places
        } else {
            $monthlyInstallment = 0; // Handle case where installment is zero
        }

        // $data = [

        //     [

        //         'quantity' => 2,

        //         'description' => 'Gold',

        //         'price' => '$500.00'

        //     ],

        //     [

        //         'quantity' => 3,

        //         'description' => 'Silver',

        //         'price' => '$300.00'

        //     ],

        //     [

        //         'quantity' => 5,

        //         'description' => 'Platinum',

        //         'price' => '$200.00'

        //     ]

        // ];

       

        $pdf = Pdf::loadView('admin.pages.invoices.pdf', ['studentInvoice' => $studentInvoice,'purchasedCouse' => $purchasedCouse,'monthlyInstallment' => $monthlyInstallment,'courseFee' => $courseFee,'totalTax' =>  $totalTax,'balanceDue' => $balanceDue]);

       

        return $pdf->download();

    }

}