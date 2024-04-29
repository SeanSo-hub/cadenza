@extends('components.layout')

@section('content')
    <div class="px-4 md:px-0">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-4xl mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Signup
                </h2>
                <p class="mb-4">Create an account to post gigs</p>
            </header>

            <form method="POST" action="/users">
                @csrf
                <div class="flex flex-col gap-2 md:flex-row">
                    <div class="mb-6 w-full md:w-1/2">
                        <label for="firstname" class="inline-block text-lg mb-2">
                            Firstname
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="firstname"
                            value="{{ old('firstname') }}" />

                        @error('firstname')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6 w-full md:w-1/2">
                        <label for="lastname" class="inline-block text-lg mb-2">
                            Lastname
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="lastname"
                            value="{{ old('lastname') }}" />

                        @error('lastname')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Email</label>
                    <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                        value="{{ old('email') }}" />

                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="flex flex-col gap-2 md:flex-row">
                    <div class="mb-6 w-full md:w-1/2">
                        <label for="password" class="inline-block text-lg mb-2">
                            Password
                        </label>
                        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />

                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6 w-full md:w-1/2">
                        <label for="password_confirmation" class="inline-block text-lg mb-2">
                            Confirm Password
                        </label>
                        <input type="password" class="border border-gray-200 rounded p-2 w-full"
                            name="password_confirmation" />

                        @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Sign Up
                    </button>
                </div>

                <div class="mt-8">
                    <p>
                        Already have an account?
                        <a href="/login" class="text-laravel">Login</a>
                    </p>
                </div>

            </form>
        </div>
    </div>
@endsection
