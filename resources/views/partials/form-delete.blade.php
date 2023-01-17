<form class="d-inline" onsubmit="return confirm('Confermi l\'eliminazione di: {{$title}}')" action="{{route('comics.destroy', $id)}}" method="POST">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-outline-danger " title="delete"><i class="fa-solid fa-mask text-light"></i></button>
</form>
