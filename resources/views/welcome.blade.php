{{-- @dd($users) --}}
@extends('components.main')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center mt-4">ConnectFriend - Casual Friends</h2>

        <!-- Search and Filter Section -->
        <div class="row mt-4">
            <div class="col-md">
                <form class="form-inline" action="\" method="GET">
                    <input class="form-control mr-sm-2 col-sm-6" type="search" placeholder="Search base on hobbies.." aria-label="Search" name="search" id="search">
                    <select class="form-control col-md-4 mr-sm-2" id="genderFilter" name="gender">
                        <option value="">Filter by Gender</option>
                        <option value="Male">male</option>
                        <option value="Female">female</option>
                    </select>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>

        <!-- User Cards Section -->
        <div class="row mt-4" id="userCards">
            @foreach ($users as $user)
                    <div class="col-md-4 user-card">
                        <a href="/user/{{ $user->id }}">
                            <div class="card" style="height: 450px">
                                <img src="https://picsum.photos/300" class="card-img-top user-image" alt="User  1">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $user->name }}</h5>
                                    <p class="card-text">{{ $user->gender }}</p>
                                    <p class="card-text">Hobbies: {{ $user->hobbies }}</p>
                                    <button class="btn btn-primary thumb-button">👍 Add to Wishlist</button>
                                </div>
                            </div>
                        </a>
                    </div>
            @endforeach
            <!-- Add more user cards as needed -->
        </div>
    </div>

    <script>
        // Example of filtering functionality (to be implemented)
        document.getElementById('searchHobby').addEventListener('input', function() {
            const searchValue = this.value.toLowerCase();
            const userCards = document.querySelectorAll('.user-card');
            userCards.forEach(card => {
                const hobbies = card.querySelector('.card-text').innerText.toLowerCase();
                if (hobbies.includes(searchValue)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        document.getElementById('genderFilter').addEventListener('change', function() {
            const selectedGender = this.value;
            // Implement gender filtering logic here
            // For now, this is just a placeholder
            alert('Gender filter selected: ' + selectedGender);
        });

        // Example of adding to wishlist functionality
        document.querySelectorAll('.thumb-button').forEach(button => {
            button.addEventListener('click', function() {
                alert('Added to Wishlist!');
            });
        });
    </script>
@endsection
