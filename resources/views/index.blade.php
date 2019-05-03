<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>

  <body>
    <div class="container">
    <br />

    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul Buku</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Pengarang</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($buku as $book)
      <tr>
        <td>{{$book['id']}}</td>
        <td>{{$book['judul']}}</td>
        <td>{{$book['penerbit']}}</td>
        <td>{{$book['tahun_terbit']}}</td>
        <td>{{$book['pengarang']}}</td>
        
        <td><a href="{{action('BukuController@edit', $book['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('BukuController@destroy', $book['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  <div><center>
    <div class="col-md-4"></div>
    <div class="form-group col-md-4" style="margin-top:10px">
      <a href="/buku/create">
      <button type="submit" class="btn btn-success">Buat Database</button></a>
    </div></center>
  </div>
  </body>
</html>