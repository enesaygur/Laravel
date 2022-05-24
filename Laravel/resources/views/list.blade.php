@foreach($)
    <tr>
        <td>{{ $item->metin}}</td>
        <td>{{ $item->created_at}}</td>
        <td>{{ $item->updated_at}}</td>
    </tr>
@endforeach
