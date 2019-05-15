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
<br/>
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
<br/>
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
<br/>
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
<br/>
&larr;
خ
,
غ
</div>
<div dir="rtl" class="arabic">
<h3>
اللِسَان
</h3>
أقصى اللِسَان مِمَّا يَلي الحَلق
:
القاف
<br/>
&larr;
ق
<br/>
أقصى اللِسَان مِمَّا يَلي الْفَم
:
الكاف
<br/>
&larr;
ك
<br/>
وَسَطُ اللِسَان
(ظَهْرُ اللِسَان)
:
الجيم
,
الشين
,
الياء غير المدية
<br/>
&larr;
ج
,
ش
,
ي
<br/>
حَافَّةُ اللِّسَان أوْ حَافَّتاه
:
الضاد
<br/>
&larr;
ض
<br/>
حَافَّةُ اللِّسَان
:
اللام
<br/>
&larr;
ل
<br/>
رَأسُ اللِّسَان
:
النون
<br/>
&larr;
ن
<br/>
رَأسُ اللِّسَان مِمَّا يَلي ظَهْره
:
الرّاء المرققة
/
الرّاء المفخمة
<br/>
&larr;
ر
<br/>
رَأسُ اللِّسَان مَعَ ظَهْره
:
التاء
,
الدّال
,
الطّء
<br/>
&larr;
ت
,
د
,
ط
<br/>
ظَهْرُ اللِّسَان مِمَّا يَلي رَأسه
:
الثّاء
,
الذّال
,
الظّاء
<br/>
&larr;
ث
,
ذ
,
ظ
<br/>
رَأسُ اللِّسَان مَعَ قَر يب مِنَ الثَّنايا
:
الزّاي
,
السّين
,
الصّاد
<br/>
&larr;
ز
,
س
,
ص
</div>
<div dir="rtl" class="arabic">
<h3>
الشَّفَتَان
</h3>
بَيْنَ الشَّفَتَيْن
:
الباء
,
الميم
,
الواو
<br/>
&larr;
ب
,
م
,
و
<br/>
بَطْنُ الشَّفَةِ السُفلى
:
الفاء
<br/>
&larr;
ف
<br/>
</div>
<div dir="rtl" class="arabic">
<h3>
الخَيشُوم
</h3>
الغُنَّة
:
النون
,
الميم
<br/>
&larr;
ن
,
م
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
