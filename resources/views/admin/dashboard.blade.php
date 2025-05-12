@extends('admin.adminlayout')

@section('title')
    Admin|dashboard
@endsection

@section('content')
    <div class="flex gap-4 ml-6">
       <div class="w-3/12">
@include("admin.sidebar")
       </div>


        <div class="w-8/12 m-6">
            <div>
                <div class="grid grid-cols-3 gap-6">
                    <div class="border bg-red-500 text-white font-semibold text-xl flex flex-col p-8 rounded">
                        <span class="">
                            20+
                        </span>
                        <span class="">
                            Total Student
                        </span>
                    </div>
                    <div class="border bg-blue-500 text-white font-semibold text-xl flex flex-col p-8 rounded">
                        <span class="">
                            20+
                        </span>
                        <span class="">
                            Total Courses
                        </span>
                    </div> <div class="border bg-green-500 text-white font-semibold text-xl flex flex-col p-8 rounded">
                        <span class="">
                            20+
                        </span>
                        <span class="">
                            Total Category
                        </span>
                    </div> <div class="border bg-orange-500 text-white font-semibold text-xl flex flex-col p-8 rounded">
                        <span class="">
                            20+
                        </span>
                        <span class="">
                            Total Admission
                        </span>
                    </div> <div class="border bg-teal-500 text-white font-semibold text-xl flex flex-col p-8 rounded">
                        <span class="">
                            20+
                        </span>
                        <span class="">
                            Total Bathes
                        </span>
                    </div> <div class="border bg-yellow-500 text-white font-semibold text-xl flex flex-col p-8 rounded">
                        <span class="">
                            20+
                        </span>
                        <span class="">
                            Total Payments
                        </span>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
