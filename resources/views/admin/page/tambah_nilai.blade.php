@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-10 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Tambah Data Promo</h5>
                <form method="post" action=" ">
                    @csrf
                        <table class="col-7 table table-borderless"> 
                            <tr>
                                <td>NIM</td>
                                <td>:</td>
                                <td><input type="text" name="nim" placeholder="Masukkan NIM"/></td>
                            </tr>
                            <tr>
                                <td>Matakuliah</td>
                                <td>:</td>
                                <td><input type="text" name="matakuliah" placeholder="Masukkan Matakuliah"/></td>
                            </tr>
                            <tr>
                                <td>Nilai</td>
                                <td>:</td>
                                <td><input type="text" name="nilai" placeholder="Masukkan Nilai"/></td>
                            </tr>                          
                            <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" value="Tambah" class="btn-lg btn-primary" />  
                                <input type="reset" value="Reset" class="btn-lg btn-danger" />
                            </td>
                            </tr>
                        </table>
                    <br>
                </form>
         </div>
        </div>
      </div>
    </div>
</div>

@endsection