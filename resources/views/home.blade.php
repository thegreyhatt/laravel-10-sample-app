@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @livewire('post-input')
            {{-- <livewire:post-input /> --}}
            <hr>
            @livewire('posts-container')
        </div>
    </div>
</div>
@endsection
