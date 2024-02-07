@extends('layouts.app')

@section('title')
    StudySync-HUB | Register to join with us
@endsection

@section('content')
    {{-- @livewire('register', ['user' => $user], key($user->id)) --}}
    @livewire('register')
@endsection