@extends('layouts.master')
@section('navbar')
    <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link" href="{{ url('/')}}">Home</a></li>
            <li><a class="nav-link {{$active}}" href="{{ url('barang')}}">Barang</a></li>
            <li><a class="nav-link" href="{{ url('supplier')}}">Supplier</a></li>
            <li><a class="nav-link" href="{{ url('pelanggan')}}">Pelanggan</a></li>
            <li><a class="nav-link" href="{{ url('pegawai')}}">Pegawai</a></li>
            <li><a class="nav-link scrollto" href="{{ url('contact')}}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
@endsection

@section('content')
<section id="why-us" class="why-us">
        <div class="container">
            <div class="section-title">
                <span>Barang</span>
                <h2>Barang</h2>
                <p>Berbagai Merek Mobil dengan Kualitas Terbaik dapat Anda dapatkan di Raja Mobil</p>
            </div>

            
            <div class="row">
                @foreach($data as $d)
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="box">
                    <span>{{$d->nama_mobil}}</span>
                    <img src="{{$d->gambar}}" width="308" height="200">
                
                    <h4>{{$d->harga}}</h4>
                    <p>Transmisi : {{$d->transmisi}}</p>
                    <p>Bahan bakar : {{$d->bahan_bakar}}</p>
                    <p>Mesin : {{$d->mesin}}</p>
                    <p>Tempat duduk : {{$d->tempat_duduk}}</p>
                    <p>Varian warna : {{$d->varian_warna}}</p>
                    </div>
                </div>
                @endforeach

            </div>
            
        </div>
        </section>

@endsection