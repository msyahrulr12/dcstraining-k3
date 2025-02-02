@extends('client.layouts.main')
@section('content')

<div
    class="content"
    x-data="{ open: false, imageUrl: '' }"
>
    {{-- Modal Image --}}
    <div
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4"
    x-on:click.away="open = false"
    x-transition
    x-show="open">
        <div class="bg-white p-4 rounded-lg shadow-lg max-w-lg w-full">
            <!-- Close button -->
            <button
                class="absolute top-4 right-4 text-gray-600 hover:text-gray-900 text-2xl"
                x-on:click="open = false"
            >&times;</button>

            <!-- Image inside the modal -->
            <img :src="imageUrl" alt="Expanded view" class="w-full h-auto rounded-lg">
        </div>
    </div>

    <div class="header flex flex-col text-white justify-center my-7">
        <div class="header-img w-full">
            <img
                src="{{ asset('storage/images/gallery.png') }}"
                class="w-12 mx-auto rounded-full bg-white"
                alt=""
            >
        </div>
        <div class="header-content text-center mt-3 flex flex-col gap-4">
            <h3 class="font-bold text-xl md:text-2xl xl:text-3xl">Galeri</h3>
            <small x-show="open">Hello World</small>
            <p
                class="font-light text-md md:text-lg xl:text-xl"
            >Image from <b>DCSTRAININGK3</b></p>
        </div>
    </div>
    <div class="gallery min-h-screen mx-4">
        <div
            id="gallery-content"
            class="img-parent grid gap-3 grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6"
        >
        @if (count($datas) > 0)
            @foreach ($datas as $data)
                <div class="img-item">
                    <img
                        src="{{ $data->image_url }}"
                        alt="{{ $data->image_name }}"
                        class="w-full object-cover block h-36 md:h-72"
                    >
                </div>
            @endforeach
        @endif

        </div>
        <div
            id="loading"
            class="text-white text-center my-10 font-bold text-xl sm:text-2xl md:text-2xl lg:text-4xl xl:text-4xl"
        >Loading...</div>
        </div>
</div>

<script>
    let nextPageUrl = '/api/galleries';

    async function loadMoreImage(firstLoad = false) {
        if (!nextPageUrl) return; // Stop when no more pages

        document.getElementById('loading').style.display = 'block';

        let response = await fetch(nextPageUrl);
        let data = await response.json();

        data.datas.data.forEach(gallery => {
            let img = document.createElement("img");
            img.setAttribute('src', gallery.image_url);
            img.setAttribute('alt', gallery.image_name);
            img.setAttribute('x-on:click', "open = true, imageUrl = $event.target.src");
            img.setAttribute('x-transition.delay.2000ms', '');
            img.setAttribute('x-transition:enter', 'transition ease-out duration-300')
            img.setAttribute('x-transition:enter-start', 'opacity-0 scale-90')
            img.classList.add('w-full');
            img.classList.add('object-cover');
            img.classList.add('block');
            img.classList.add('aspect-square');
            img.classList.add('h-full');

            let div = document.createElement("div");
            div.classList.add("img-item");
            div.appendChild(img);

            document.getElementById('gallery-content').appendChild(div);
        })

        document.getElementById("loading").style.display = "none";
        nextPageUrl = data.next_page_url; // Update next page URL

        console.log(data.next_page_url);

        if (firstLoad && !data.next_page_url) {
            console.log('No more images to load');
        }
    }

    // Initial image
    document.addEventListener("DOMContentLoaded", function() {
        loadMoreImage(true);
    });

    // lazy loading for gallery
    window.addEventListener("scroll", function() {
        if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 50) {
            loadMoreImage(false);
        }
    });
</script>

@endsection
