<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar buku</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>

  <body>
    <div class="container" style="margin-top:20px"><br/>
      <h2>Tambah Buku Baru</h2><br/>
      <form method="post" action="{{url('buku')}}" enctype="multipart/form-data">
        
        @csrf
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Judul buku :</label>
            <input type="text" class="form-control" name="judul">
          </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Penerbit :</label>
              <input type="text" class="form-control" name="penerbit">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Qty">Tahun Terbit :</label>
            <input type="text" class="form-control" name="tahun_terbit">
          </div>
        </div>
         
        <div class="row">
        <div class="col-md-4"></div>
          <div class="form-group col-md-4">
              <label>Pengarang :</label>
              <input type="text" class="form-control" name="pengarang">  
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:20px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>