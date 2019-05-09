@extends('base')

@section('head')
<style>
* {
  box-sizing: border-box;
}

html, body {
  width: 100%;
  height: 100%;
}

@font-face {
  font-family: 'Mirza';
  src: url(/font/Mirza/Mirza-Regular.ttf);
}
@font-face {
  font-family: 'Amiri';
  src: url(/font/Amiri/Amiri-Regular.ttf);
}
@font-face {
  font-family: 'QalamMajeed';
  src: url(/font/qalammajeed.ttf);
}
@font-face {
  font-family: 'MeQuran';
  src: url(/font/me_quran.ttf);
  /*src: url(/font/me_quran.otf.birdfont);*/
}

.arabic {
  /*font-family: QalamMajeed;*/
  /*font-family: MeQuran;*/
  /*font-family: Amiri;*/
  font-family: Mirza;
  padding-top: .375em;
  line-height: 1.825em;
  font-size: 32px;
  text-align: right;
}

table {
  width: 100%;
  height: 100%;
}
table tr td {
  padding: 8px;
}

textarea {
  width: 100%;
  height: 100%;
}
</style>
@endsection

@section('content')

<table>
  <tr>
    <td style="width: 40%;">
      <textarea
        id="arabicInput"
        autofocus></textarea>
    </td>
    <td>
      <textarea dir="rtl" class="arabic output" id="arabicOutput"></textarea>
    </td>
  </tr>
</table>
<textarea>
bis`mi !ll&AHi !lroh`mAni !lr&ohiy`mi {1}
!al`ham`du lil&AHi rob&i !l`eAlamiy`na @ {2}
</textarea>
@endsection

@section('body')
<script>
console.log('arabic keyboard');
function translate(input) {
  maps = {
    "!": "ا",
    "b": "ب",
    "t": "ت",
    "c": "ث",
    "j": "ج",
    "h": "ح",
    "v": "خ",
    "d": "د",
    "z": "ذ",
    "r": "ر",
    "Z": "ز",
    "s": "س",
    "C": "ش",
    "S": "ص",
    "D": "ض",
    "T": "ط",
    "x": "ظ",
    "e": "ع",
    "g": "غ",
    "f": "ف",
    "q": "ق",
    "k": "ك",
    "l": "ل",
    "m": "م",
    "n": "ن",
    "H": "ه",
    "w": "و",
    "y": "ي",


    " ": " ",

    "a": "َ",
    "o": "َ",
    "i": "ِ",
    "u": "ُ",

    "`": "ْ",

    "&": "ّ",
    "A": "ٰ",

    "\n": "\n",

    "{": "﴿",
    "}": "﴾",

    "1": "١",
    "2": "٢",
    "3": "٣",
    "4": "٤",
    "5": "٥",
    "6": "٦",
    "7": "٧",
    "8": "٨",
    "9": "٩",
    "0": "٠",

    "@": "ۙ",
  };
  var translated = "";
  for (var i=0; i < input.length; i++) {
    var key = input[i];
    var char = maps[key]?maps[key]:key;
    translated += char;
    console.log(key, translated);
  }
  return translated;
}
arabicInput.onkeyup = function (e) {
  console.log(e);
  arabicOutput.value = translate(arabicInput.value);
};
</script>
@endsection
