<ul>
    <li style="list-style-type: none; margin-left: -30px">
        <a href="{{ route('livros.show', $livro->isbn) }}" style="text-decoration: none">
            <h4 style="font-weight: bold">{{ $livro->titulo }}</h4>
        </a>
    </li>
    <li>{{ $livro->autor }}</li>
    <li class="isbn">{{ $livro->isbn }}</li>
    <li class="btn-group">
        <form action="{{ route('livros.destroy', $livro->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Apagar" onclick="return confirm('Tem a certeza que pretende apagar?')" class="btn btn-danger">
        </form>
        <a href="{{ route('livros.edit', $livro->isbn) }}" class="btn btn-primary">Editar</a>
    </li>

</ul>
