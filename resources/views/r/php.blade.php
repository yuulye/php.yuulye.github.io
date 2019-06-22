@extends ('base')

@section ('head')
<style>@include ('index.style')</style>
<style>
  html, body {
    color: white;
    background: black;
    width: 100%;
    height: 100%;
  }
  table {
    border-spacing: 0;
  }
  td {
    padding: 0;
    text-align: center;
  }
  table {
    width: 100%;
    height: 100%;
    vertical-align: middle;
  }
  /*
  .number {
    display: none;
  }
  */
</style>
@endsection

@section ('content')
<table>
  <tr>
    <td id="mainWrapper">
<?php
function ra($a, $l = 50) {
  $textColor = $l*5;
  $color = 250 - $textColor;
  $hexColor = "#"
    .str_repeat(
      sprintf("%02s", dechex($color))
      , 3
    );
  $textHexColor = "#"
    .str_repeat(
      sprintf("%02s", dechex($textColor))
      , 3
    );
  if ($l <= 0) return;
  if ($a == "PHP") {
    $number = sprintf("%02d", $l);

    echo "<div id='shade$number' class='shade'"
      ." style='"
      //."border: 2px solid $hexColor;"
      ."color: $textHexColor;"
      ."background: $hexColor;"
      ."display: none;"
      ."'>";

    echo "<span class='number'>";
    echo "$number{ ";
    echo "</span>";

    echo "PHP:";
    ra("PHP", --$l);
    echo " Hypertext";
    echo " Preprocessor";

    echo "<span class='number'>";
    echo " }$number";
    echo "</span>";

    echo "</div>";
  }
}
ra("PHP");
?>
    </td>
  </tr>
</table>

<hr/>

<div class="comments">
  <br/>
  @include('disqus')
  <br/>
  <br/>
</div>

<hr/>

@include ('index.footer')
@endsection

@section ('body')
<script>
var shades = document.getElementsByClassName("shade");
//console.log(shades);
var i = 0;
var interval;
var windowHeight = $(window).height();
var shadeScroll = 50;

function show() {
  var h = $(mainWrapper).height();

  if (!shades[i]) {
    clearInterval(interval);
    return;
  }
  $(shades[i++]).slideDown(300);

  if (h > windowHeight) {
    console.log(shadeScroll);
    document
      .getElementById("shade"+--shadeScroll).scrollIntoView();
  }
}
interval = setInterval(show, 600);
</script>
@endsection
