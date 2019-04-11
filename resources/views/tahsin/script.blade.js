console.log('tahsin!');

var letters = {
    "a": "ا", "f": "ح", "k": "ز", "p": "ط",
    "b": "ب", "g": "خ", "l": "س", "q": "ظ",
    "c": "ت", "h": "د", "m": "ش", "r": "ع",
    "d": "ث", "i": "ذ", "n": "ص", "s": "غ",
    "e": "ج", "j": "ر", "o": "ض", "t": "ف",

    "u": "ق", "z": "ه",
    "v": "ك", "1": "و",
    "w": "ل", "2": "ي",
    "x": "م",
    "y": "ن",

    "3": "ـَ",
    "4": " ",
    "5": "ـُ",
};

var xs = document.getElementsByClassName('x');
for (var i = 0; i < xs.length; i++) {
    var el = xs[i];
    var text = el.innerHTML;
    var arText = '';
    for ( var _i = 0; _i < text.length; _i++) {
        arText += letters[text[_i]];
    }
    console.log(el.innerHTML);
    el.innerHTML = arText;
}
