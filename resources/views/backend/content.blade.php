@extends('backend.backend_master')
@section('admin-content')
<link rel="stylesheet" href="{{ asset('/asset/css/content.css') }}">
    <button class="btn btn-primary m-2 open-content-modal">
        <i class="fa-solid fa-plus"></i>
        Add Content
    </button>
    {{-- Call subview --}}
    <div class="list-content row">
        <div class="col-3 p-2 content-record position-relative d-flex justify-content-end" data-id="">
            <div
                class=" w-100 h-100 content bg-secondary bg-opacity-50 rounded m-2 d-flex flex-column align-items-center justify-content-center">
                <div class="content-logo">
                    <img class="w-100 h-100 object-fit-cover rounded-full"
                         src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Britishblue.jpg"
                         alt="">
                </div>
                <p class="content-name text-white mt-2">Home</p>
                <p class="content-description d-none text-white mt-2">Lorem ipsum dolor sit amet.</p>
            </div>
            <span class="position-absolute open-edit-category p-2" role="button" data-id="${btoa(category.id)}">
                <img src="/asset/icons/edit.svg" alt="">
            </span>
        </div>
    </div>

    @include('modal.content')
@endsection
@section('script')
@endsection
