<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<style type="text/css">
		.main-container {
			width: 100%; max-width: 1000px; margin: auto; font-family: Arial, Helvetica, sans-serif;
		}
		.block-position {
			display: block;
		}

		.table-shading {
			border:1px solid #000000; padding: 5px; background-color:#d6d6d6;
		}
		.remove_border-top {
			border-top:0;
		}
	</style>
</head>
<body @if(isset($param['flag']) && $param['flag'] == "print") onload="window.print()" @endif>
<div class="main-container">
    <div style="height:0px; display:block;"></div>
    <table cellspadding="0" style="width:100%; font-family: arial;" cellspacing="0">
		<tbody>
			<tr>
				<td style="padding-top: 5px; padding-bottom:5px; vertical-align:top; border-bottom:2px solid #000;">
					<div style="width: 100%;display:inline-block;vertical-align:top;padding-left:10px;">
						<div style="width:25%; display: inline-block;">
							@if(!empty($param['invoice_logo']))
								<img src="{{$param['invoice_logo']}}" alt="Logo" class="rounded" style="height:auto; width:150px;">
							@elseif(!empty($param['invoice_heading']))
								<h3>{{$param['invoice_heading']}}</h3>
							@else
								<h3>Invoice</h3>
							@endif							
						</div>
						<div style="width:70%; display: inline-block; font-size:12px; vertical-align:top; text-align: right;">							
							@if(isset($param['invoice_number']))
								<strong>{{$param['invoice_number']}}</strong><br/>
							@else
								<strong>Invoice #1001</strong><br/>
							@endif
							@if(isset($param['invoice_create_date']))
								<strong>Date: {{$param['invoice_create_date']}}</strong>
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
        <table cellspacing=0 cellspadding=0  style="width:100%; border-collapse: collapse; border-bottom:0px; margin-top: 10px; font-family: arial; font-size:12px;">
			<thead>
				<tr>
                    <th class="table-shading">From Address</th>
					<th class="table-shading">To Address</th>					
				</tr>
			</thead>
			<tbody>                
				<tr>                    		
					<td style="border:1px solid #000000;padding: 5px;">                       					
                        {!! $param['invoice_from_address'] ?? '' !!}
                    </td>
                    <td style="border:1px solid #000000;padding: 5px;">
                        {!! $param['invoice_to_address'] ?? '' !!}
                    </td>					
				</tr>				
			</tbody>
		</table>

        <table cellspacing=0 cellspadding=0  style="width:100%; border-collapse: collapse; border-bottom:0px; margin-top: 10px; font-family: arial; font-size:12px;">
			<thead>
				<tr>
                    <th class="table-shading">#</th>
                    <th class="table-shading">Item Nam</th>
					<th class="table-shading">Qty</th>
					<th class="table-shading">Price</th>
					<th class="table-shading">Total</th>
				</tr>
			</thead>
            <tbody>
                @foreach($itemdetail as $key => $itemInfo)
                    <tr>
                        <td style="border:1px solid #000000;padding: 5px; text-align:center;">						
                            {{$itemInfo['id']}}
                        </td>
                        <td style="border:1px solid #000000;padding: 5px; text-align:center;">						
                            {{$itemInfo['item_name']}}
                        </td>                    
                        <td style="border:1px solid #000000;padding: 5px; text-align:center;">
                            {{$itemInfo['item_qty']}}
                        </td>
                        <td style="border:1px solid #000000;padding: 5px; text-align:center;">
                            {{$itemInfo['item_price']}}
                        </td>
                        <td style="border:1px solid #000000;padding: 5px; text-align:right;">						
                            {{$itemInfo['item_total']}}
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td  style="border:1px solid #000000;padding: 5px; text-align:right;" colspan="4">Sub Total</td>
                    <td style="border:1px solid #000000;padding: 5px; text-align:right;">{{$param['itemSummery']['subtotal']}}</td>
                </tr>
                <tr>
                    <td  style="border:1px solid #000000;padding: 5px; text-align:right;" colspan="4">Tax</td>
                    <td style="border:1px solid #000000;padding: 5px; text-align:right;">{{$param['itemSummery']['tax']}}</td>
                </tr>
                <tr>
                    <td  style="border:1px solid #000000;padding: 5px; text-align:right;" colspan="4">Grand Total</td>
                    <td style="border:1px solid #000000;padding: 5px; text-align:right;">{{$param['itemSummery']['grand_total']}}</td>
                </tr>
            </tbody>
        </table>
    @endif       
</div>
</body>
</html>