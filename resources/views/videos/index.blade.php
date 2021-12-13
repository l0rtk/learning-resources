<h1>Videos</h1>


<table>

  @foreach($videos as $videos)
  <tr>
    <td>{{video['id']}}</td>
    <td>{{video['link']}}</td>
    <td>{{video['title']}}</td>
    <td>{{video['description']}}</td>
  </tr>
  @endforeach
</table>
