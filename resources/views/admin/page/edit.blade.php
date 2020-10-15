@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-10 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Edit Data {{$data->id}}</h5>
                <form method="post" action=" ">
                    @csrf
                        <table class="col-7 table table-borderless"> 
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><input type="text" name="nama" value="{{$data->nama}}"/></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><input type="email" name="email" value="{{$data->email}}"/></td>
                            </tr>
                            <tr>
                                <td>NIM</td>
                                <td>:</td>
                                <td><input type="number" name="nim" value="{{$data->nim}}"/></td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td><input type="text" name="kelas" value="{{$data->kelas}}"/></td>
                            </tr>                            
                            <tr>
                            <td></td>
                            <td></td>
                            <td> <input type="submit" value="Edit" class="btn-lg btn-primary" />  
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