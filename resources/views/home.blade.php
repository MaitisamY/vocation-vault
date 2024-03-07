@extends('layout')

@section('content')
    <!-- Home page content here -->
    <!-- Intro Find Job Container -->
    <div class="intro-find-job-container">
        <div class="overlay">
            <div class="util-bar">
                <button type="button" class="account-btn">
                    <i class="fa-regular fa-user"></i> Account
                </button>

                <div class="util-btn-container">
                    <a href="#" class="find-job-btn">
                        <i class="fa-solid fa-search"></i> Find Jobs
                    </a>
                    <a href="#" class="post-job-btn">
                        <i class="fa-solid fa-plus"></i> Post a Job
                    </a>
                </div>
            </div>

            <h2>Innovative Job Board: Post and Find Niche Opportunities</h2>
            <p>
                Our platform offers a niche job board for posting and finding unique career opportunities.
                Explore and connect with specialized roles today.
            </p>

            <div class="search-container">
                <form action="" method="POST">
                    @csrf
                    <span class="fa fa-search"></span>
                    <input type="text" name="search" placeholder="Search for roles...">
                    <select>
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @endforeach
                    </select>
                    <select>
                        <option value="">Select Location</option>
                        <option value="1">Location 1</option>
                        <option value="2">Location 2</option>
                        <option value="3">Location 3</option>
                    </select>
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Intro Find Job Container -->

    <!-- Category Container -->
    <div class="category-container">
        <h3>Categories</h3>
        <div class="category-card-container">
            @foreach ($categories as $category)
                <a href="{{ route('category.show', $category['slug']) }}" class="category-card">
                    <img src="{{ asset('images/' . $category['image']) }}" alt="{{ $category['name'] }}">
                    {{ $category['name'] }}
                </a>
            @endforeach
        </div>
    </div>
    <!-- Category Container -->

    <!-- Job Listing Container -->
    <div class="job-listing-container">
        <h3>Latest Listings</h3>
        <div class="job-listing-card-container">
            @foreach ($listings as $job)
                <a href="{{ route('listing.show', $job['id']) }}" class="job-listing-card">
                    <h6>{{ $job['category'] }}</h6>
                    <h5>{{ $job['title'] }}</h5>
                    <p>{{ str($job['description'])->limit(125) }}</p>
                    <h4 class="tooltip-email">
                        <img src="{{ asset('images/' . $job['image']) }}" alt="{{ $job['title'] }}" /> 
                        {{ $job['user'] }}, {{ $job['location'] }}
                        <span class="tooltiptext">{{ $job['email'] }}</span>
                    </h4>
                    <div class="type-tags">
                        @foreach ($job['type'] as $tag)
                            <span>{{ $tag }}</span>
                        @endforeach
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <!-- Job Listing Container -->
@endsection
