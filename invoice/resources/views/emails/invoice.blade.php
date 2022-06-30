<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style>/* heading */

        h1 {
            font: bold 100% sans-serif;
            letter-spacing: 0.5em;
            text-align: center;
            text-transform: uppercase;
        }

        /* table */

        table {
            font-size: 75%;
            table-layout: fixed;
            width: 100%;
        }

        table {
            border-collapse: separate;
            border-spacing: 2px;
        }

        th, td {
            border-width: 1px;
            padding: 0.5em;
            position: relative;
            text-align: left;
        }

        th, td {
            border-radius: 0.25em;
            border-style: solid;
        }

        th {
            background: #EEE;
            border-color: #BBB;
        }

        td {
            border-color: #DDD;
        }

        body {
            box-sizing: border-box;
            height: 11in;
            margin: 0 auto;
            overflow: hidden;
            padding: 0.5in;
            width: 7.5in;
        }

        body {
            background: #FFF;
            border-radius: 1px;
            box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
        }

        /* header */

        header {
            margin: 0 0 3em;
        }

        header:after {
            clear: both;
            content: "";
            display: table;
        }

        header h1 {
            background: #e40101;
            border-radius: 0.25em;
            color: #FFF;
            margin: 0 0 1em;
            padding: 0.5em 0;
        }

        header address {
            float: left;
            font-size: 95%;
            font-style: normal;
            line-height: 1.25;
            margin: 0 1em 1em 0;
        }

        article address.norm h4 {
            font-size: 125%;
            font-weight: bold;
        }

        article address.norm {
            float: left;
            font-size: 95%;
            font-style: normal;
            font-weight: normal;
            line-height: 1.25;
            margin: 0 1em 1em 0;
        }

        header address p {
            margin: 0 0 0.25em;
        }

        header span, header img {
            display: block;
            float: right;
        }

        header span {
            margin: 0 0 1em 1em;
            max-height: 25%;
            max-width: 60%;
            position: relative;
        }

        header img {
            max-height: 100%;
            max-width: 100%;
        }

        header input {
            cursor: pointer;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            height: 100%;
            left: 0;
            opacity: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        /* article */

        article, article address, table.meta, table.inventory {
            margin: 0 0 3em;
        }

        article:after {
            clear: both;
            content: "";
            display: table;
        }

        article h1 {
            clip: rect(0 0 0 0);
            position: absolute;
        }

        article address {
            float: left;
            font-size: 125%;
            font-weight: bold;
        }

        /* table meta & balance */

        table.meta, table.balance {
            float: right;
            width: 36%;
        }

        table.meta:after, table.balance:after {
            clear: both;
            content: "";
            display: table;
        }

        /* table meta */

        table.meta th {
            width: 40%;
        }

        table.meta td {
            width: 60%;
        }

        /* table items */

        table.inventory {
            clear: both;
            width: 100%;
        }

        table.inventory th:first-child {
            width: 50px;
        }

        table.inventory th:nth-child(2) {
            width: 300px;
        }

        table.inventory th {
            font-weight: bold;
            text-align: center;
        }

        table.inventory td:nth-child(1) {
            width: 26%;
        }

        table.inventory td:nth-child(2) {
            width: 38%;
        }

        table.inventory td:nth-child(3) {
            text-align: right;
            width: 12%;
        }

        table.inventory td:nth-child(4) {
            text-align: right;
            width: 12%;
        }

        table.inventory td:nth-child(5) {
            text-align: right;
            width: 12%;
        }

        /* table balance */

        table.balance th, table.balance td {
            width: 50%;
        }

        table.balance td {
            text-align: right;
        }

        /* aside */

        aside h1 {
            border: none;
            border-width: 0 0 1px;
            margin: 0 0 1em;
        }

        aside h1 {
            border-color: #999;
            border-bottom-style: solid;
        }

        table.sign {
            float: left;
            width: 220px;
        }

        table.sign img {
            width: 100%;
        }

        table.sign tr td {
            border-color: transparent;
        }

        @media print {
            * {
                -webkit-print-color-adjust: exact;
            }

            html {
                background: none;
                padding: 0;
            }

            body {
                box-shadow: none;
                margin: 0;
            }

            span:empty {
                display: none;
            }

            .add, .cut {
                display: none;
            }
        }

        @page {
            margin: 0;
        }</style>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<header>
    <h1>Invoice</h1>
    <address>
        <p>sales@stueysgreenautoclean.com </p>
        <p>Stuey's Green Auto Clean 6705</p>
        <p> 1735 Norman St. Queens, NY 11385 </p>
        <p> P: 1-917-877-0105</p>
    </address>
    <span><img alt="it" src="pdf_logo.png"></span>
</header>
<article>
    <h1>Recipient</h1>
    <address class="norm">
        <h4>{{$invoice->info->charge_to!=null ? $invoice->info->charge_to:''}}</h4>
        <p>{{$invoice->info->send_to!=null ? $invoice->info->send_to:''}}<br>
        </p>
        <p>{{$invoice->info->charge_phone!=null ? $invoice->info->charge_phone:''}}<br></p>
    </address>

    <table class="meta">
        <tbody>
        <tr>
            <th><span>Invoice #</span></th>
            <td><span>{{$invoice->info->invoice_no}}</span></td>
        </tr>
        <tr>
            <th><span>Date</span></th>
            <td><span>{{\Carbon\Carbon::parse($invoice->info->start_date)->toDateString()}}</span></td>
        </tr>
        <tr>
            <th><span>Amount Due</span></th>
            <td><span id="prefix">$</span><span>{{$invoice->grand_total}}</span></td>
        </tr>
        </tbody>
    </table>
    <table class="inventory">
        <thead>
        <tr>
            <th><span>S. No</span></th>
            <th><span>Service</span></th>
            <th><span>Package</span></th>
            <th><span>Amount</span></th>
        </tr>
        </thead>
        <tbody>
        @foreach($invoice->items as $key=>$item)
            <tr>
                <td><span>{{$key+1}}</span></td>
                <td><span>{{$item->item_name}}</span></td>
                <td><span>{{$item->package}}</span></td>
                <td><span data-prefix="">$</span><span>{{$item->fixed_price}}</span></td>
            </tr>
        @endforeach
        @if($invoice->surchages!=null || $invoice->surchages!=0.00)
        <tr>
            <td><span>{{sizeof($invoice->items)+1}}</span></td>
            <td><span>Electronic Surcharges</span></td>
            <td><span></span></td>
            <td><span data-prefix="">$</span><span>{{$invoice->surchages}}</span></td>
        </tr>
            @endif
        </tbody>
    </table>

    <table class="balance">
        <tbody>
        <tr>
            <th><span>Total</span></th>
            <td><span data-prefix="">$</span><span>{{$invoice->grand_total}}</span></td>
        </tr>
        </tbody>
    </table>
</article>
<aside>
    <h1><span>Additional Notes</span></h1>
    <div>
        <p>{{$invoice->notes}}</p>
    </div>
</aside>


</body>
</html>
