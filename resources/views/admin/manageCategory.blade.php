@extends('admin.adminlayout')

@section('title')
    Admin|Manage Admission
@endsection

@section('content')
    <div class="flex gap-4 ml-6">
        <div class="w-3/12">
            @include('admin.sidebar')
        </div>
        <div class="w-8/12 m-6">
            <div class="">
                <div class="flex justify-between mb-6">
                    <h2 class="text-2xl font-semibold">Manage Category ({{count($categories)}})</h2>
                    <a href="#" class="inline-flex items-center py-1 px-2 bg-green-600 text-white font-semibold rounded hover:bg-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                         Add Category
                    </a>
                    
                </div>
                <hr class="mb-4">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="border px-2 py-1">Id</th>
                            <th class="border px-2 py-1">Cat Title</th>
                            <th class="border px-2 py-1">Cat Description</th>
                            <th class="border px-2 py-1">Action</th>
                        </tr>
                        <tbody>
                            @foreach ($categories as $cat)
                            <tr>
                                <td class="border px-2 py-1">{{$cat->id}}</td>
                                <td class="border px-2 py-1">{{$cat->cat_title}}</td>
                                <td class="border px-2 py-1">{{$cat->cat_description}}</td>
                               
                                <td class="border px-2 py-1 text-center space-x-2">
                                    <a href="#" class="inline-flex items-center text-xs px-2 py-1 font-semibold text-white bg-red-500 hover:bg-red-600 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12l6 6m0-6l-6 6m6-6l-6-6m0 6l6-6" />
                                        </svg>
                                        delete
                                    </a>
                                    <a href="#" class="inline-flex items-center text-xs px-2 py-1 font-semibold text-white bg-green-500 hover:bg-green-600 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        edit
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
