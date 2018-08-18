<thead>

  <tr>


    <th>id</th>
    <th>Name</th>

  </tr>

</thead>

<tbody>

  @foreach ($posts as $tag)

  <tr>


    <td>{{ $tag->id }}</td>
    <td>{{ $tag->title }}</td>

  </tr>
  @endforeach

</tbody>
<tfoot>
  <tr>
    <td colspan="2">
      {{ $posts->links() }}
    </td>
  </tr>
</tfoot>