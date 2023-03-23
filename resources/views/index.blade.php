@extends('layouts.app')
@section('title', 'Acasa')
@section('content')
    <main>
        <section class="info">
            <div class="text">
                <h2>We connect our customers with the best, and help them keep up-and stay open.</h2>
                <div class="services">
                    <div class="active">
                        <img src="{{ asset('imagini/star.png')}}" alt="">
                        We connect our customers with the best.
                    </div>
                    <div>
                        <img src="{{ asset('imagini/ochi.png')}}" alt="">
                        Advisor success customer launch party.
                    </div>
                    <div>
                        <img src="{{ asset('imagini/sun.png')}}" alt="">
                        Business-to-consumer long tail.
                    </div>
                </div>
            </div>
            <div class="grafic">
                <img src="{{ asset('imagini/section2.jpg') }}" alt="">
                <div class="diagrama">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    'Agile Development',
                    'Investor bandwidth',
                    'A/B testing'
                ],
                datasets: [{
                    data: [35, 30, 35],
                    backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }]
            },
        });
    </script>
@endpush