<style>    
    .input-row label {
      width: 80px;
      font-weight: bold;
    }
    .color-preview {
      width: 60px;
      height: 60px;
      border: 2px solid #ccc;
      border-radius: 6px;
      margin-top: 10px;
    }

    .recent-colors {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin-top: 5px;
    }
    .recent-color {
      width: 30px;
      height: 30px;
      border: 1px solid #aaa;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
<h1 class="font-size-18 font-weight-bold">Advanced Color Picker Tool</h1>
<p>Your Personal Color Lab</p>
<p>Pick any color with ease and get instant HEX and RGB codes. Includes live preview and recent color history for quick access.</p>
<div class="card">
  <div class="card-body">
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-9">
                    <div class="form-group">
                        <label for="colorInput">Pick Color:</label>              
                        <input type="color" class="form-control" id="colorInput" style="width:100%;height:50px;" value="#ff0000">                
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group mt-4">                        
                        <div class="color-preview" id="colorPreview"></div>
                    </div>
                </div>
				<div class="col-lg-12">
					<div class="form-group">
						<label>Recent Colors:</label>
						<div class="recent-colors" id="recentColors"></div>
					</div>
				</div>
            </div>
        </div> 
        <div class="col-lg-6">
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
						<label for="hexCode">Hex:</label>
						<input type="text" id="hexCode" value="#684DF4" class="form-control">
					</div>
				</div>
				<div class="col-lg-12">
					<div class="form-group">
						<label for="rgbCode">RGB:</label>
						<input type="text" id="rgbCode" value="rgb(104, 77, 244)" class="form-control">
					</div>
				</div>
			</div>
        </div>		
    </div>
  </div>
</div>