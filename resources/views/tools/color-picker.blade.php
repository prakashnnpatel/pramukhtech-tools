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
<div class="tool-page-container">
    <div class="tool-header mb-4">
        <div class="header-icon"><i class="fas fa-eye-dropper"></i></div>
        <div class="header-title">Advanced Color Picker Tool</div>
        <div class="header-desc">Your Personal Color Lab. Pick any color with ease and get instant HEX and RGB codes. Includes live preview and recent color history for quick access.</div>
    </div>
    <div class="tool-card">
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
    <div class="tool-section">
        <h3 class="font-size-18 font-weight-bold mb-20">Key Features & Benefits:</h3>
        <ul style="line-height: 35px;">
            <li><b>Free Online Advanced Color Picker Tool </b> - Instantly pick any color from screen, images, or design elements.</li>
            <li><b>Get HEX, RGB, HSL & CMYK Codes </b> - Accurate and detailed color formats for designers and developers.</li>
            <li><b>Click to Pick Any Color from Image or Webpage </b> - Use eyedropper functionality to grab any pixel color in real time.</li>
            <li><b>Live Color Preview & Code Copy </b> - Preview selected color and copy color code instantly with one click.</li>
            <li><b>Built-In Palette Generator & History </b> - Save your picked colors and generate custom color palettes on the fly.</li>
            <li><b>Zoomed Pixel View for Precision Picking </b> - Advanced zoom and grid view for pixel-perfect color detection.</li>
            <li><b>Works on All Devices and Browsers </b> - No installation needed. Works smoothly on Chrome, Firefox, Safari, and mobile browsers.</li>
            <li><b>Perfect for UI/UX Designers, Developers, and Artists </b> - Ideal tool for accurate color matching and branding tasks.</li>
        </ul>
    </div>
</div>