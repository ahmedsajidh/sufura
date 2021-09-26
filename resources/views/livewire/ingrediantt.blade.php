<div>
    <tr>
@foreach($ingrediants as $ingrediant)
        <td>{{$ingrediant->name}}</td>
        <td>{{$ingrediant->qty}}</td>
        <td><a href="/admin/dashboard/ingredient/{{$ingrediant->id}}"  class="btn btn-danger"><i class="fa fa-minus"></i></a></td>
@endforeach
    </tr>
</div>
