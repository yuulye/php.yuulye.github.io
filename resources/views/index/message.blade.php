<form action="mailto:yuulye@gmail.com">
  <b>Message</b>
  &middot;
  <label for="subject">Subject</label>
  <br/>
  <input
    id="subject"
    type="text"
    name="subject"
    value="[a:{{
      request()->path()
    }}] Subject"
  />
  <br/>
  <label for="from">From</label>
  <br/>
  <input
    id="from"
    type="text"
    name="from"
    value="your@email.com"
  />
  <br/>
  <label for="body">Body</label>
  <br/>
  <textarea id="body" name="body">{{
    "Hi... NiceSite!"
  }}</textarea>
  <br/>
  <input type="submit" value="Send"/>
</form>

<hr/>

@include('disqus')
