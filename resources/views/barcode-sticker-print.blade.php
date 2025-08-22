<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Barcode Stickers</title>
	<style>
		@page { margin: 10mm; }
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			font-size: 12px;
		}

		.sticker-table {
			border-collapse: collapse; /* reliable in Dompdf */
			margin: 0 auto; /* center within printable area */
		}
		.sticker-table td {
			border: 1px solid #cccccc;
			vertical-align: middle;
			text-align: center;
			/* no padding here; use inner wrapper to avoid width overflow */
		}

		.cell-inner {
			margin: 1.5mm; /* inner gutter without affecting table width */
		}

		.barcode-image {
			display: block;
			margin: 0 auto;
			max-width: 100%;
		}
		.barcode-text {
			font-family: monospace;
			margin-top: 1mm;
			word-break: break-all;
		}
		.no-text .barcode-text { display: none; }
		.page-break { page-break-before: always; }
	</style>
</head>
<body>
	@php
		$rows           = max(1, (int) $rowsPerPage);
		$cols           = max(1, (int) $columnsPerPage);
		$totalBarcodes  = count($barcodes);
		$perPage        = $rows * $cols;
		$totalPages     = (int) ceil($totalBarcodes / $perPage);
		$showTextFlag   = (string)$showText === '1';

		// Printable A4 inner size after margins (10mm each side): 210-20=190mm width, 297-20=277mm height
		// Use a slightly smaller width to prevent right-edge clipping due to rounding
		$innerWidthMm   = 189.0; // was 190.0
		$innerHeightMm  = 277.0;
		$cellWidthMm    = $innerWidthMm / $cols;
		$cellHeightMm   = $innerHeightMm / $rows;
		$textHeightMm   = $showTextFlag ? 8.0 : 0.0; // space allocation for text
		// Inner wrapper margins (top+bottom ≈ 3mm)
		$imgMaxHeightMm = max(10.0, $cellHeightMm - ($textHeightMm + 6.0));
		$textFontPt     = (int) $textSize;
	@endphp

	@for($p = 0; $p < $totalPages; $p++)
		@if($p > 0)
			<div class="page-break"></div>
		@endif

		<table class="sticker-table" style="width: {{ number_format($innerWidthMm, 2, '.', '') }}mm;">
			@for($r = 0; $r < $rows; $r++)
				<tr>
					@for($c = 0; $c < $cols; $c++)
						@php
							$idx = $p * $perPage + ($r * $cols + $c);
						@endphp
						@if($idx < $totalBarcodes)
							<td class="sticker-cell{{ $showTextFlag ? '' : ' no-text' }}" style="width: {{ number_format($cellWidthMm, 2, '.', '') }}mm; height: {{ number_format($cellHeightMm, 2, '.', '') }}mm;">
								<div class="cell-inner">
									<img src="{{ $barcodes[$idx]['image'] }}" alt="{{ $barcodes[$idx]['data'] }}" class="barcode-image" style="max-height: {{ number_format($imgMaxHeightMm, 2, '.', '') }}mm;">
									@if($showTextFlag)
										<div class="barcode-text" style="font-size: {{ $textFontPt }}pt;">{{ $barcodes[$idx]['data'] }}</div>
									@endif
								</div>
							</td>
						@else
							<td class="sticker-cell" style="width: {{ number_format($cellWidthMm, 2, '.', '') }}mm; height: {{ number_format($cellHeightMm, 2, '.', '') }}mm;"></td>
						@endif
					@endfor
				</tr>
			@endfor
		</table>
	@endfor
</body>
</html>
