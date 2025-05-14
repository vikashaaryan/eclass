@extends('admin.adminlayout')

@section('title')
    Manage course
@endsection

@section('content')
    <div class="flex gap-4 ml-6">
        <div class="w-3/12">
            @include('admin.sidebar')
        </div>
        <div class="w-8/12 m-6">
            <div class="">
                <div class="flex justify-between mb-6">
                    <h2 class="text-2xl font-semibold">Manage Course ({{count($courses)}})</h2>
                   
                    <a href="{{route("course.create")}}" class=" py-1 px-2 bg-blue-500 text-white font-semibold rounded">Add Courses</a>
                </div>
                <hr class="mb-4">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="border px-2 py-1">Id</th>
                            <th class="border px-2 py-1">image</th>
                            <th class="border px-2 py-1">Duration</th>
                            <th class="border px-2 py-1">title</th>
                            <th class="border px-2 py-1">author</th>
                            <th class="border px-2 py-1">category</th>
                            <th class="border px-2 py-1">price</th>
                            <th class="border px-2 py-1">Action</th>
                          
                        </tr>
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <td class="border px-2 py-1">{{$course->id}}</td>
                                <td class="border px-2 py-1"><img src="{{asset("storage/".$course->image)}}"  class='h-10' alt=""></td>
                                <td class="border px-2 py-1">{{$course->duration}} {{ $course->duration == 1 ? 'Week' : 'Weeks' }}</td>
                                <td class="border px-2 py-1">{{$course->title}}</td>
                                <td class="border px-2 py-1">{{$course->author}}</td>
                                <td class="border px-2 py-1">{{$course->category->cat_title}}</td>
                                <td class="border px-2 py-1"><span>{{$course->discount_fees}} <del>{{$course->fees}}</del></span></td>
                                <td class="border px-2 py-1 text-center space-x-2">
                                    <a href="#" class="inline-flex items-center text-xs px-2 py-1 font-semibold text-white bg-red-500 hover:bg-red-600 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12l6 6m0-6l-6 6m6-6l-6-6m0 6l6-6" />
                                        </svg>
                                       view
                                    </a>
                                    <a href="#" class="inline-flex items-center text-xs px-2 py-1 font-semibold text-white bg-green-500 hover:bg-green-600 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                       inactive
                                    </a>
                                </td>
                                
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
