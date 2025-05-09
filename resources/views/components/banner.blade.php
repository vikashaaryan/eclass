<div class="px-6 my-10">
    <div class="h-[60vh] rounded-xl bg-white border border-gray-200 shadow-xl flex items-center  px-6">
        <div class="max-w-3xl text-center lg:text-left">
            <h1 class="text-4xl lg:text-5xl font-extrabold text-gray-900">
                Welcome to <span class="text-blue-700">{{ env('APP_NAME') }}</span> Portal

            </h1>
            <p class="mt-6 text-gray-600 text-lg">
                Unlock your potential with expert guidance and structured courses. Start your journey towards success
                with
                <span class="font-medium text-blue-600">{{ env('APP_NAME') }}</span> today.
            </p>
            <div class="mt-8">
                <a href="{{route("public.apply")}}"
                    class="inline-block px-6 py-3 bg-blue-600 text-white font-medium text-md rounded-full shadow hover:bg-blue-700 transition duration-300">
                    Join Now
                </a>
            </div>
        </div>
        <div class="ml-30">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-40 text-blue-600 dark:text-blue-400" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
        </div>
    </div>

</div>
