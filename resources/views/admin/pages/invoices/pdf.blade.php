<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ public_path('css/invoice.css') }}" type="text/css">
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 90%; margin: auto; }
        .header, .footer { text-align: center; }
        .table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .table th, .table td { border: 1px solid #ddd; padding: 8px; }
        .table th { background-color: #f2f2f2; }
        .text-right { text-align: right; }
        .rupee {
    font-family: Arial, sans-serif;
}
    </style>
</head>
<body>

<div class="container">
    
    <!-- Header -->
    <table class="table-no-border">
        <tr>
        <td style="width: 10%; text-align: left; vertical-align: top;">
                <img src="{{ public_path('img/logo/centrelogo.jpg') }}" alt="Logo" width="100" height="100">
            </td>
            <td style="width: 90%;">
            <div>
                <div style="font-size: 15; margin: 0;color:red; text-align: center;"><strong>{{$studentInvoice->student->centre->name}}</strong></div>
            </div>
            <div style="font-size: 12; text-align: center;">{{$studentInvoice->student->centre->address}}</div>
            <div style="font-size: 12; text-align: center;">
                {{$studentInvoice->student->centre->city}} - {{$studentInvoice->student->centre->pincode}}
            </div>
            <div style="font-size: 12; text-align: center;">Phone : {{$studentInvoice->student->centre->mobile}}</div>
            <!-- <div><strong>Email:</strong> </div> -->
        </td>
        </tr>
    </table>

    <h3 style="text-align: center; color:#60A5FA;">FEE RECEIPT</h3>

    <!-- Invoice Details -->
    <table class="table-no-border">
        <tr>
            <td>
                <strong>Invoice No:</strong> #{{ str_pad($studentInvoice->invoice_number, 3, '0', STR_PAD_LEFT) }}<br>
                <strong>Name:</strong> {{ $studentInvoice->student->studentname->name }}<br>
                <strong>Address:</strong> {{ $studentInvoice->student->address_1 }}<br>
                <strong>         </strong>{{ $studentInvoice->student->city }}-{{ $studentInvoice->student->pincode }}<br>
                <strong>Course:</strong> {{ $studentInvoice->course->title }}<br>
                <strong>Reg No:</strong> {{ $studentInvoice->student->reg_no }}
            </td>
            <td class="text-right">
                <strong>Date:</strong> {{ date('d-m-Y', strtotime($studentInvoice->payment_date)) }}
            </td>
        </tr>
    </table>

    <!-- Fee Details -->
    <table class="table">
        <thead>
            <tr>
                <th>SL. NO</th>
                <th>PARTICULARS</th>
                <th>SAC</th>
                <th class="text-right">Amount(&#8377;)</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Installment</td>
                <td>999293</td>
                <td class="text-right">{{$monthlyInstallment}}</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"><strong>Course Fee:</strong></td>
                <td class="text-right"><strong>{{ number_format($courseFee, 2) }}</strong></td>
            </tr>
            <tr>
                <td colspan="3"><strong>CGST (9%):</strong></td>
                <td class="text-right">{{ number_format($totalTax / 2, 2) }}</td>
            </tr>
            <tr>
                <td colspan="3"><strong>SGST (9%):</strong></td>
                <td class="text-right">{{ number_format($totalTax / 2, 2) }}</td>
            </tr>
            <tr>
                <td colspan="3"><strong>Total Amount:</strong></td>
                <td class="text-right"><strong>{{ number_format($courseFee + $totalTax, 2) }}</strong></td>
            </tr>
            <tr>
                <td colspan="3"><strong>Balance Amount:</strong></td>
                <td class="text-right rupee"><strong>{{ number_format($balanceDue, 2) }}</strong></td>
            </tr>
        </tfoot>
    </table><br>

    <!-- Footer -->
    <div class="footer">
        <p>Thank you, <br>{{ $studentInvoice->student->centre->name }}</p>
    </div>

</div>

</body>
</html>
