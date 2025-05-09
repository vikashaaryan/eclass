@extends('landing.publiclayout')

@section('title')
    Student Login
@endsection

@section('content')
    <div class="px-6 py-12 bg-white">
        <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row gap-12">
            <div class="lg:w-5/12 flex flex-col justify-center">
                <h2 class="text-4xl font-extrabold text-gray-900 mb-6">
                    Welcome Back to <span class="text-blue-700">Aimers</span>
                </h2>
                <p class="text-lg text-gray-600">
                    Access your personalized dashboard, course materials, and track your progress. Login now to continue your journey with us.
                </p>
            </div>

            <div class="lg:w-7/12">
                <div class="border border-gray-200 p-6 flex gap-5 flex-col rounded shadow">
                    <h2 class="text-center text-2xl font-bold">Student Login</h2>
                    <form action="" method="POST">
                        @csrf
                        <div class="flex flex-col gap-2">
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="bg-gray-200 rounded px-2 py-1">
                            @error('email')
                                <p class="text-xs text-red-400 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-2 mt-4">
                            <label for="">Password</label>
                            <input type="password" name="password"
                                class="bg-gray-200 rounded px-2 py-1">
                            @error('password')
                                <p class="text-xs text-red-400 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <input type="submit"
                                class="py-1 bg-blue-500 text-white font-semibold w-full rounded" value="Login">
                        </div>
                        <div class="text-sm text-center mt-3 text-gray-500">
                            Don't have an account? <a href="{{ route('public.apply') }}" class="text-blue-600 font-semibold">Apply Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
