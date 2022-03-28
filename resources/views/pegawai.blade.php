@extends('layouts.master')
@section('navbar')
    <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link" href="{{ url('/')}}">Home</a></li>
            <li><a class="nav-link" href="{{ url('barang')}}">Barang</a></li>
            <li><a class="nav-link" href="{{ url('supplier')}}">Supplier</a></li>
            <li><a class="nav-link" href="{{ url('pelanggan')}}">Pelanggan</a></li>
            <li><a class="nav-link {{$active}}" href="{{ url('pegawai')}}">Pegawai</a></li>
            <li><a class="nav-link scrollto" href="{{ url('contact')}}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
@endsection

@section('content')
<section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <span>Pegawai</span>
          <h2>Pegawai</h2>
          <p>Daftar nama pegawai PT. Raja Mobil</p>
        </div>

        <div class="row">
          @foreach($data as $pegawai)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
              <div class="member">
                <img src="{{$pegawai->gambar}}">

                <h4>{{$pegawai->nama}}</h4>
                <span>{{$pegawai->jabatan}}</span>
                <p>{{$pegawai->deskripsi}}</p>
                <div class="social"></div>
                
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
                @endforeach
              </div>


    </section><!-- End Team Section -->


@endsection