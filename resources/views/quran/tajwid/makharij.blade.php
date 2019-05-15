<div dir="rtl" class="arabic">
<h2>
مَخَارِج الحُرُوف
</h2>
</div>
<hr/>
<div dir="rtl" class="arabic">
<h3>
  الجَوف
</h3>
الألف
 المدية
,
الواو
 المدية
,
الياء
 المدية
&larr;
ا
,
و
,
ى
</div>
<div dir="rtl" class="arabic">
<h3>
الحَلق
</h3>
أقصى الحَلق
:
الهمزة
,
الهاء
&larr;
ء
,
ه
<br/>
وسط الحَلق
:
الحاء
,
العين
&larr;
ح
,
ع
<br/>
أدنى الحَلق
:
الخاء
,
الغين
&larr;
خ
,
غ
</div>
<div dir="rtl" class="arabic">
اللِسَان
</div>
<div dir="rtl" class="arabic">
الشَّفَتَان
</div>
<div dir="rtl" class="arabic">
الخَيشُوم
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
