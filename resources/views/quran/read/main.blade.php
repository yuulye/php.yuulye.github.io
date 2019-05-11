@php
$content = [
  "bi", "s", "mi", "l",
  "la", ".", "Hi", "r",
];
@endphp
<div id="main">
  <table border="1">
    <tr>
      @for ($i = 0;$i < 16;$i++)
        <td>{{ @$content[$i] }}</td>
      @endfor
    </tr>
  </table>
</div>
