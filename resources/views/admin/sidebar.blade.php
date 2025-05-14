<div class="bg-white rounded-lg shadow p-4">
    <div class="flex flex-col space-y-2 text-gray-700 font-medium text-sm">
        <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded hover:bg-blue-100 transition">
            <svg class="w-5 h-5 " fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m2 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Dashboard</span>
        </a>
        <a href="{{route("course.index")}}" class="flex items-center space-x-3 px-3 py-2 rounded hover:bg-blue-100 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 14l6.16-3.422a12.083 12.083 0 01.34 6.018L12 14zm0 0L5.84 10.578a12.083 12.083 0 00-.34 6.018L12 14z" />
            </svg>
            <span>Manage Courses</span>
        </a>
        <a href="{{route("categories.index")}}" class="flex items-center space-x-3 px-3 py-2 rounded hover:bg-blue-100 transition">
            <svg class="w-5 h-5 " fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
            </svg>
            <span>Manage Category</span>
        </a>
        <a href="{{route("admin.manageAdmission")}}" class="flex items-center space-x-3 px-3 py-2 rounded hover:bg-blue-100 transition">
            <svg class="w-5 h-5 " fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-6h13M9 11l-4-4m0 0l-4 4m4-4v12" />
            </svg>
            <span>Manage Admissions</span>
        </a>
        <a href="{{route("admin.manageStudent")}}" class="flex items-center space-x-3 px-3 py-2 rounded hover:bg-blue-100 transition">
            <svg class="w-5 h-5 " fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>Manage Students</span>
        </a>
        <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded hover:bg-blue-100 transition">
            <svg class="w-5 h-5 " fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17 9V7a4 4 0 10-8 0v2m-2 0a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2H7z" />
            </svg>
            <span>Manage Payment</span>
        </a>
        <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded hover:bg-blue-100 transition">
            <svg class="w-5 h-5 " fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
            </svg>
            <span>Manage Batches</span>
        </a>
        <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded hover:bg-blue-100 transition">
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6V4m0 16v-2m8-8h2M4 12H2m15.364 6.364l1.414-1.414M5.636 5.636L4.222 7.05m0 9.9l1.414-1.414M18.364 5.636l-1.414 1.414" />
            </svg>
            <span>Settings</span>
        </a>
        <a href="{{route("public.logout")}}"
            class="flex bg-red-400 text-white items-center space-x-3 px-3 py-2 rounded hover:bg-red-100 transition">
            <svg class="w-5 h-5 " fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7" />
            </svg>
            <span>Logout</span>
        </a>
    </div>
</div>