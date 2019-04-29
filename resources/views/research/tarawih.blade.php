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

</style>
@endsection

@section('content')
<h1 style="text-align: center;">BILAL TARAWIH</h1>
<ol class="ar">
  <li>
    <div class="arabic">
      صَلُّوْ سُنَّةَ التَّرَاوِيْحِ رَكْعَتَيْنِ جَامِعَةَ الرَّحِمَكُمُ اللّٰهُ
    </div>
    <hr/>
    SHOLLUU SUNNATAT TAROOWIIHI RAK ‘ATAINI JAA MI’ATAR ROHIMAKUMULLAH
  </li>
  <li>
    <div class="arabic">
			اَلصَّلَاةُ اَيَّامِ اَثَابَكُمُ اللّٰهُ
    </div>
		<hr/>
    ASSHOLAATU AYYAAMI ATSAABAKUMULLAH
  </li>
	<div class="doa">
	DOA
	</div>
	<li>
		<div class="arabic">
			فَضْفَمِّنَ اللّٰهُ
		</div>
		<hr/>
    FADHFAMMINALLAH
	</li>
  <li>
    <div class="arabic">
			اَلْخَلِيْفَتُلْ اُوْلَا اَمِيْرُلْ مُكْمِنِيْنَ سَيِّدُنَا اَبُوْ بَكَرْ سِدِّيْقِ
    </div>
    <hr/>
    ALKHOLIIFATUL UULAA AMIIRUL MUKMINIINA SAYYIDUNAA ABUU BAKAR SIDDIIQ
  </li>
	<div class="doa">
	DOA
	</div>
	<li>
		<div class="arabic">
			اَللّٰهُمَّ صَلِّ عَلَ سَيِّدِنَا مُحَمَّدُ
		</div>
		<hr/>
    ALLAHUMMA SHOLLI ‘ALA SAYYIDINAA MUHAMMAD
	</li>
	<li>
		<div class="arabic">
			اَلْخَلِيْفَةُ السَّانِيَهْ اَمِرُلْ مُكْمِنِيْنَا سَيِّدُنَّا عُمَرْ بِنْ خَطَّابَ
		</div>
		<hr/>
    ALKHOLIIFATUSSAANIYAH AMIIRUL MUKMININAA SAYYIDUNAA ‘UMAR BIN KHOTTOO.BEK
	</li>
	<div class="doa">
	DOA
	</div>
	<li>
		<div class="arabic">
			اَللّٰهُمَّ صَلِّ علَ سَيِّدِنَا مُحَمَّدُ
		</div>
		<hr/>
    ALLAHUMMA SHOLLI ‘ALA SAYYIDINAA MUHAMMAD
		<!--
			aAll}/HUm}A SAl}I elA sAy}IdInAa mUhAm}AdU
		--!>
	</li>
	<li>
		<div class="arabic">
			اَلْخَلِيْفَةُ السَّلِسَهْ اَمِيْرُلْ مُكْمِنِنَا سَيِّدُنَا عُسْمَانْ بِنْ اَفَّنُ
		</div>
		<hr/>
    ALKHOLIIFATUSSALISAH AMIIRUL MUKMININAA SAYYIDUNAA ‘USMAAN BIN AFFAN
		<!--
			aAl`h'AlIy`fAoU als}AlIsAH` aAmIy`rUl` mUk`mInInAa sAy}IdUnAa eUs`mAan` bIn` aAf}AnU
		--!>
	</li>
	<div class="doa">
	DOA
	</div>
	<li>
		<div class="arabic">
			اَللّٰهُمَّ صَلِّ علَ سَيِّدِنَا مُحَمَّدُ
		</div>
		<hr/>
    ALLAHUMMA SHOLLI ‘ALA SAYYIDINAA MUHAMMAD
		<!--
			aAll}/HUm}A SAl}I elA sAy}IdInAa mUhAm}AdU
		--!>
	</li>
	<li>
		<div class="arabic">
			اَلْخَلِيْفَةُ الرَّابِعَهْ اَمِيْرُلْ مُكْمِنِنَا سَيِّدُنَا عَلِ بِنْ اَبِيْ طَالِبُ
		</div>
		<hr/>
		 ALKHOLIIFATURROOBI’AH AMIIRUL MUKMININAA SAYYIDUNAA ‘ALI BIN ABII     THOOLIBEK
		<!--
			aAl`h'AlIy`fAoU alr}AabIeAH` aAmIy`rUl` mUk`mInInAa sAy}IdUnAa eAlI bIn` aAbIy` TAalIbU
		--!>
	</li>
</ol>

<br/>
<br/>
<br/>

<div class="green">
ASYHADU ALLA ILA HA ILLALLAH , ASTAGHFIRULLAH …. 3X
<br/>
<br/>
ALLAHUMMA INNAKA AFUWWUNG KARIM , TUHIBBUL’AFWA FA’FU ‘ANNA ………. 3X
<br/>
<br/>
ALLAHUMMA INNA NAS.ALUKA   ,  RIDHOOKA WAL JANNATA    , WA NA’UUDZUBIKA   ,   MINGG SAKHOOTHIKA WANNAAR
</div>

<ol class="ar">
	<li>
		<div class="arabic">
		</div>
		<hr/>
    SHOLLU SUNNATAMMINAL WIT.RI ROK’ATAINI JAAMI’ATAR ROHIMAKUMULLAH
	</li>
	<li>
		<div class="arabic">
		</div>
		<hr/>
    SHOLLU SUNNATAR ROK.ATAL WITRI ( MA’AL QUNUUTI ) JAAMI’ATAR ROHIMAKUMULLAH
	</li>
</ol>

<br/>
<br/>
<br/>

<div>
BISMILLAHIRROHMANIRROHIM ,
<br/>
<br/>
SUBEK.HAANAL MAALIKIL QUDDUUS ………. 3X
<br/>
<br/>
SUBBUHUN   ,   QUDDUUSUN   ,   ROBBUNAA   ,   WAROBBUL MALAAIKATI WARRUH
<br/>
<br/>
SUBEK.HANALLAHI WAL HAMDULILLAH   ,   WALAA ILAA HA ILLALLAHU WALLAHU AKBAR   ,   WALA HAULA WALA QUWWATA ILLA BILLAHIL ‘ALIYYIL ADZIM ..
<br/>
<br/>
BISMILLAHIRROHMANIRROHIM ,
<br/>
<br/>
NAWAITU   ,   SHOUMA GHODIN   ,   ‘AN ADAA.I   ,   FARDHI SYAHRI   ,   ROMADHOONA   ,   HAA DZIHISSANATI   ,   IIMANAN   ,   WAHTISAABAN   ,   LILLAHI TA’ALA
<br/>
<br/>
NIAT INGSUN POSO    ,   SEDINO SESOK   ,   SAKING ANEKANI   ,   FERDHUNE WULAN ROMADHON   ,   IKILAH TAHUN   ,   KRONO NDEREK   ,   DAWUHE ALLAH TA’ALA …
<br/>
<br/>

<h1 style="text-align: center;">
SYIIR BA’DA TARAWIH
</h1>

ALLAHUMMA SHOLLI ‘ALAA MUHAMMAD , YA ROBBI SHOLLI ALAIHI WA SALIM …. 2X
<br/>
<br/>
ASY HADU ALLA ILA HA ILLALLAH ,
<br/>
<br/>
 NEKO DAKEN INGSUN ING NDALEM ATI NING SUN , SATUHUNE ORA ONO PANGERAN KANG SINEMBAH , KELAWAN SAK BENERE . KANG WAJIB WUJUDE KANG MOHAL ADAME KANG MESTI ANANE ..  AAAAING  ALLAH ..
<br/>
<br/>
WA ASY HADU ANNA MUHAMMADARROSULULLOH ,
<br/>
<br/>
NEKO DAKEN INGSUN ING NDALEM ATI NING SUN , SATUHUNE KANJENG NABI MUHAMMAD IKU . UTUSANE ALLAH KAWULANE ALLAH KEKASIHE ALLAH , KANG ROMO SAYYID ABDULLAH KANG IBU SITI AMINAH . DZOHIR ANA MEKAH JUMENENG ROSUL ANA MEKAH PINDAH ING MADINAH GERAH ING MADINAH SEDO ING MADINAH SINAREKAKEN ING MADINAH . BANGSANE BANGSA ROSUL BANGSA ARAB BANGSA QUROISY . SIRA ROHMAN SIRA ROHIM , SIRA ING DZAT KANG SAMPURNA , SAMPURNANE KELAWAN IMAN :
<br/>
<br/>
WUJUD , QIDAM , BAQO’ , MUKHOLAFATU LIL HAWADITSI , WAL QIYAMU BINAFSIHI , WAH DA NIYAH , QODRAT , IRODAT , ILMU, HAYAT , IYO SAMA’ , BASOR , KALAM , QODIRON , MURIDAN , ALIMAN , HAYAN , SAMI’AN , BASHIRON , MUTAKALIMAN ……
<br/>
<br/>
ALLAHUMMA SHOLLI ALA MUHAMMAD ….. 2X
<br/>
<br/>
WA ALA ALIHI ….. 2X    , WASOHBIHI WASALLLAM
<br/>
<br/>
ALLAH
<br/>
<br/>
ROBBIJEK ALNA , BALADAN AMINA … 2X
<br/>
<br/>
WAROSULULLAHI…2X
<br/>
<br/>
WASIYATAN TOYYIBATAN HASANAH
<br/>
<br/>
</div>

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
