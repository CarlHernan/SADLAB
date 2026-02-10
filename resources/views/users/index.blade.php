@extends('layouts.master')
@section('title')
    User Management | Index
@endsection
@section('content')
    <div class="xl:col-span-6 col-span-12">
        <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Users</h5>
                <nav>
                    <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary" href="/users">
                                Users <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                        <li class="text-[12px]"> <a class="flex items-center text-textmuted" href="/users">Users
                            </a> </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Bordered Tables
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Add Users
                        <i class="ri-user-add-line ms-2 inline-block align-middle"></i>
                    </button>
                </div>
            </div>

            @if ($users->count())
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table whitespace-nowrap table-bordered min-w-full">
                            <thead>
                                <tr class="border-b border-defaultborder">
                                    <th scope="col" class="text-start">Name</th>
                                    <th scope="col" class="text-start">Email</th>
                                    <th scope="col" class="text-start">Created At</th>
                                    <th scope="col" class="text-start">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="hover:bg-gray-50">
                                        <td class="border border-gray-300 px-4 py-2">
                                            <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                <img src="backend/assets/images/faces/13.jpg" alt="img">
                                            </span> {{ $user->name }}
                                        </td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            {{ $user->created_at->format('Y-m-d H:i') }}</td>
                                        <td>
                                            <div class="hstack gap-2 flex-wrap">
                                                <a aria-label="anchor" href="/profile"
                                                    class="text-info text-[.875rem] leading-none"><i
                                                        class="ri-edit-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="text-danger text-[.875rem] leading-none"><i
                                                        class="ri-delete-bin-5-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <p class="text-gray-500">No users found.</p>
            @endif
            <div class="box-footer hidden border-t-0">
            </div>
        </div>
    </div>
@endsection
