@extends('layout')

@section('content')
    <!-- Categories page content here -->

    <!-- Account Popup -->
    @include('components.account-popup')
    <!-- Account Popup -->

    <!-- Intro Container -->
    <div class="intro-container">
        <div class="overlay">
            @include('components.util-bar')

            <h3>Categories</h3>
        </div>
    </div>
    <!-- Intro Container -->
@endsection
