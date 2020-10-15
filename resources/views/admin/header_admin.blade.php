<div class="bg-dark" align="center">
          <span class="ml-4 text-light"> <h2> Selamat datang {{Auth::User()->username}}</h2> </span>
            <div class="row">
        <div class="col-auto mr-auto ml-0 mb-0">
          <ul class="nav nav-tabs">
            <li class="nav-item" >
              <a class="nav-link active text-light bg-primary" href="{{route('mahasiswa')}}">Mahasiswa</a>
            </li>
            <li class="nav-item" style="padding-left:10px">
               <a class="nav-link text-light bg-primary" href="{{route('data_nilai')}}">Nilai</a>
            </li>
          </ul>
        </div>
       <div class="col-auto mr-5 my-auto">          
              <div class="btn-group">
              <a href="{{route('logout')}}"><button type="button" class="btn btn-danger">Keluar</button> </a>        
              </div>
        </div>
      </div>
</div>