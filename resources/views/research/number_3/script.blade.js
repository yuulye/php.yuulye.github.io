var current = 1;
var timeOut = false;

function showNext() {
  var div = document.getElementsByTagName('div')[0];
  current *= 3;
  div.innerHTML += current;
  timeOut = setTimeout(showNext, 1000);
}

var button = document.getElementsByTagName('button')[0];
button.click = function() {
  clearTimeout(timeOut);
};

