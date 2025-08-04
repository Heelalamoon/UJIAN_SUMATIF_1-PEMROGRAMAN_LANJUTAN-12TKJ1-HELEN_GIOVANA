@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')
<style>
    .profile-layout {
        max-width: 600px;
        margin: 60px auto;
        background-color: #fff;
        border-radius: 20px;
        padding: 40px 30px;
        text-align: center;
        font-family: Arial, sans-serif;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .profile-layout img {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
    }

    .username {
        font-size: 14px;
        color: #888;
        margin-bottom: 10px;
    }

    .nama {
        font-size: 26px;
        font-weight: bold;
        margin-bottom: 6px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
    }

    .kelas-hobi {
        font-size: 16px;
        color: #444;
        margin-bottom: 14px;
    }

    .deskripsi {
        font-size: 15px;
        color: #555;
        margin-bottom: 30px;
    }

    .btn-group {
        display: flex;
        justify-content: center;
        gap: 16px;
    }

    .btn {
        padding: 10px 20px;
        border: none;
        background-color: #ddd;
        color: #333;
        border-radius: 10px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn:hover {
        background-color: #ccc;
    }

    .btn-danger {
        background-color: #f87171;
        color: white;
    }

    .btn-danger:hover {
        background-color: #dc2626;
    }
    </style>

    <div class="profile-layout">
    <img src="{{ $student['foto'] }}" alt="Foto {{ $student['nama'] }}">

    <div class="username">{{ $student['username'] }} </div>

    <div class="nama"> {{ $student['nama'] }}</div>

    <div class="kelas-hobi">{{ $student['kelas'] }} | {{ $student['hobi'] }}</div>

    <p class="deskripsi">{{ $student['deskripsi'] }}</p>

    <div class="btn-group">
        <button class="btn">Edit Profile</button>
        <button class="btn btn-danger">Delete Account</button>
    </div>
</div>
@endsection
