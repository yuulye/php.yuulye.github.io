@extends('base')

@section('head')
<style>
body {
  width: 96%;
  padding: 4px;
}
@media (min-width: 480px) {
  body {
    width: 80%;
    margin: 0 auto;
  }
}
@font-face {
  font-family: 'QalamMajeed';
  src: url(/font/qalammajeed.ttf);
}

.arabic {
  font-family: QalamMajeed;
  line-height: 1.25em;
  font-size: 2em;
  text-align: right;
	font-weight: 400;
}
ol.ar {
	list-style: none;
	counter-reset: listNumbering;
}
ol.ar li {
  border-bottom: 1px solid rgba(0, 0, 0, .7);
	margin-bottom: 16px;
	counter-increment: listNumbering;
}
ol.ar li:before {
	content: counter(listNumbering, arabic-indic);
	font-size: 2em;
	margin-left: -32px;
	position: relative;
	top: 40px;
}
ol.ar > div.doa {
	font-weight: bold;
	padding: 16px;
	background: rgba(0, 0, 0, .2);
	margin-left: -36px;
	text-align: center;
}

div.green {
	background: rgba(0, 0, 0, .2);
	padding: 16px;
	font-weight: bold;
}
.green .arabic {
	display: inline-block;
}
div.times {
	display: inline-block;
}

</style>
@endsection

@section('content')
@include('research.tarawih.1')
@include('research.tarawih.2')
@include('research.tarawih.3')
@include('research.tarawih.4')
@include('research.tarawih.5')

<h1 style="text-align: center;">
KIRIMAN MALEM JUM’AT
</h1>
<ol>
	<li>
    MBAH  SLAMET  SUBUR  SEKALIAN
	</li>
	<li>
    MBAH  JAHRI  SEKALIAN
	</li>
	<li>
    MBAH  HAJI  TOHIR  SEKALIAN
	</li>
	<li>
    MBAH  MASIYEM
	</li>
	<li>
    ANAK  ABU  JAMAL
	</li>
	<li>
    MBAH  WAKIDI  SEKALIAN
	</li>
	<li>
    MBAH  BAZARI  SEKALIAN
	</li>
	<li>
    MBAH DAHRI  SEKALIAN
	</li>
	<li>
    MBAH  SAMSURI  SEKALIAN
	</li>
	<li>
    JAZULI
	</li>
	<li>
    ISHAQ
	</li>
	<li>
    ABDULLAH  ROSYAD
	</li>
	<li>
    AHMAD  DARSO
	</li>
</ol>
@endsection
