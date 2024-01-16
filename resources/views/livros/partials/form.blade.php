<input type="hidden" name="id" value="{{ $livro->id ?? '' }}">
Título: <input type="text" name="title"             value="{{ $livro->titulo ?? old('title') }}"><br>
Autor:  <input type="text" name="autor"             value="{{ $livro->autor  ?? old('autor') }}"><br>
ISBN:   <input type="text" name="isbn" class="isbn" value="{{ $livro->isbn   ?? old('isbn')  }}"><br>
<button type="submit">Enviar</button>
