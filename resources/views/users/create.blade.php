@extends('layouts.master')
@section('title')
    User Management | Create
@endsection
@section('content')
    <div class="xl:col-span-6 col-span-12">
        <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Users</h5>
                <nav>
                    <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="{{ route('users.index') }}">
                                Users <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                        <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="{{ route('users.index') }}">Index <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                        <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="{{ route('users.create') }}">Create
                            </a> </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-6 text-defaultsize">
            <div class="xl:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header flex justify-between">
                        <div class="box-title">
                            Input Types
                        </div>
                        <div class="prism-toggle">
                            <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i
                                    class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="grid grid-cols-12 sm:gap-6">
                            <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <label for="input-label" class="form-label !font-normal">Basic Input:</label>
                                <input type="text" class="form-control " id="input">
                            </div>
                            <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <label for="input-label" class="form-label !mb-2">Form Input With Label</label>
                                <input type="text" class="form-control " id="input-label">
                            </div>
                            <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <label for="input-placeholder" class="form-label">Form Input With Placeholder</label>
                                <input type="text" class="form-control  placeholder:text-textmuted"
                                    id="input-placeholder" placeholder="Placeholder">
                            </div>
                            <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <label for="input-date" class="form-label">Type Date</label>
                                <input type="date" class="form-control " id="input-date">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer hidden border-t-0">

                    </div>
                </div>
            </div>


        </div>
    @endsection
