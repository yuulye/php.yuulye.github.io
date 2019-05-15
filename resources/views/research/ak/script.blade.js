var alphabetMaps = "`1234567890-=qwertyuiop[]asdfghjkl;'\\zxcvbnm,./"
  +"~!@#$%^&*()_+QWERTYUIOP{}ASDFGHJKL:\"|ZXCVBNM<>?";
console.log("alphabetMaps", alphabetMaps.length);

var preMaps = [
  { "key": "!", "value" : "ا",
    "rom": "ā",
  },
  { "key": "b", "value" : "ب",
    "rom": "",
  },
  { "key": "t", "value" : "ت",
    "rom": "",
  },
  { "key": "c", "value" : "ث",
    "rom": "ṯ",
  },
  { "key": "j", "value" : "ج",
    "rom": "",
  },
  { "key": "h", "value" : "ح",
    "rom": "ḥ",
  },
  { "key": "v", "value" : "خ",
    "rom": "ḵ",
  },
  { "key": "d", "value" : "د",
    "rom": "",
  },
  { "key": "z", "value" : "ذ",
    "rom": "ḏ",
  },
  { "key": "r", "value" : "ر",
    "rom": "",
  },
  { "key": "Z", "value" : "ز",
    "rom": "z",
  },
  { "key": "s", "value" : "س",
    "rom": "",
  },
  { "key": "C", "value" : "ش",
    "rom": "š",
  },
  { "key": "S", "value" : "ص",
    "rom": "ṣ",
  },
  { "key": "D", "value" : "ض",
    "rom": "ḍ",
  },
  { "key": "T", "value" : "ط",
    "rom": "ṭ",
  },
  { "key": "x", "value" : "ظ",
    "rom": "ẓ",
  },
  { "key": "e", "value" : "ع",
    "rom": "ʿ",
  },
  { "key": "g", "value" : "غ",
    "rom": "ḡ",
  },
  { "key": "f", "value" : "ف",
    "rom": "",
  },
  { "key": "q", "value" : "ق",
    "rom": "",
  },
  { "key": "k", "value" : "ك",
    "rom": "",
  },
  { "key": "l", "value" : "ل",
    "rom": "",
  },
  { "key": "m", "value" : "م",
    "rom": "",
  },
  { "key": "n", "value" : "ن",
    "rom": "",
  },
  { "key": "H", "value" : "ه",
    "rom": "h",
  },
  { "key": "w", "value" : "و",
    "rom": "ū",
  },
  { "key": "y", "value" : "ي",
    "rom": "ī",
  },

  { "key": "+", "value" : "ة",
    "rom": "",
  },
  { "key": "L", "value" : "ٱ",
    "rom": "",
  },

  { "key": "_", "value" : "ـ",
    "rom": "",
  },

  { "key": "~", "value" : "ء",
    "rom": "",
  },
  { "key": "|", "value" : "أ",
    "rom": "",
  },
  { "key": "/", "value" : "إ",
    "rom": "",
  },
  { "key": "\\", "value" : "ؤ",
    "rom": "",
  },
  { "key": "Y", "value" : "ى",
    "rom": "",
  },

  { "key": " ", "value" : " ",
    "rom": "",
  },

  { "key": "a", "value" : "َ",
    "rom": "",
  },
  { "key": "o", "value" : "َ",
    "rom": "",
  },
  { "key": "i", "value" : "ِ",
    "rom": "",
  },
  { "key": "u", "value" : "ُ",
    "rom": "",
  },

  { "key": "A", "value" : "ً",
    "rom": "",
  },
  { "key": "I", "value" : "ٍ",
    "rom": "",
  },
  { "key": "U", "value" : "ٌ",
    "rom": "",
  },

  { "key": "`", "value" : "ْ",
    "rom": "",
  },

  { "key": "&", "value" : "ّ",
    "rom": "",
  },

  { "key": "^", "value" : "ٰ",
    "rom": "",
  },

  { "key": "\n", "value" : "\n",
    "rom": "",
  },

  { "key": "{", "value" : "﴿",
    "rom": "",
  },
  { "key": "}", "value" : "﴾",
    "rom": "",
  },

  { "key": "1", "value" : "١",
    "rom": "",
  },
  { "key": "2", "value" : "٢",
    "rom": "",
  },
  { "key": "3", "value" : "٣",
    "rom": "",
  },
  { "key": "4", "value" : "٤",
    "rom": "",
  },
  { "key": "5", "value" : "٥",
    "rom": "",
  },
  { "key": "6", "value" : "٦",
    "rom": "",
  },
  { "key": "7", "value" : "٧",
    "rom": "",
  },
  { "key": "8", "value" : "٨",
    "rom": "",
  },
  { "key": "9", "value" : "٩",
    "rom": "",
  },
  { "key": "0", "value" : "٠",
    "rom": "",
  },

  { "key": "@", "value" : "ۙ",
    "rom": "",
  },
];

var mapsCount = maps = {};
var romanMaps = {};

for (var i = 0; i < preMaps.length; i++) {
  var preMap = preMaps[i];
  var key = preMap.key;
  var value = preMap.value;
  var roman = preMap.rom;
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
    romanMaps[key] = roman==""?key:roman;
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

console.log(
  "mapsCount", mapsCount
  , "maps", maps
  , "romanMaps", romanMaps
);


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
  var translated = translate(arabicInput.value);
  arabicOutput.value = translated.ar;
  romOutput.value = translated.rom;
};
@endif

function translate(input) {
  var translated = "";
  var before = "";
  var translatedRom = "";
  for (var i=0; i < input.length; i++) {
    var key = input[i];
    var char = maps[key]?maps[key]:key;
    var roman = romanMaps[key]?romanMaps[key]:key;
    translated += char;

    if (
      (before == "a" && roman == "ā")
      || (before == "u" && roman == "ū")
      || (before == "i" && roman == "ī")
    ) {
      translatedRom =
        translatedRom.slice(0, translatedRom.length-1);
    }
    translatedRom += roman;

    before = key;
    // console.log(key, translated);
  }
  return {
    ar: translated,
    rom: translatedRom,
  };
}
