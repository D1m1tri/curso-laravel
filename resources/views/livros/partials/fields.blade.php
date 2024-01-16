<ul>
    <li><a href="{{ route('livros.show', $livro->isbn) }}">{{ $livro->titulo }}</a></li>
    <li>{{ $livro->autor }}</li>
    <li class="isbn">{{ $livro->isbn }}</li>
    <li>
        <form action="{{ route('livros.destroy', $livro->isbn) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Apagar" onclick="return confirm('Tem a certeza que pretende apagar?')">
        </form>
    </li>
</ul>
