<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width user-scalable=no">
    <title>Metronome</title>
    <link rel="stylesheet" href="{{ asset(
      '/tp/metronome/css/main.css'
    ) }}">
    <script src="//cwilso.github.io/AudioContext-MonkeyPatch/AudioContextMonkeyPatch.js"></script>
    <script src="{{ asset(
      '/tp/metronome/js/metronome.js'
    ) }}"></script>
  </head>
  <body>
    <a href="https://github.com/cwilso/metronome" style="position: absolute; top: -5px; right: 15px;">Fork me on GitHub</a>
    <div id="controls">
      <div><a class="play" onclick="this.innerText = play();">play</a></div>
      <div id="tempoBox">Tempo: <span id="showTempo">120</span>BPM <input id="tempo" type="range" min="30.0" max="160.0" step="1" value="120" style="height: 20px; width: 200px" onInput="tempo = event.target.value; document.getElementById('showTempo').innerText=tempo;"></div>
      <div>
        Resolution:
        <select onchange="noteResolution = this.selectedIndex;">
          <option>16th notes
          <option>8th notes
          <option selected>Quarter notes
        </select>
      </div>
    </div>
   </body>
</html>