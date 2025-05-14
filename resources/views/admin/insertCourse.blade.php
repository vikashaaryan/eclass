@extends('admin.adminlayout')

@section('title')
    Insert Course
@endsection

@section('content')
<div class="flex gap-4 ml-6">
    <div class="w-3/12">
        @include('admin.sidebar')
    </div>
    <div class="w-9/12 m-6">
        <div class="">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold">Insert Course</h2>
                <a href="{{ route('course.index') }}"
                    class="inline-flex items-center py-1 px-3 bg-green-600 text-white font-semibold rounded hover:bg-green-700">
                    
                    View All Courses
                </a>
            </div>

            <hr class="mb-6">

            <form action="{{route("course.store")}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @csrf

                {{-- Title --}}
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Course Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" id="title"
                        class="mt-1 w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:border-blue-500">
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Author --}}
                <div>
                    <label for="author" class="block text-sm font-medium text-gray-700">Course Author</label>
                    <input type="text" name="author" value="{{ old('author') }}" id="author"
                        class="mt-1 w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:border-blue-500">
                    @error('author')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Category --}}
                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                    <select name="category_id" id="category_id"
                        class="mt-1 w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:border-blue-500">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->cat_title }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Price --}}
                <div>
                    <label for="fees" class="block text-sm font-medium text-gray-700">Course fees</label>
                    <input type="text" name="fees" value="{{ old('fees') }}" id="fees"
                        class="mt-1 w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:border-blue-500">
                    @error('fees')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Discount Price --}}
                <div>
                    <label for="discount_fees" class="block text-sm font-medium text-gray-700">Discount Price</label>
                    <input type="text" name="discount_fees" value="{{ old('discount_fees') }}" id="discount_fees"
                        class="mt-1 w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:border-blue-500">
                    @error('discount_fees')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="duration" class="block text-sm font-medium text-gray-700">Course Duration </label>
                    <input type="number" name="duration" value="{{ old('duration') }}" id="duration" min="1"
                        class="mt-1 w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:border-blue-500">
                    @error('duration')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Course Image</label>
                    <input type="file" name="image" id="image"
                        class="mt-1 w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:border-blue-500">
                    @error('image')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Description (full-width) --}}
                <div class="md:col-span-2 lg:col-span-3">
                    <label for="description" class="block text-sm font-medium text-gray-700">Course Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="mt-1 w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:border-blue-500">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <div class="md:col-span-2 lg:col-span-3">
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700">
                        Insert Course
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
