@extends('template.landingPage.header')
@section('title')
    BERITA
@endsection
@section('content')
<div class="flex-grow my-[100px] text-center px-4 lg:px-10">
    <!-- Section Berita -->
    <section class="my-10">
        <div>
            <h1 class="text-5xl font-bold italic text-center">BERITA TERKINI</h1>
            <hr class="w-1/4 mx-auto border-4 border-gray-800 mt-4">
        </div>
    </section>


    <section class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
       
            
            <div class="card shadow-lg bg-white rounded-lg p-6">
                <img src="" alt="Berita 4" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-2xl font-bold mt-4">ini adalah judul 1</h2>
                <p class="text-center mt-3">ini adalah keterangan singkat</p>
                <a href="#" class="text-blue-600 font-bold mt-3 inline-block">Baca selengkapnya...</a>
            </div>
    
            <div class="card shadow-lg bg-white rounded-lg p-6">
                <img src="" alt="Berita 4" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-2xl font-bold mt-4">ini adalah judul 1</h2>
                <p class="text-center mt-3">ini adalah keterangan singkat</p>
                <a href="#" class="text-blue-600 font-bold mt-3 inline-block">Baca selengkapnya...</a>
            </div>
    
            <div class="card shadow-lg bg-white rounded-lg p-6">
                <img src="" alt="Berita 4" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-2xl font-bold mt-4">ini adalah judul 1</h2>
                <p class="text-center mt-3">ini adalah keterangan singkat</p>
                <a href="#" class="text-blue-600 font-bold mt-3 inline-block">Baca selengkapnya...</a>
            </div>
    
            <div class="card shadow-lg bg-white rounded-lg p-6">
                <img src="" alt="Berita 4" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-2xl font-bold mt-4">ini adalah judul 1</h2>
                <p class="text-center mt-3">ini adalah keterangan singkat</p>
                <a href="#" class="text-blue-600 font-bold mt-3 inline-block">Baca selengkapnya...</a>
            </div>
    


    </section>

</div>


@endsection