<div class="sidebar">
  <div> 
    <span class="sidebar-toggle" title="Toggle Sidebar">
        <i class="fas fa-bars"></i>
    </span>
    <div class="sidebar-logo text-center" style="display: block !important;">
        <a href="{{route('toollist')}}" style="text-decoration: none;"><h5 style="color: #684DF4;font-weight: bolder;">Tools Hubspot</h5></a>        
    </div>
    <div class="sidebar-search">
      <input type="text" id="sidebarSearch" placeholder="Search..." class="sidebar-search-input" />
    </div>
    <ul class="sidebar-menu" id="sidebarMenu">
      <li class="{{$toolKey == 'timezone' ? 'active' : ''}}">
        <a href="{{route('toollist', 'timezone')}}" title="Timezone Converter">
          <i class="fas fa-clock"></i>Timezone Converter  
        </a>
      </li>	   
      <li class="{{$toolKey == 'signature' ? 'active' : ''}}">
        <a href="{{route('toollist', 'signature')}}" title="Create Your Digital Signature in Seconds">
          <i class="fa-solid fa-pen"></i>Digital Signature		  
        </a>
      </li>
	    <li class="{{$toolKey == 'screen-recording' ? 'active' : ''}}">
        <a href="{{route('toollist', 'screen-recording')}}" title="Online Free Screen Recorder with Audio - Download FREE">
          <i class="fa-solid fa-desktop"></i>Screen Recorder		  
        </a>
      </li>
      <li class="{{$toolKey == 'custom-invoice' ? 'active' : ''}}">
        <a href="{{route('toollist', 'custom-invoice')}}" title="Online Free Create Custom Invoice - Download FREE">
          <i class="fa-solid fa-file-pdf"></i>Custom Invoice		  
        </a>
      </li>
      <li class="{{$toolKey == 'color-picker' ? 'active' : ''}}">
        <a href="{{route('toollist', 'color-picker')}}" title="Create Your Digital Signature in Seconds">
          <i class="fa-solid fa-palette"></i>Color Picker		  
        </a>
      </li>
	  <li class="has-submenu open">
        <a href="#" class="submenu-toggle" onclick="event.preventDefault();">
          <i class="fas fa-calculator"></i>Calculators
          <i class="fas fa-chevron-right arrow"></i>
        </a>
        <ul class="submenu">
            <li><a href="{{route('toollist', 'fd-calculator')}}" class="{{$toolKey == 'fd-calculator' ? 'active' : ''}}" title="FD Calculator">FD Calculator</a></li>
            <li><a href="{{route('toollist', 'sip-calculator')}}" class="{{$toolKey == 'sip-calculator' ? 'active' : ''}}" title="SIP Calculator">SIP Calculator</a></li>
            <li><a href="{{route('toollist', 'emi-calculator')}}" class="{{$toolKey == 'emi-calculator' ? 'active' : ''}}" title="EMI Calculator">EMI Calculator</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>