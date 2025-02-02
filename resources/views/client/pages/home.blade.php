@extends('client.layouts.main')
@section('content')

<!-- Carousel -->
@include('client.layouts.carousel')
<!-- Carousel End -->

<div class="content">
    <!-- What is K3 -->
    <div class="k3-explaination mt-10 text-black py-6 px-4 bg-orange-200">
        <div class="title text-2xl font-bold">Apa itu K3?</div>
        <div class="content text-base/snug my-5">
            <p><b>K3</b> atau <b>Keselamatan dan Kesehatan Kerja</b> adalah suatu upaya kerja sama, saling pengertian dan partisipasi dari pengusaha dan karyawan dalam perusahaan untuk melaksanakan tugas dan kewajiban bersama dibidang keselamatan, kesehatan, dan keamanan kerja dalam rangka meningkatkan produktivitas.</p>
        </div>
    </div>
    <!-- What is K3 End -->

    <!-- About Us -->
    <div class="about-us py-8 px-6 md:pxß-0 text-white">
        <div class="title pb-8">
            <h4 class="text-2xl underline md:text-2xl font-bold">{{ $about_us['title'] }}</h4>
        </div>
        <div
            class="flex flex-col-reverse gap-7 md:flex-row md:gap-10">
            <div class="left md:basis-1/2">
                <div class="content text-base">
                    {!! $about_us['description'] !!}
                </div>
            </div>
            <div class="right md:basis-1/2">
                <div class="mx-auto">
                    <img
                        src="{{ $about_us['image_url'] }}"
                        alt="Director-Image"
                        class="w-full shadow-lg">
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Kompetensi Ahli K3 Umum -->
    <div class="ka-k3-umum p-6 md:p-10 text-black bg-gray-200">
        <div class="title">
            <h4 class="text-2xl md:text-3xl lg:text-2xl underline font-bold py-4">{{ $expert_competence['title'] }}</h4>
        </div>
        <div class="flex flex-col-reverse gap-5 lg:flex-row h-full w-full">
            <div class="left basis-1/2">
                <div class="content text-base/relaxed lg:text-base">
                    {!! $expert_competence['description'] !!}
                </div>
            </div>
            <div class="right basis-1/2">
                <img
                    src="{{ $expert_competence['image_url'] }}"
                    alt="Komptensi Ahli K3"
                    class="w-full shadow-lg !shadow-gray-700">
            </div>
        </div>
    </div>
    <!-- Kompetensi Ahli K3 Umum End -->

    <!-- Layanan Kami -->
    <div class="layanan-kami my-5 py-4 px-5">
        <div class="title pb-8 text-white">
            <h4 class="text-2xl underline md:text-2xl font-bold">Layanan Kami</h4>
        </div>

        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
            @foreach ($services as $service)
                <div class="card bg-white text-center p-3 shadow-sm shadow-black w-full overflow-hidden">
                    <div class="card-image">
                        <img
                            src="{{ $service['image_url'] }}"
                            alt="Layanan Kami {{ $service['id'] }}"
                            class="w-full">
                    </div>
                    {{-- xl:text-base/tight --}}
                    <div class="card-detail w-full text-wrap">
                        <div class="card-title text-xs font-bold my-2 text-wrap">{{ $service['title'] }}</div>
                        <div class="card-body text-sm font-medium text-wrap">
                            {{ $service['subtitle'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Layanan Kami End -->

    <!-- Materi Training Ahli K3 Umum -->
    <div class="mta-k3-umum p-8 lg:p-16 text-white">
        <div class="title">
            <h4 class="text-2xl md:text-2xl underline font-bold py-4">{{ $training_material['title'] }}</h4>
        </div>
        <div class="flex">
            <div class="left">
                <div class="content text-base">
                    {!! $training_material['description'] !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Materi Training Ahli K3 Umum End -->

    <!-- Persyaratan Ahli dan Peserta K3 Umum -->
    <div class="pap-k3-umum px-16 py-6 text-black bg-gray-200 flex flex-col gap-8 md:flex-row">
        <div class="left">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">{{ $expert_requirement['title'] }}</h4>
            </div>
            <div class="content text-base">
                {!! $expert_requirement['description'] !!}
            </div>
        </div>
        <div class="right">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">{{ $participant_requirement['title'] }}</h4>
            </div>
            <div class="content text-base">
                {!! $participant_requirement['description'] !!}
            </div>
        </div>
    </div>
    <!-- Persyaratan Ahli K3 Umum End -->

    <!-- Fasilitas Training Ahli K3 Umum -->
    <div class="fta-k3-umum p-8 text-white flex flex-col gap-8 md:flex-row">
        <div class="left md:basis-2/4">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">{{ $training_facility['title'] }}</h4>
            </div>
            <div class="content text-base">
                {!! $training_facility['description'] !!}
            </div>
        </div>
        <div class="right md:basis-2/4">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">{{ $training_instructure['title'] }}</h4>
            </div>
            <div class="content text-base">
                {!! $training_instructure['description'] !!}
            </div>
        </div>
    </div>
    <!-- Fasilitas Training Ahli K3 Umum End -->

    <!-- Investasi Training Ahli K3 Umum -->
    <div class="ita-k3-umum p-8 text-white flex flex-col gap-8 md:flex-row">
        <div class="left md:basis-2/4">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">{{ $training_investation['title'] }}</h4>
            </div>
            <div class="content text-base">
                {!! $training_investation['description'] !!}
            </div>
        </div>
        <div class="right md:basis-2/4">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">Flyer Training :</h4>
            </div>
            <div class="content text-base">
                <div class="mx-auto">
                    <img
                        src="{{ $flyer_training['image_url'] }}"
                        alt="Flyer-Training"
                        class="w-full shadow-lg">
                </div>
            </div>
        </div>
    </div>
    <!-- Investasi Training Ahli K3 Umum End -->

    <!-- Klien Kami -->
    <div class="kk p-8 text-white">
        <div class="left">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">Klien Kami</h4>
            </div>
            <div class="content text-base">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    @if (count($clients) > 0)
                        @foreach ($clients as $client)
                            <div>
                                <img class="h-full max-w-full rounded-lg" src="{{ $client['image_url'] }}" alt="{{ $client['name'] }}">
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Klien Kami End -->

    <!-- Info Dan Registrasi -->
    <div class="ir-k3-umum p-8 text-white">
        <div class="left">
            <div class="title pb-8">
                <h4 class="text-2xl underline font-bold">Info Dan Registrasi</h4>
            </div>
            <div class="content text-base">
                <h4 class="text-xl">Hubungi Tim Kami :</h4><br>
                <table>
                    @if (count($informations) > 0)
                        @foreach ($informations as $information)
                            <tr>
                                <td width="15%">{{ $information['key'] }}</td>
                                <td width="2%">:</td>
                                <td>{{ $information['value'] }}</td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
    <!-- Info Dan Registrasi End -->
</div>

@endsection
