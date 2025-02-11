@extends('layouts.app-admin')

@section('title')
    {{ isset($product) ? 'Ubah Mahasiswa: ' . $product->name : 'Tambah Mahasiswa' }}
@endsection

@section('breadcumb')
<div class="page-title d-flex flex-column me-5">
    <!--begin::Title-->
    <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">Data Produk</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="{{route('dashboard.dashboard.index')}}" class="text-muted text-hover-primary">Dashboard</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="{{route('dashboard.product.index')}}" class="text-muted text-hover-primary">Data Produk</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-dark">
            {{ isset($product) ? 'Ubah Data Produk: ' : 'Tambah Produk' }}
        </li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
</div>
@endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <div class="d-flex align-items-center mb-3">
                <a href="{{ route('dashboard.product.index') }}" class="btn btn-white">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <div class="ms-3">
                    <h3 class="card-header-title mb-1">
                        <i class="bi-book me-2 fs-3"></i>
                        {{ isset($product) ? 'Ubah' : 'Tambah' }} Produk
                    </h3>
                    <p class="mb-0">Mohon isi data dengan benar dan teliti</p>
                </div>
            </div>

            <!--begin::Layout-->
            <div class="d-flex flex-column flex-xl-row">

                <!--begin::Content-->
                <div class="flex-column flex-lg-row-auto w-100 mb-10">
                    <!--begin:::Tab content-->
                    <div class="tab-content" id="myTabContent">
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_user_view_overview_security" role="tabpanel">
                            <!--begin::Card-->
                            <form action="{{route('dashboard.product.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card pt-4 mb-6 mb-xl-9">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Data Produk</h2>
                                        </div>
                                    </div>

                                    @if (isset($product))
                                        <input type="hidden" name="id" value="{{ $product->id }}" autocomplete="off">
                                    @endif

                                    <div class="card-body pt-5 pb-5">
                                        <!-- Nama Tim -->
                                        <div class="row mb-4 align-items-center">
                                            <label class="col-lg-3 col-form-label">Nama <span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?: ($product->name ?? '') }}">
                                                <div class="invalid-feedback">@error('name') {{ $message }} @enderror</div>
                                            </div>
                                        </div>

                                        <!-- Judul -->
                                        <div class="row mb-4 align-items-center">
                                            <label class="col-lg-3 col-form-label">Deskripsi <span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <textarea name="description" id="description" class="form-control @error('title') is-invalid @enderror">
                                                    {{ old('description') ?: ($product->description ?? '') }}
                                                </textarea>
                                                <div class="invalid-feedback">@error('description') {{ $message }} @enderror</div>
                                            </div>
                                        </div>

                                        <!-- File product -->
                                        <div class="row mb-4 align-items-center">
                                            <label class="col-lg-3 col-form-label">Gambar <span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                                @isset($product)
                                                    <small>Kosongkan jika tidak diubah. <a href="{{ asset('storage/' . $product->image) }}" target="_blank">Lihat product</a></small>
                                                @endisset
                                                <div class="invalid-feedback">@error('image') {{ $message }} @enderror</div>
                                            </div>
                                        </div>

                                        <div class="row mb-4 align-items-center">
                                            <label class="col-lg-3 col-form-label">Harga <span class="text-danger">*</span></label>
                                            <div class="col-lg-9">
                                                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') ?: ($product->price ?? '') }}">
                                                <div class="invalid-feedback">@error('price') {{ $message }} @enderror</div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-footer text-end">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                            <!--end::Card-->
                        </div>
                        <!--end:::Tab pane-->
                    </div>
                    <!--end:::Tab content-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Layout-->
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection

@section('script')
@endsection
