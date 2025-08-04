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
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .profile-card {
        background: white;
        border: 1px solid #ccc;
        border-radius: 15px;
        padding: 20px;
        width: 250px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .profile-img {
        width: 100px;
        height: 100px;
        background: #ccc;
        border-radius: 50%;
        margin-bottom: 10px;
        object-fit: cover;
    }

    .username {
        color: #888;
        margin: 5px 0;
        font-size: 14px;
    }

    .name {
        margin: 0;
        font-size: 18px;
        font-weight: bold;
    }

    .info {
        font-size: 14px;
        color: #555;
    }

    .desc {
        margin: 10px 0;
        font-size: 13px;
    }

    .buttons button {
        margin: 5px;
        padding: 8px 15px;
        background: #ddd;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }

    .buttons button:hover {
        background: #bbb;
    }
</style>

<div class="container">
@foreach ($students as $student)
        <div class="profile-card">
        <img src="{{ $student['foto'] }}" alt="{{ $student['nama'] }}" class="profile-img">
        <p class="name">{{ $student['nama'] }} </p>
        <p class="info">{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
        <p class="desc">{{ $student['deskripsi'] }}</p>
        <div class="buttons">
            <a href="/students/{{ $student['id'] }}">
            <button>View Profile</button>
            </a>
        </div>
    </div>
@endforeach
</div>
@endsection
