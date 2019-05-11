var els = document.getElementsByClassName("changeThis");
for (var i = 0;i < els.length;i++) {
  var el = els[i];
  el.innerText = translate(el.innerText);
}
