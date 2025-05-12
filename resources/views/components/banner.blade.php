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
            <img src="https://media.istockphoto.com/id/1305960821/vector/coaching-rgb-color-icon.jpg?s=612x612&w=0&k=20&c=fOvPzPQokjWja7D8_bUKr8wP7eKiiW5JCTGT9Ixqk-U=" class="h-[52vh]  w-[70vh]" alt="">
        </div>
    </div>
</div>
