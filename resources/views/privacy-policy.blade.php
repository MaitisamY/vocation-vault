@extends('layout')

@section('content')
    <!-- Privacy Policy page content here -->

    <!-- Account Popup -->
    @include('components.account-popup')
    <!-- Account Popup -->

    <!-- Intro Container -->
    <div class="intro-container">
        <div class="overlay">
            @include('components.util-bar')

            <h3>{{ $policies['title'] }}</h3>
            <h6>{{ $policies['last_updated'] }}</h6>
        </div>
    </div>
    <!-- Intro Container -->

    <div class="privacy-policy-container">

    @foreach ($policies['description'] as $key => $description)
        <h3>{{ $key }}</h3>
        @if (is_array($description))
            <ul>
                @foreach ($description as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @else
            <p>{{ $description }}</p>
        @endif
    @endforeach

    <h4>{{ $policies['ending_note'] }}</h4>
    </div>
@endsection
