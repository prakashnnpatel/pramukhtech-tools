<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<style type="text/css">
		.main-container {
			width: 100%; max-width: 1000px; margin: auto; font-family: DejaVu Sans, sans-serif;
		}
		.block-position {
			display: block;
		}

		.table-shading {
			border:1px solid #d4d8d6; padding: 10px; background-color:#e3e3e3; color: #000;
		}
		.remove_border-top {
			border-top:0;
		}
	</style>
</head>
<body @if(isset($param['flag']) && $param['flag'] == "print") onload="window.print()" @endif>
<div class="main-container">
    <div style="height:0px; display:block;"></div>
    <table cellspadding="0" style="width:100%; font-family: DejaVu Sans, sans-serif;" cellspacing="0">
		<tbody>
			<tr>
				<td style="padding-top: 5px; padding-bottom:5px; vertical-align:top; border-bottom:1px solid #d4d8d6;">
					<div style="width: 100%;display:inline-block;vertical-align:top;padding-left:10px;">
						<div style="width:25%; display: inline-block;vertical-align:top;">
							@if(!empty($param['invoice_logo']))
								<img src="{{$param['invoice_logo']}}" alt="Logo" class="rounded" style="height:auto; width:150px;">
							@elseif(!empty($param['invoice_heading']))
								<h3>{{$param['invoice_heading']}}</h3>
							@else
								<h3>Invoice</h3>
							@endif							
						</div>
						<div style="width:70%; display: inline-block; font-size:14px; vertical-align:top; text-align: right;">							
							<div style="font-size:22px; font-weight:bold; margin-bottom:2px; color:#696969;">Invoice</div>
							<div style="font-weight:bold; margin-bottom:2px; color:#696969;"># {{$param['invoice_number'] ?? "1001"}}</div>
							@if(!empty($param['status']) && strtolower($param['status']) == "paid")
								<div style="font-weight:bold; margin-bottom:2px; color:green;">{{$param['status']}}</div>
							@else
								<div style="font-weight:bold; margin-bottom:2px; color:red;">{{$param['status']}}</div>
							@endif
							@if(isset($param['invoice_create_date']))
								<div style="font-weight:bold; color:#696969;">{{$param['invoice_create_date']}}</div>
							@endif
						</div>
					</div>
				</td>
			</tr>			
		</tbody>
	</table>
    @if(!empty($param))
		@php 
            $itemdetail = $param['itemdetail'] ?? [];
        @endphp
        <table cellspacing=0 cellspadding=0  style="width:100%; border-collapse: collapse; border-bottom:0px; margin-top: 20px; font-family: DejaVu Sans, sans-serif; font-size:14px;">
			<thead>
				<tr>
					@if(!empty($param['invoice_from_address']))
	                    <th style="text-align:left; ">From:</th>
					@endif
					@if(!empty($param['invoice_to_address']))
						<th style="text-align:left; ">To:</th>
					@endif
				</tr>
			</thead>
			<tbody>
				<tr>
					@if(!empty($param['invoice_from_address']))
						@php
							$param['invoice_from_address'] = nl2br(e($param['invoice_from_address']));
						@endphp
						<td style="padding: 5px; line-height:18px; vertical-align: top;">
							{!! $param['invoice_from_address'] !!}
						</td>
					@endif

					@if(!empty($param['invoice_to_address']))
						@php
							$param['invoice_to_address'] = nl2br(e($param['invoice_to_address']));
						@endphp
						<td style="padding: 5px; line-height:18px; vertical-align: top;">
							{!! $param['invoice_to_address'] !!}
						</td>
					@endif
				</tr>
			</tbody>
		</table>

        <table cellspacing=0 cellspadding=0  style="width:100%; border-collapse: collapse; border-bottom:0px; margin-top: 20px; font-family: DejaVu Sans, sans-serif; font-size:14px;">
			<thead>
				<tr>
                    <th class="table-shading">{{$param['tableHeader']['sr'] ?? '#'}}</th>
                    <th class="table-shading">{{$param['tableHeader']['item'] ?? 'Item Name'}}</th>
					<th class="table-shading">{{$param['tableHeader']['qty'] ?? 'Qty'}}</th>
					<th class="table-shading">{{$param['tableHeader']['price'] ?? 'Price'}}</th>
					<th class="table-shading">{{$param['tableHeader']['total'] ?? 'Total'}}</th>
				</tr>
			</thead>
            <tbody>
                @foreach($itemdetail as $key => $itemInfo)
                    <tr>
                        <td style="border:1px solid #d4d8d6;padding: 10px; text-align:center;">
                            {{$itemInfo['id']}}
                        </td>
                        <td style="border:1px solid #d4d8d6;padding: 10px; text-align:center; text-align:left;">
                            {{$itemInfo['item_name']}}
                        </td>                    
                        <td style="border:1px solid #d4d8d6;padding: 10px; text-align:center;">
                            {{$itemInfo['item_qty']}}
                        </td>
                        <td style="border:1px solid #d4d8d6;padding: 10px; text-align:center;">
                            {{$itemInfo['item_price']}}
                        </td>
                        <td style="border:1px solid #d4d8d6;padding: 10px; text-align:right;">
                            {{$itemInfo['item_total']}}
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td  style="border:1px solid #d4d8d6;padding: 10px; text-align:right;" colspan="4">{{$param['itemSummeryHeader']['subtotal'] ?? 'Sub Total'}}</td>
                    <td style="border:1px solid #d4d8d6;padding: 10px; text-align:right;">{{$param['itemSummery']['subtotal']}}</td>
                </tr>
                <tr>
                    <td  style="border:1px solid #d4d8d6;padding: 10px; text-align:right;" colspan="4">{{$param['itemSummeryHeader']['tax'] ?? 'Tax'}}</td>
                    <td style="border:1px solid #d4d8d6;padding: 10px; text-align:right;">{{$param['itemSummery']['tax']}}</td>
                </tr>
                <tr>
                    <td  style="border:1px solid #d4d8d6;padding: 10px; text-align:right; font-weight:bold;" colspan="4">{{$param['itemSummeryHeader']['grand_total'] ?? 'Grand Total'}}</td>
                    <td style="border:1px solid #d4d8d6;padding: 10px; text-align:right; font-weight:bold;">{{$param['itemSummery']['grand_total']}}</td>
                </tr>
            </tbody>
        </table>
		@if(!empty($param['itemSummery']['grand_total']) && $param['itemSummery']['grand_total'] > 0)
			<div style="text-align:center; margin-top:15px; font-weight: bold;">
				With words: {{ ucwords(convertNumberToWord($param['itemSummery']['grand_total'])) }} Rupees Only
			</div>
		@endif

		<div style="text-align:center; margin-top:15px;">
			Thank you for your business :)
		</div>

		<div style="text-align:center; margin-top:15px; color:#696969; font-size:11px;">
			<p>The invoice has been generated through <a href="https://www.toolhubspot.com/" title="ToolHubSpot">ToolHubSpot.com</a></p>
		</div>
    @endif       
</div>
</body>
</html>