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
	@if(!empty($param['invoice_logo']) || !empty($param['invoice_heading']))
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
								@endif							
							</div>						
						</div>
					</td>
				</tr>			
			</tbody>
		</table>
	@endif
    @if(!empty($param))
		@php 
            $documentContent = $param['document_content'] ?? "";
        @endphp

        <div style="width:100%; margin-top:10px;"">
            {!!$documentContent!!}
        </div>
    @endif       
</div>
</body>
</html>