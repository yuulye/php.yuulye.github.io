<dt style="
  padding: 8px 16px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
">
  <code>{{
    !is_array($post)?
    $post->date->format('Y M d'):$post[0]
  }}</code>
  &middot;
  <h4 style="display: inline;">{{
    !is_array($post)?
    $post->data->title:$post[1]
  }}</h4>
</dt>
<dd style="
  padding: 8px 16px;
  margin: 0;
">
  {{ !is_array($post)?$post->data->excerpt:$post[2] }}
  <a href="{{ url(
    (!is_array($post)?'/post/'.$post->path:$post[3])
  ) }}">more...</a>
</dd>
@include ('index.hr')
