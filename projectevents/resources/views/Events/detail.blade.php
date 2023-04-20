@extends('layouts.appMain')

@section('content')
    <a href="/" class="btn btn-primary absolute-top ml-3 mt-3">Back to events</a>
    <h1 class="text-center my-5">Event Information</h1>
    <div class="card w-75" style="margin: 30px auto;">
        <img src="{{ asset('images/' . $event->image) }}" class="w-100 h-100" alt="" style="object-fit: cover">
        <div class="card-body">
            <h4 class="card-title" style="color: #98acc1">{{ $event->title }}</h4>
            <p class="card-text" style="font-size: 18px;">
                Event date: {{ Carbon\Carbon::parse($event->date_event)->format('d.m.Y') }}
            </p>
            <p class="card-text" style="font-size: 18px;">{{ $event->description }}</p>
            <p class="card-text border-top pt-2">
                Last updated at:
                <small class="text-body-secondary">
                    {{ Carbon\Carbon::parse($event->updated_at)->format('d.m.Y') }}
                </small>
            </p>
        </div>
    </div>
@endsection
