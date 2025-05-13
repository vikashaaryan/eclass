@extends('admin.adminlayout')

@section('title')
    insert Category
@endsection

@section('content')
    <div class="flex gap-4 ml-6">
        <div class="w-3/12">
            @include('admin.sidebar')
        </div>
        <div class="w-8/12 m-6">
            <div class="">
                <div class="flex justify-between mb-6">
                    <h2 class="text-2xl font-semibold">Insert Category</h2>
                    <a href="{{ route('categories.index') }}"
                        class="inline-flex items-center py-1 px-2 bg-green-600 text-white font-semibold rounded hover:bg-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        view all category
                    </a>

                </div>
                <hr class="mb-4">

                {{-- Form to insert category --}}
                <form action="{{ route('categories.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="cat_title" class="block text-sm font-medium text-gray-700">Category Title</label>
                        <input type="text" name="cat_title" value="{{old("cat_title")}}" id="cat_title"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:border-blue-500">
                            @error('cat_title')
                                <p class="text-red-500 text-xs">{{$message}}</p>
                            @enderror
                    </div>

                    <div>
                        <label for="cat_description" class="block text-sm font-medium text-gray-700">Category
                            Description</label>
                        <textarea name="cat_description" id="cat_description" rows="4" 
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:border-blue-500">{{old("cat_description")}}</textarea>
                            @error('cat_description')
                            <p class="text-red-500 text-xs">{{$message}}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                            class="px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700">
                            Insert Category
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
