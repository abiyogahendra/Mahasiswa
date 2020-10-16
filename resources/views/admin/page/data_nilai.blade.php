@extends('admin.master')

@section('content')

<h1 align="center">Data admin</h1><hr>
      <a href="{{route('tambah_nilai')}}"><div class="container" style="padding-bottom:30px"><button type="button" class="btn btn-dark btn-lg" >Tambah Nilai</button></div></a>
      <div align="center">
          <table  class="col-8 table align-center" border=1> 
                <thead style="text-align:center" class="thead-dark">
                      <tr>
                          <th>Nim</th>
                          <th>Nama</th>
                          <th>Matakuliah</th>
                          <th>Nilai</th>                          
                          <th>Action</th>
                      </tr>
                </thead>

                  @foreach($data as $dataNilai)
                  <tr style="text-align:center">
                        <td>{{$dataNilai->Mahasiswa['nim']}}</td>
                        <td>{{$dataNilai->Mahasiswa['nama']}}</td>
                        <td>{{$dataNilai->matakuliah}}</td>
                        <td>{{$dataNilai->nilai}}</td>                                              
                        <td style="text-align:center">
                              
                              <div class="col-sm">                              
                                    <button type="button" class="btn btn-outline-secondary"> 
                                    <a href="{{route('nilai_delete', ['id' => $dataNilai->id_nilai])}}" class="text-dark">Delete</a>
                                    </button>
                              </div>
                          
                        </td>
                  </tr>
                  @endforeach
          </table>
          <br>
          <br>
                   
            

    </div>
                  <div align="center" class="container mt-5 center">
                        {{-- Pagination --}}
                        <div class="d-flex justify-content-center">
                              {!! $data ->links() !!}
                        </div>     
                  </div>
 @endsection