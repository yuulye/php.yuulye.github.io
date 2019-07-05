@php
$row = $col = 3;
@endphp

<br/>
<br/>
<br/>

<div id="tictactoeBoardWrapper">
  <table id="tictactoeBoard">
    @for ($i = 0; $i < $row; $i++)
      <tr>
        @for($j = 0; $j < $col; $j++)
          <td></td>
        @endfor
      </tr>
    @endfor
  </table>
</div>
