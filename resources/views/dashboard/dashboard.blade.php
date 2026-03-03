{{-- @dd($title) --}}
@extends('dashboard.layouts.main')

@section('content')
    
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
                    <div class="flex justify-between mb-4 items-start">
                        <div class="font-medium">Welcome to the {{ $title }}! {{ Auth::user()->name }}!</div>
                </div>
            </div>
@endsection
