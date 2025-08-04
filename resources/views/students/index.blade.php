@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f3f3f3;
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 1000px;
        margin: auto;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        border: 1px solid #ccc;
    }

    .profile-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-between;
    }

    .profile-link {
        text-decoration: none;
        color: inherit;
        width: calc(50% - 10px);
    }

    .profile-card {
        display: flex;
        flex-direction: column;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        width: 100%;
        height: 180px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        box-sizing: border-box;
        gap: 10px;
        transition: border 0.3s ease, background 0.3s;
        cursor: pointer;
    }

    .profile-card:hover {
        border: 2px solid #3320be;
        background-color: #f9f9ff;
    }

    .profile-top {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .profile-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        background-color: #ccc;
    }

    .profile-info {
        display: flex;
        flex-direction: column;
    }

    .profile-info h3 {
        margin: 0;
        font-size: 1.1em;
        font-weight: bold;
    }

    .profile-info .username {
        margin: 4px 0;
        font-size: 0.9em;
        color: #777;
    }

    .desc {
        font-size: 0.85em;
        color: #333;
        display: flex;
    }
</style>

<div class="container">
    <div class="profile-list">
        @foreach($students as $student)
        <a href="/students/{{ $student['id'] }}" class="profile-link">
            <div class="profile-card {{ $loop->first ? 'highlight' : '' }}">
                <div class="profile-top">
                    <img src="{{ $student['foto'] }}" alt="Foto {{ $student['nama'] }}" class="profile-img">
                    <div class="profile-info">
                        <h3>{{ $student['nama'] }}</h3>
                        <p class="username">{{ $student['username'] }}</p>
                    </div>
                </div>
                <p class="desc">{{ $student['deskripsi'] }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
