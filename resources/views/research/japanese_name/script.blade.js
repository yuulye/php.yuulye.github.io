execute.onclick = function () {
    console.log('executed!');
    var maps = {
        "a": "ka",
        "b": "zu",
        "c": "mi",
        "d": "te",
        "e": "ku",
        "f": "lu",
        "g": "ji",
        "h": "ri",
        "i": "ki",
        "j": "zus",
        "k": "me",
        "l": "ta",
        "m": "rin",
        "n": "to",
        "o": "mo",
        "p": "no",
        "q": "ke",
        "r": "shi",
        "s": "ari",
        "t": "chi",
        "u": "do",
        "v": "ru",
        "w": "mei",
        "x": "na",
        "y": "fu",
        "z": "zi",
    };
    var theName = inputName.value.toLowerCase();
    var japanName = "";
    for (var i = 0; i < theName.length; i++) {
        var letter = theName[i];
        japanName += maps[letter];
    }
    japan.innerHTML = japanName;
};
