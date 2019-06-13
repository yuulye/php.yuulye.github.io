<div class="item">
  <br/>
  <div class="header">
    <code>{{
      !is_array($post)?
      $post->date->format('Y m/d'):$post[0]
    }}</code>
    &middot;
    <b>{{
      !is_array($post)?
      $post->data->title:$post[1]
    }}</b>
  </div>
  <br/>

  <div class="content">
    {{ !is_array($post)?$post->data->excerpt:$post[2] }}
    <a href="{{ url(
      (!is_array($post)?'/post/'.$post->path:$post[3])
    ) }}">more...</a>
  </div>
  <br/>
</div>

<hr/>

