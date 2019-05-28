@extends('base')

@section('content')
&#x1f699;
repeat(
<input
  id="number"
  size="1"
  autofocus
/>
)
<button onclick="run()">=</button>
<div
  style="width: 128px;"
  id="result"></div>
<div id="debug"></div>
<script>
var code = "&#x1f699";
function run() {
  result.innerHTML = code.repeat(
    number.value);
}
</script>
@endsection
