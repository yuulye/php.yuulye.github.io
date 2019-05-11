var alphabetMaps = "`1234567890-=qwertyuiop[]asdfghjkl;'\\zxcvbnm,./"
  +"~!@#$%^&*()_+QWERTYUIOP{}ASDFGHJKL:\"|ZXCVBNM<>?";
console.log("alphabetMaps", alphabetMaps.length);

var preMaps = [
  { "key": "!", "value" : "ا"},
  { "key": "b", "value" : "ب"},
  { "key": "t", "value" : "ت"},
  { "key": "c", "value" : "ث"},
  { "key": "j", "value" : "ج"},
  { "key": "h", "value" : "ح"},
  { "key": "v", "value" : "خ"},
  { "key": "d", "value" : "د"},
  { "key": "z", "value" : "ذ"},
  { "key": "r", "value" : "ر"},
  { "key": "Z", "value" : "ز"},
  { "key": "s", "value" : "س"},
  { "key": "C", "value" : "ش"},
  { "key": "S", "value" : "ص"},
  { "key": "D", "value" : "ض"},
  { "key": "T", "value" : "ط"},
  { "key": "x", "value" : "ظ"},
  { "key": "e", "value" : "ع"},
  { "key": "g", "value" : "غ"},
  { "key": "f", "value" : "ف"},
  { "key": "q", "value" : "ق"},
  { "key": "k", "value" : "ك"},
  { "key": "l", "value" : "ل"},
  { "key": "m", "value" : "م"},
  { "key": "n", "value" : "ن"},
  { "key": "H", "value" : "ه"},
  { "key": "w", "value" : "و"},
  { "key": "y", "value" : "ي"},

  { "key": "+", "value" : "ة"},
  { "key": "L", "value" : "ٱ"},

  { "key": "_", "value" : "ـ"},

  { "key": "~", "value" : "ء"},
  { "key": "|", "value" : "أ"},
  { "key": "/", "value" : "إ"},
  { "key": "\\", "value" : "ؤ"},

  { "key": " ", "value" : " "},

  { "key": "a", "value" : "َ"},
  { "key": "o", "value" : "َ"},
  { "key": "i", "value" : "ِ"},
  { "key": "u", "value" : "ُ"},

  { "key": "A", "value" : "ً"},
  { "key": "I", "value" : "ٍ"},
  { "key": "U", "value" : "ٌ"},

  { "key": "`", "value" : "ْ"},

  { "key": "&", "value" : "ّ"},

  { "key": "^", "value" : "ٰ"},

  { "key": "\n", "value" : "\n"},

  { "key": "{", "value" : "﴿"},
  { "key": "}", "value" : "﴾"},

  { "key": "1", "value" : "١"},
  { "key": "2", "value" : "٢"},
  { "key": "3", "value" : "٣"},
  { "key": "4", "value" : "٤"},
  { "key": "5", "value" : "٥"},
  { "key": "6", "value" : "٦"},
  { "key": "7", "value" : "٧"},
  { "key": "8", "value" : "٨"},
  { "key": "9", "value" : "٩"},
  { "key": "0", "value" : "٠"},

  { "key": "@", "value" : "ۙ"},
];

var mapsCount = maps = {};
for (var i = 0; i < preMaps.length; i++) {
  var preMap = preMaps[i];
  var key = preMap.key;
  var value = preMap.value;
  // console.log(preMap, key, value, mapsCount);

  if (mapsCount[key]) {
    mapsCount[key] += 1;
    console.error(
      'duplicated key detected!'
      , "key", key, "value", value
    );
  } else {
    mapsCount[key] = 1;
  }

  if (maps[key]) {
    maps[key] = value;
  }
}

var unusedKeys = [];
for (var i = 0; i < alphabetMaps.length; i++) {
  var key = alphabetMaps[i];
  if (!maps[key]) {
    unusedKeys.push(key);
  }
  unusedKeys.sort();
}
console.info("unusedKeys", unusedKeys);

// console.log(
//   "mapsCount", mapsCount
//   , "maps", maps
// );


@if (!@$notKeyboard)
for (letter in maps) {
  // console.log(
  //   "letter", letter, maps[letter]
  //   , "templateLetterMap", templateLetterMap
  // );
  var el = templateLetterMap.cloneNode(true);
  el.id = "";
  switch (letter) {
    case " ":
      el.getElementsByClassName('en')[0].innerText = "  : ";
      el.getElementsByClassName('arabic')[0].innerText = "-";
    break;
    case "\n":
      el.getElementsByClassName('en')[0].innerText = "\\n : ";
      el.getElementsByClassName('arabic')[0].innerText = "-";
    break;
    default:
      el.getElementsByClassName('en')[0].innerText = letter + " : ";
      el.getElementsByClassName('arabic')[0].innerText = maps[letter];

  }
  map.appendChild(el);
}

arabicInput.onkeyup = function (e) {
  // console.log(e);
  arabicOutput.value = translate(arabicInput.value);
};
@endif

function translate(input) {
  var translated = "";
  for (var i=0; i < input.length; i++) {
    var key = input[i];
    var char = maps[key]?maps[key]:key;
    translated += char;
    // console.log(key, translated);
  }
  return translated;
}
