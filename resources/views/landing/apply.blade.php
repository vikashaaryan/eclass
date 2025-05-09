@extends('landing.publiclayout')

@section('title')
    Apply For Admission
@endsection

@section('content')
    <div class="px-6 py-12 bg-white">
        <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row gap-12">
            <div class="lg:w-5/12 flex flex-col justify-center">
                <h2 class="text-4xl font-extrabold text-gray-900 mb-6">
                    Why Choose <span class="text-blue-700">Aimers</span>?
                </h2>
                <ul class="space-y-4 text-lg text-gray-600">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-2 mt-1" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        Expert faculty with years of experience
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-2 mt-1" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        Personalized doubt clearing sessions
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-2 mt-1" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        Affordable fee structure with scholarships
                    </li>
                </ul>
            </div>

            <div class="lg:w-7/12">
                 <div class="bg-white border border-gray-200 shadow rounded-lg p-8">
                <h3 class="text-2xl font-bold text-center text-blue-700 mb-6">Join Aimers — 100% Free Registration</h3>
                
                <form action="" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label class="block mb-1 font-medium text-gray-700">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                        @error('name')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-1 font-medium text-gray-700">Contact</label>
                        <input type="text" name="contact" value="{{ old('contact') }}"
                            class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                        @error('contact')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-1 font-medium text-gray-700">Email</label>
                        <input type="text" name="email" value="{{ old('email') }}"
                            class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                        @error('email')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-1 font-medium text-gray-700">Education</label>
                        <input type="text" name="education" value="{{ old('education') }}"
                            class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                        @error('education')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-1 font-medium text-gray-700">Password</label>
                        <input type="password" name="password"
                            class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                        @error('password')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded transition duration-200">
                            Apply Now
                        </button>
                    </div>
                </form>
            </div>
            </div>

        </div>
    </div>
@endsection
