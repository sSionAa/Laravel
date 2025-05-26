<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <div class="add-books_form-wrapper">
        <form name="newbook" id="add-new-book" method="post" action="{{ Route('show_book') }}">
            <div class="form-section">
                <label for="title"> Title </label>
                <input type="text" id="title" name="title" class="form-control" value=@if($book) {{$book->title}}
                @endif required><br>
            </div>
            <div class="form-section">
                <label for="author"> Author </label>
                <input type="text" id="author" name="author" class="Form-control" value=@if($book) {{$book->author}} 
                @endif required><br>
            </div>
            <div class="form-section">
                <label for="genre"> Choose Genre:</label>
                <select name="genre" id="genre"  value=@if($book) {{$book->genre}} @endif>
                    <option value="fantasy">Fantasy</option>
                    <option value="sci-fi">Sci-Fi</option>
                    <option value="mystery">Mystery</option>
                    <option value="horror">Horror</option>
                    <option value="drama">Drama</option>
                </select>
            </div>
            <button type="submit" class="btn btn-prinary">Submit</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </form>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li> 
                @endforeach   
        </ul>
    @endif
</body>

</html>