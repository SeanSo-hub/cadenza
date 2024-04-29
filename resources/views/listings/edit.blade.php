@extends('components.layout')

@section('content')
    <div class="px-4 md:px-0">
        <x-card class="!p-10 rounded max-w-4xl mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Edit Gig
                </h2>
                <p class="mb-4">Edit {{ $listing->title }}</p>
            </header>

            <form action="/listings/{{ $listing->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="organizer" class="inline-block text-lg mb-2">Producer/Organizer</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="organizer"
                        value="{{ $listing->organizer }}" />

                    @error('organizer')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="title" class="inline-block text-lg mb-2">Event title</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                        placeholder="Cadenza music fest" value="{{ $listing->title }}" />

                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="location" class="inline-block text-lg mb-2">Location</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                        placeholder="Stadium" value="{{ $listing->location }}" />

                    @error('location')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                        placeholder="sample@email.com" value="{{ $listing->email }}" />

                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="contact_number" class="inline-block text-lg mb-2">
                        Contact number
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="contact_number"
                        value="{{ $listing->contact_number }}" />

                    @error('contact_number')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tags" class="inline-block text-lg mb-2">
                        Tags (comma separated)
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                        placeholder="Example: Music Festival, Private event, etc" value="{{ $listing->tags }}" />

                    @error('tags')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="event_banner" class="inline-block text-lg mb-2">
                        Event banner
                    </label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="event_banner"
                        value="{{ $listing->event_banner }}" />

                    <img class="hidden w-48 md:block mx-auto mt-4"
                        src="{{ $listing->event_banner ? asset('storage/' . $listing->event_banner) : asset('/images/no-image.png') }}"
                        alt="" />

                    @error('event_banner')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="inline-block text-lg mb-2">
                        Gig Description
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10">{{ $listing->description }}</textarea>

                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 flex justify-end items-center">

                    <a href="/" class="text-black mr-4"> Back </a>

                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Update
                    </button>

                </div>
            </form>
        </x-card>
    </div>
@endsection
