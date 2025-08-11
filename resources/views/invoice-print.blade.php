<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="{{ public_path('resources/css/invoice-builder.css') }}">
	<style type="text/css">
		.print-invoice-container {
			width: 100%; max-width: 900px; margin: 32px auto; background: #fff; border-radius: 18px; box-shadow: 0 4px 24px rgba(0,0,0,0.09); border: 1.5px solid #e3e3e3; padding: 32px 24px;
		}
		@media print {
			.print-invoice-container { box-shadow: none !important; border: 1px solid #d4d8d6 !important; }
		}
	</style>
</head>
<body @if(isset($param['flag']) && $param['flag'] == "print") onload="window.print()" @endif>
<div class="print-invoice-container">
    <table style="width:100%; font-family: DejaVu Sans, sans-serif; margin-bottom: 24px;">
        <tr>
            <td style="width:30%; vertical-align:top;">
                @if(!empty($param['invoice_logo']))
                    <img src="{{$param['invoice_logo']}}" alt="Logo" style="height:auto; width:120px; border-radius:8px;">
                @elseif(!empty($param['invoice_heading']))
                    <h2 style="margin:0; color:#2d3748; font-weight:700;">{{$param['invoice_heading']}}</h2>
                @else
                    <h2 style="margin:0; color:#2d3748; font-weight:700;">Company Name</h2>
                @endif
            </td>
            <td style="width:70%; text-align:right; vertical-align:top;">
                <div style="font-size:22px; font-weight:700; color:#667eea; margin-bottom:2px;">{{$param['tool_name']}}</div>
                <div style="font-weight:600; color:#555; margin-bottom:2px;"># {{$param['invoice_number'] ?? "1001"}}</div>
                @if(!empty($param['status']))
                    <div style="font-weight:600; margin-bottom:2px; color:{{ strtolower($param['status']) == 'paid' ? '#28a745' : '#e53e3e' }};">
                        {{$param['status']}}
                    </div>
                @endif
                @if(isset($param['invoice_create_date']))
                    <div style="font-weight:500; color:#888;">{{$param['invoice_create_date']}}</div>
                @endif
            </td>
        </tr>
    </table>
    <table style="width:100%; font-family: DejaVu Sans, sans-serif; font-size:15px; margin-bottom: 24px;">
        <tr>
            @if(!empty($param['invoice_from_address']))
                <td style="vertical-align:top; padding-right:24px;">
                    <strong>From:</strong><br>
                    {!! nl2br(e($param['invoice_from_address'])) !!}
                </td>
            @endif
            @if(!empty($param['invoice_to_address']))
                <td style="vertical-align:top;">
                    <strong>To:</strong><br>
                    {!! nl2br(e($param['invoice_to_address'])) !!}
                </td>
            @endif
        </tr>
    </table>
    <table class="invoice-table print-table" style="width:100%; font-family: DejaVu Sans, sans-serif; font-size:15px; border-collapse:collapse; margin-bottom:0;">
        <thead>
            <tr>
                <th>{{$param['tableHeader']['sr'] ?? '#'}}</th>
                <th>{{$param['tableHeader']['item'] ?? 'Item Name'}}</th>
                <th>{{$param['tableHeader']['qty'] ?? 'Qty'}}</th>
                <th>{{$param['tableHeader']['price'] ?? 'Price'}}</th>
                <th>{{$param['tableHeader']['total'] ?? 'Total'}}</th>
            </tr>
        </thead>
        <tbody>
            @php $currencySymbol = $param['currencySymbol'] ?? ""; @endphp
            @foreach($param['itemdetail'] ?? [] as $key => $itemInfo)
                <tr>
                    <td class="text-center">{{$itemInfo['id']}}</td>
                    <td class="text-left">{{$itemInfo['item_name']}}</td>
                    <td class="text-center">{{$itemInfo['item_qty']}}</td>
                    <td class="text-center">{{$currencySymbol}}{{$itemInfo['item_price']}}</td>
                    <td class="text-right">{{$currencySymbol}}{{$itemInfo['item_total']}}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="print-table-summary">
                <td colspan="4" class="text-right">{{$param['itemSummeryHeader']['subtotal'] ?? 'Sub Total'}}</td>
                <td class="text-right">{{$currencySymbol}}{{number_format($param['itemSummery']['subtotal'],2)}}</td>
            </tr>
            @if(!empty($param['itemSummery']['discount']))
            <tr class="print-table-summary">
                <td colspan="4" class="text-right">{{$param['itemSummeryHeader']['discount'] ?? 'Discount'}}</td>
                <td class="text-right">{{$currencySymbol}}{{number_format($param['itemSummery']['discount'],2)}}</td>
            </tr>
            @endif
            <tr class="print-table-summary">
                <td colspan="4" class="text-right">{{$param['itemSummeryHeader']['tax'] ?? 'Tax'}}</td>
                <td class="text-right">{{$currencySymbol}}{{number_format($param['itemSummery']['tax'],2)}}</td>
            </tr>
            <tr class="print-table-grand">
                <td colspan="4" class="text-right font-weight-bold">{{$param['itemSummeryHeader']['grand_total'] ?? 'Grand Total'}}</td>
                <td class="text-right font-weight-bold">{{$currencySymbol}}{{number_format($param['itemSummery']['grand_total'],2)}}</td>
            </tr>
        </tfoot>
    </table>
    @if(!empty($param['itemSummery']['grand_total']) && $param['itemSummery']['grand_total'] > 0)
        <div style="text-align:center; margin-top:18px; font-weight: 600; font-size: 15px; color:#2d3748;">
            With words: {{ ucwords(convertNumberToWord($param['itemSummery']['grand_total'])) }} {{$param['currency']}} Only
        </div>
    @endif
    @if(!empty($param['notes']))
        <div style="width:100%; margin-top: 20px; font-size:15px; color:#444;">
            <strong>Note:</strong><br/> {!! nl2br(e($param['notes'])) !!}
        </div>
    @endif
</div>
<style>
.print-table th, .print-table td {
  border: 1px solid #e3e3e3 !important;
  padding: 12px 8px !important;
}
.print-table th {
  background: #f7f8fa !important;
  color: #2d3748 !important;
  font-weight: 700 !important;
  font-size: 1.05em !important;
}
.print-table tr:nth-child(even) td {
  background: #fafbfc !important;
}
.print-table-summary td {
  background: #f3f4f6 !important;
  font-weight: 600 !important;
}
.print-table-grand td {
  background: #667eea !important;
  color: #fff !important;
  font-weight: 700 !important;
  font-size: 1.08em !important;
}
.text-center { text-align: center !important; }
.text-left { text-align: left !important; }
.text-right { text-align: right !important; }
.font-weight-bold { font-weight: 700 !important; }
</style>
</body>
</html>