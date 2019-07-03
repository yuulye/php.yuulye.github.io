@extends ('base')

@section ('head')
<style>
  @include ('r.playing_cards.style')
</style>
@endsection

@section ('content')
  <div id="content"></div>
  <div style="display: none;">
    <div id="card">
      <table><tr><td></td></tr></table>
    </div>
  </div>
@endsection

@section ('body')
<script>
  @include ('r.playing_cards.script')
</script>
@endsection
