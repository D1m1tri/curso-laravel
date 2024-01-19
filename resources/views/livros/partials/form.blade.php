Título: <input type="text" name="title"             value="{{ old('title') ?? $livro->titulo ?? '' }}"><br>
Autor:  <input type="text" name="autor"             value="{{ old('autor') ?? $livro->autor  ?? '' }}"><br>
ISBN:   <input type="text" name="isbn" class="isbn" value="{{ old('isbn')  ?? $livro->isbn   ?? '' }}"><br>
<button type="submit">Enviar</button>
