@extends ('base')

@section ('content')
  <h1>Codes</h1>
  @foreach ($files as $i)
    <div>
      @include ('codes.item')
    </div>
  @endforeach
@endsection

