@extends('layouts.main')

@section('content')
    <h2 class="fw-bold text-uppercase title-text">
        Halaman ini dibuat oleh 2301010096 - siti asmawati
    </h2>

    <div class="gallery">
        @php
            $places = [
                ['img' => 'acropolis.jpg', 'name' => 'Acropolis, Yunani'],
                ['img' => 'shibuya.jpg', 'name' => 'Shibuya, Jepang'],
                ['img' => 'cappadocia.webp', 'name' => 'Cappadocia, Mudi Bale'],
                ['img' => 'giza.webp', 'name' => 'Giza, Lotim'],
                ['img' => 'garuda.jpg', 'name' => 'Garuda Wisnu Kencana, Bali'],
                ['img' => 'huayana.jpg', 'name' => 'Huayana, Peru'],
                ['img' => 'jumeirah.jpg', 'name' => 'Jumeirah, Abu Dhabi'],
                ['img' => 'newyork.jpg', 'name' => 'Newyork, US'],
                ['img' => 'niagara.jpg', 'name' => 'Niagara, Kanada (Karangan Anak Narmada)'],
            ];
        @endphp

        @foreach ($places as $place)
            <div class="gallery-item">
                <img src="{{ asset('images/' . $place['img']) }}" alt="{{ $place['name'] }}">
                <div class="caption">{{ $place['name'] }}</div>
            </div>
        @endforeach
    </div>
@endsection
