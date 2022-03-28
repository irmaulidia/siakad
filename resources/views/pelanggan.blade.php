@extends('layouts.master')
@section('navbar')
    <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link" href="{{ url('/')}}">Home</a></li>
            <li><a class="nav-link" href="{{ url('barang')}}">Barang</a></li>
            <li><a class="nav-link" href="{{ url('supplier')}}">Supplier</a></li>
            <li><a class="nav-link {{$active}}" href="{{ url('pelanggan')}}">Pelanggan</a></li>
            <li><a class="nav-link" href="{{ url('pegawai')}}">Pegawai</a></li>
            <li><a class="nav-link scrollto" href="{{ url('contact')}}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
@endsection

@section('content')
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>PELANGGAN</span>
          <h2>Pelanggan</h2>
          <p>Data Pelanggan yang Telah Bertransaksi di Raja Mobil</p>
        </div>

        <div class="row">
          @foreach($data as $d)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">{{$d->nama}}</a></h4>
              <p>{{$d->alamat}}</p>
              <p>____________________________</p>
              <p>Produk yang dibeli : {{$d->produk}}</p>
              <p>Total biaya : {{$d->total_biaya}}</p>
              <p>Tanggal transaksi : {{$d->tanggal_transaksi}}</p>
              <p>____________________________</p>
              <p>{{$d->no_hp}}</p>
            </div>
          </div>
          @endforeach

          <div class="pull-right">
            {{$data->links()}}
          </div>
        </div>

      </div>
    </section>
    
            
@endsection