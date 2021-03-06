@extends('base')

@section('head')
<style>
	html, body {
    padding: 0;
    margin: 0;
    height: 100%;

    background: rgba(255,255,255,1);
    background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(211,212,207,1) 48%, rgba(28,28,28,1) 73%, rgba(19,19,19,1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(48%, rgba(211,212,207,1)), color-stop(73%, rgba(28,28,28,1)), color-stop(100%, rgba(19,19,19,1)));
    background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(211,212,207,1) 48%, rgba(28,28,28,1) 73%, rgba(19,19,19,1) 100%);
    background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(211,212,207,1) 48%, rgba(28,28,28,1) 73%, rgba(19,19,19,1) 100%);
    background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(211,212,207,1) 48%, rgba(28,28,28,1) 73%, rgba(19,19,19,1) 100%);
    background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(211,212,207,1) 48%, rgba(28,28,28,1) 73%, rgba(19,19,19,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#131313', GradientType=0 );
  }
  #main {
		background: url('{{asset('/img/winter-bg.jpg')}}');
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		height: 50%;
	}
</style>
@endsection

@section('content')
<div id="main"></div>
<a
  href="{{url('/')}}"
  style="
    font-size: x-large;
    position: absolute;
    top: 24px;
    width: 100%;
    text-align: center;
    text-decoration: none;
    font-weight: bolder;
    color: black;
  "
>
  <i class="fa fa-home"></i> yuulye
</a>
    <script src="{{asset(
			'/tp/snowstrom-min.js')}}"></script>
		<script>
			// --- common properties ---

			// snowStorm.autoStart = true;          // Whether the snow should start automatically or not.
			// snowStorm.excludeMobile = true;      // Snow is likely to be bad news for mobile phones' CPUs (and batteries.) Enable at your own risk.
			snowStorm.flakesMax = 128;           // Limit total amount of snow made (falling + sticking)
			snowStorm.flakesMaxActive = 64;      // Limit amount of snow falling at once (less = lower CPU use)
			// snowStorm.animationInterval = 33;    // Theoretical "miliseconds per frame" measurement. 20 = fast + smooth, but high CPU use. 50 = more conservative, but slower
			// snowStorm.useGPU = true;             // Enable transform-based hardware acceleration, reduce CPU load.
			// snowStorm.className = null;          // CSS class name for further customization on snow elements
			snowStorm.excludeMobile = false;      // Snow is likely to be bad news for mobile phones' CPUs (and batteries.) By default, be nice.
			// snowStorm.flakeBottom = null;        // Integer for Y axis snow limit, 0 or null for "full-screen" snow effect
			snowStorm.followMouse = false;        // Snow movement can respond to the user's mouse
			snowStorm.snowColor = 'Snow';        // Don't eat (or use?) yellow snow.
			// snowStorm.snowCharacter = '&bull;';  // &bull; = bullet, &middot; is square on some systems etc.
			// snowStorm.snowStick = true;          // Whether or not snow should "stick" at the bottom. When off, will never collect.
			snowStorm.targetElement = 'main';      // element which snow will be appended to (null = document.body) - can be an element ID eg. 'myDiv', or a DOM node reference
			// snowStorm.useMeltEffect = true;      // When recycling fallen snow (or rarely, when falling), have it "melt" and fade out if browser supports it
			snowStorm.useTwinkleEffect = true;  // Allow snow to randomly "flicker" in and out of view while falling
			// snowStorm.usePositionFixed = false;  // true = snow does not shift vertically when scrolling. May increase CPU load, disabled by default - if enabled, used only where supported
			// snowStorm.usePixelPosition = false;  // Whether to use pixel values for snow top/left vs. percentages. Auto-enabled if body is position:relative or targetElement is specified.

			// --- less-used bits ---

			snowStorm.freezeOnBlur = false;       // Only snow when the window is in focus (foreground.) Saves CPU.
			// snowStorm.flakeLeftOffset = 0;       // Left margin/gutter space on edge of container (eg. browser window.) Bump up these values if seeing horizontal scrollbars.
			// snowStorm.flakeRightOffset = 0;      // Right margin/gutter space on edge of container
			// snowStorm.flakeWidth = 8;            // Max pixel width reserved for snow element
			// snowStorm.flakeHeight = 8;           // Max pixel height reserved for snow element
			// snowStorm.vMaxX = 5;                 // Maximum X velocity range for snow
			// snowStorm.vMaxY = 4;                 // Maximum Y velocity range for snow
			// snowStorm.zIndex = 0;                // CSS stacking order applied to each snowflake
	</script>
@endsection
