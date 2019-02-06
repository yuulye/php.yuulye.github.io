@extends('base')

@section('content')
<style>
* {
	box-sizing: border-box;
}
</style>

<style>
html, body {
	height: 100%;
}
body {
	margin: 0;
	background: white;
}

@font-face {
font-family: PermanentMarker;
src: url(../font/Permanent_Marker/PermanentMarker-Regular.ttf);
}

.wrapper {
width: 100%;
height: 100%;
}
.wrapper td {
position: relative;
text-align: center;
}
.wrapper td > div.board-wrapper {
position: relative;
display: inline-block;
}

#board {
border-spacing: 8px;
font-family: PermanentMarker;
font-size: 40px;
font-weight: bold;
background: silver;
}
#board td {
cursor: pointer;
background: white;
width: 64px;
height: 64px;
text-align: center;
}

.board-wrapper {
position: relative;
}
.board-wrapper div.board-wrapper, .board-wrapper div.styler {
position: absolute;
background: white;
}
.board-wrapper div.top {
top: 0;
width: 100%;
height: 8px;
}
.board-wrapper div.bottom {
bottom: 0;
width: 100%;
height: 8px;
}
.board-wrapper div.left {
top: 0;
width: 8px;
height: 100%;
}
.board-wrapper div.right {
top: 0;
right: 0;
width: 8px;
height: 100%;
}
</style>
<table class="wrapper">
<tr>
<td>
<div style="
padding-top: 16px;
top: 0;
width: 100%;
position: absolute;
text-align: center;
">

<div id="menu" style="
  text-align: center;
">
  <a href="{{url('/')}}">
    <h1 style="color: black;">
      <i class="fa fa-home"></i>
			Tic Tac Toe
    </h1>
  </a>
  <h1 onclick="location.reload();" style="cursor: pointer;">
    <i class="fa fa-repeat"></i>
    Restart
  </h1>
</div>
</div>

<div class="board-wrapper">
<table id="board">
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
</table>
<div class="styler top"></div>
<div class="styler bottom"></div>
<div class="styler left"></div>
<div class="styler right"></div>
</div>
</td>
</tr>
</table>
<script>
function getClickedElement(e) {
if (e.path) { // chrome
			return e.path[0];
					}
if (e.explicitOriginalTarget) { // firefox
					return e.explicitOriginalTarget;
							}
if (e.target) { // edge, internet explorer
					return e.target;
							}
console.error("can't find element!");
}
var x = "X", o = "O";
var current = x;
board.onclick = function(e) {
var td = getClickedElement(e);
if (td && !td.clicked) {
					td.clicked = true;
									td.innerText = current;
									current = current==x?o:x;
											}
};
</script>
@endsection
