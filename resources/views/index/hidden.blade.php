<a href="{{url('/song/unintended')}}"></a>
<a href="{{url('/cv')}}"></a>
<a href="{{url('/quran')}}"></a>

<a href="{{url('/research/change_color')}}"></a>
<a href="{{url('/research/japanese_name')}}"></a>
<a href="{{url('/research/tahsin')}}"></a>
<a href="{{url('/research/wudu')}}"></a>
<a href="{{url('/research/wudu2')}}"></a>
<a href="{{url('/research/tarawih')}}"></a>
<a href="{{url('/research/alala')}}"></a>
<a href="{{url('/research/arabic_keyboard')}}"></a>
<a href="{{url('/research/car')}}"></a>
<a href="{{url('/research/house')}}"></a>

@foreach ($rs as $r)
  <a href="{{ $r }}"></a>
@endforeach
