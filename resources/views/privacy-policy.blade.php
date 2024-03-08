@extends('layout')

@section('content')
    <!-- Privacy Policy page content here -->
    <div class="privacy-policy-container">
    <h2>{{ $policies['title'] }}</h2>
    <h6>{{ $policies['last_updated'] }}</h6>

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