@extends('landing.publiclayout')

@section('title')
    Student Login | Aimers
@endsection

@section('content')
    <div class="min-h-screen bg-gradient-to-br from--50  py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <div class="lg:w-1/2 max-w-lg">
                    <h1 class="text-4xl font-bold text-gray-900 mb-6 leading-tight">
                        Welcome back to <span class="text-blue-600">Aimers</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        Sign in to access your personalized dashboard, course materials, and track your learning progress.
                        Continue your educational journey with us.
                    </p>
                </div>
                <div class="lg:w-1/2 w-full max-w-md">
                    <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900">Student Login</h2>
                            <p class="text-gray-500 mt-2">Enter your credentials to access your account</p>
                        </div>
                        <form action="" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                    Address</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                    placeholder="your@email.com">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                </div>
                                <input type="password" id="password" name="password"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                    placeholder="••••••••">
                                @error('password')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit"
                                class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200">
                                Sign In
                            </button>
                            <div class="text-center text-sm text-gray-500">
                                Don't have an account?
                                <a href="{{ route('public.apply') }}"
                                    class="font-semibold text-blue-600 hover:text-blue-500 ml-1">
                                    Apply Now
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
