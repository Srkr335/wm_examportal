<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>

	<link rel="stylesheet" href="{{ public_path('css/invoice.css') }}" type="text/css"> 

</head>

<body>

  

<table class="table-no-border">
<tr>
        <!-- Logo Section -->
        <td style="width: 20%; text-align: left; vertical-align: top;">
            <img src="{{ public_path('img/logo/centrelogo.jpg') }}" alt="" width="100" height="150" />
        </td>
        <!-- Company Information Section -->
        <td style="width: 80%;">
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
<div style="font-size: 13; text-align: center; color:#60A5FA"><strong>FEE RECEIPT</strong></div>

  

<div class="margin-top">

    <table class="table-no-border">

        <tr>
            <td class="width-70">
            <div><strong>Invoice No: </strong>#{{ str_pad($studentInvoice->invoice_number, 3, '0', STR_PAD_LEFT) }}</div>
                <div><strong>Name : </strong>{{$studentInvoice->student->studentname->name}}</div>
                <div><strong>Address : </strong>{{$studentInvoice->student->address_1}}</div>
                <div><strong>Course : </strong>{{$studentInvoice->course->title}}</div>
                <div><strong>Reg No : </strong>{{$studentInvoice->student->reg_no}}</div>
            </td>

            <td class="width-30" style="text-align: right;">
                <h4>Date: {{ date('d-m-Y',strtotime($studentInvoice->payment_date)) }}</h4>
            </td>

        </tr>

    </table>

</div>

  

<div>

    <table class="product-table">

        <thead>

            <tr>

                <th class="width-10">

                    <strong>SL. NO</strong>

                </th>

                <th class="width-50">

                    <strong>PARTICULARS</strong>

                </th>

                <th class="width-20">

                    <strong>SAC</strong>

                </th>
                <th class="width-20">
                    &#8377;
                </th>

            </tr>

        </thead>

        <tbody>


            <tr>

                <td class="width-10">

                    

                </td>

                <td class="width-50">

                    Installment

                </td>

                <td class="width-20">

                   999293

                </td>
                <td class="width-20">

                    {{$monthlyInstallment}}

                </td>

            </tr>
            <tr>

                <td class="width-10">

                    

                </td>

                <td class="width-50">

                    Installment

                </td>

                <td class="width-20">

                999293

                </td>
                <td class="width-20">

                    

                </td>

            </tr>

        </tbody>

        <tfoot>

            <tr>

                <td class="width-70" colspan="3">

                    <strong>Sub Total:</strong>

                </td>

                <td class="width-25">

                    <strong>{{$courseFee}}</strong>

                </td>

            </tr>

            <tr>

                <td class="width-70" colspan="3">

                    <strong>CGST</strong>(9%):

                </td>

                <td class="width-25">

                    <strong>{{ $totalTax/2}}</strong>

                </td>

            </tr>
            
            <tr>

                <td class="width-70" colspan="3">

                    <strong>SGST</strong>(9%):

                </td>

                <td class="width-25">

                    <strong>{{ $totalTax/2}}</strong>

                </td>

            </tr>
            <tr>

                <td class="width-70" colspan="3">

                    <strong>Total Amount:</strong>

                </td>

                <td class="width-25">

                    <strong>{{$courseFee + $totalTax}}</strong>

                </td>

            </tr>
            <tr>

                <td class="width-70" colspan="3">

                    <strong>Balance Amount:</strong>

                </td>

                <td class="width-25">

                    <strong>{{$balanceDue}}</strong>

                </td>

            </tr>

        </tfoot>

    </table>

</div>

  

<div class="footer-div">

    <p>Thank you, <br/>@ItSolutionStuff.com</p>

</div>

  

</body>

</html>