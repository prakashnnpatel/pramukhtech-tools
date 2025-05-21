{{--<div class="sidebar" id="sidebar-menu"> 
    <ul class="list-categories">
        <li>
            <a class="menu-title-link" href="javascript:void(0);" class="menu-title-link active" title="Formatters">
                <i class="fas fa-calculator menu-icn"></i><span>Calculator</span>                                           
            </a>
            <ul class="sub-menu list-unstyled">
                <li><a href="{{route('toollist', 'fd-calculator')}}" title="FD Calculator">FD Calculator</a></li>
                <li><a href="{{route('toollist', 'sip-calculator')}}" title="SIP Calculator">SIP Calculator</a></li>
                <li><a href="{{route('toollist', 'emi-calculator')}}" title="EMI Calculator">EMI Calculator</a></li>						
            </ul>
        </li>
        <li>
            <a class="menu-title-link" href="javascript:void(0);" class="menu-title-link active" title="Formatters">
                <i class="fas fa-clock menu-icn"></i><span>TimeZone</span>
            </a>
            <ul class="sub-menu list-unstyled">
                <li><a href="{{route('toollist', 'timezone')}}" title="UTC to IST">UTC to IST</a></li>
                <li><a href="{{route('toollist', 'timezone')}}" title="IST to EST">IST to EST</a></li>
                <li><a href="{{route('toollist', 'timezone')}}" title="UTC to EST">UTC to EST</a></li>
                <li><a href="{{route('toollist', 'timezone')}}" title="UTC to CST">UTC to CST</a></li>
                <li><a href="{{route('toollist', 'timezone')}}" title="GMT to PST">GMT to PST</a></li>
            </ul>
        </li>
    </ul>
</div>--}}

<div class="sidebar">
  <div> 
    <span class="sidebar-toggle" title="Toggle Sidebar">
        <i class="fas fa-bars"></i>
    </span>
    <div class="sidebar-logo">
        <img src="/images/logo.png" alt="{{ config('app.name') }}">        
    </div>
    <div class="sidebar-search">
      <input type="text" id="sidebarSearch" placeholder="Search..." class="sidebar-search-input" />
    </div>
    <ul class="sidebar-menu" id="sidebarMenu">      
      <li class="has-submenu open">
        <a href="javascript:void(0)" class="submenu-toggle">
          <i class="fas fa-calculator"></i>Calculator
          <i class="fas fa-chevron-right arrow"></i>
        </a>
        <ul class="submenu">
            <li><a href="{{route('toollist', 'fd-calculator')}}" class="{{$toolKey == 'fd-calculator' ? 'active' : ''}}" title="FD Calculator">FD Calculator</a></li>
            <li><a href="{{route('toollist', 'sip-calculator')}}" class="{{$toolKey == 'sip-calculator' ? 'active' : ''}}" title="SIP Calculator">SIP Calculator</a></li>
            <li><a href="{{route('toollist', 'emi-calculator')}}" class="{{$toolKey == 'emi-calculator' ? 'active' : ''}}" title="EMI Calculator">EMI Calculator</a></li>
        </ul>
      </li>
      <li class="{{$toolKey == 'timezone' ? 'active' : ''}}">
        <a href="{{route('toollist', 'timezone')}}" title="Timezone Converter">
          <i class="fas fa-clock"></i>Timezone Converter   
        </a>
      </li>
    </ul>
  </div>
</div>