<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <x-nav-link :active="request()->routeIs('home')" href="{{ route('home') }}">Home</x-nav-link>
                <x-nav-link :active="request()->routeIs('about')" href="{{ route('about') }}">About</x-nav-link>
                <x-nav-link :active="request()->routeIs('contact')" href="{{ route('contact') }}">Contact</x-nav-link>
                <x-nav-link :active="request()->routeIs('posts.*')" href="{{ route('posts.index') }}">Posts</x-nav-link>
                <x-nav-link :active="request()->routeIs('users.*')" href="{{ route('users.index') }}">Users</x-nav-link>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <span class="nav-link ms-auto active">{{ Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="nav-link">Log Out</button>
                    </form>
                @endauth
            </ul>
        </div>
    </div>
</nav>
