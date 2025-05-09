@extends('landing.publiclayout')

@section('title')
    Student Dashboard
@endsection

@section('content')
    <div class="px-6 py-12 bg-gray-100 min-h-screen">
        <div class="max-w-screen-xl mx-auto">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h1 class="text-3xl font-bold mb-4 text-blue-700">Welcome, {{ Auth::user()->name }}</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                    <!-- Profile Card -->
                    <div class="bg-blue-100 p-4 rounded shadow">
                        <h2 class="text-xl font-semibold mb-2">My Profile</h2>
                        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Contact:</strong> {{ Auth::user()->contact ?? 'N/A' }}</p>
                    </div>

                    <!-- Courses / Admission Info -->
                    <div class="bg-green-100 p-4 rounded shadow">
                        <h2 class="text-xl font-semibold mb-2">Admission Info</h2>
                        <p>Status: <span class="text-green-700 font-semibold">Admitted</span></p>
                        <p>Course: <span class="font-medium">Foundation Course</span></p>
                        <p>Session: 2025</p>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-yellow-100 p-4 rounded shadow">
                        <h2 class="text-xl font-semibold mb-2">Quick Actions</h2>
                        <ul class="space-y-2 text-blue-800">
                            <li><a href="#" class="hover:underline">Download Admit Card</a></li>
                            <li><a href="#" class="hover:underline">View Attendance</a></li>
                            <li><a href="#" class="hover:underline">Update Profile</a></li>
                        </ul>
                    </div>
                </div>

                <div class="mt-10 text-center">
                    <form method="POST" action="">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
