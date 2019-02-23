<div class="board-wrapper">
  <table id="board">
    @for ($i = 0; $i < 3; $i++)
      <tr>
      @for ($j = 0; $j < 3; $j++)
        <td></td>
      @endfor
      </tr>
    @endfor
  </table>
  @php
    $ps = ['top', 'bottom', 'left', 'right'];
  @endphp
  @foreach ($ps as $k => $v)
    <div class="styler {{ $v }}"></div>
  @endforeach
</div>
