@extends('admin.master')

@section('content')

<h1 align="center">Data admin</h1><hr>
      <a href="{{route('tambah_mahasiswa')}}"><div class="container" style="padding-bottom:30px"><button type="button" class="btn btn-dark btn-lg" >Tambah Mahasiswa</button></div></a>
      <div align="center">
          <table  class="col-8 table align-center" border=1> 
                <thead style="text-align:center" class="thead-dark">
                      <tr>
                          <th>Id</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>NIM</th>
                          <th>Kelas</th>
                          <th>Foto</th>
                          <th>Edit</th>
                      </tr>
                </thead>

                  @foreach($data as $dataMahasiswa)
                  <tr>
                        <td>{{$dataMahasiswa->id}}</td>
                        <td>{{$dataMahasiswa->nama}}</td>
                        <td>{{$dataMahasiswa->email}}</td>
                        <td>{{$dataMahasiswa->nim}}</td>
                        <td>{{$dataMahasiswa->kelas}}</td>
                        <td style="text-align:center"><img src="{{('../storage/gambar/mahasiswa/' . $dataMahasiswa->foto)}}" height="100px" width="70px;" alt=""></td>
                        <td style="text-align:center">
                              <div class="col-sm" style="padding-bottom:10px">
                                    <button  type="button" class="btn btn-outline-secondary"> 
                                                <a href="{{route('edit', ['id' => $dataMahasiswa->id])}}" class="text-dark">Edit</a>
                                    </button>                              
                              </div>
                              <div class="col-sm">                              
                                    <button type="button" class="btn btn-outline-secondary"> 
                                                <a href="{{route('delete', ['id' => $dataMahasiswa->id])}}" class="text-dark">Delete</a>
                                    </button>
                              </div>
                          
                        </td>
                  </tr>
                  @endforeach
          </table>
          <br>
          <br>
          <div class="row">  
			<div class="col-lg-12">
				{{ $data -> links()}}
			</div>
		</div>
    </div>

    
 @endsection