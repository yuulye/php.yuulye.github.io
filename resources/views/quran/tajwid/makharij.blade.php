<div class="arabic">
تَعَوُذ
--
أَعُوْذُ بِاللّٰهِ مِنَ الشَّيْطَانِ الرَّجِيْمِ
<br/>
بِسْمِ اللّٰهِ الرَحْمٰنِ الرَّحِيْمِ
</div>
<hr/>
<div style="padding: 0 4px;">
  <table>
    @foreach ($letters as $line)
      <tr>
        @foreach ($line as $letter)
          @if ($letter == $placeHolder)
            <td class="changeThis"></td>
          @else
            @for ($i = 3;$i >= 0;$i--)
              <td class="arabic changeThis">{{
                str_replace($placeHolder, $letter, $pattern[$i])
              }}</td>
            @endfor
          @endif
        @endforeach
      </tr>
    @endforeach
  </table>
</div>
