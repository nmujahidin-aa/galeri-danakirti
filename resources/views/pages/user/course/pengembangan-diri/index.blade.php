@extends('layouts.app')
@section('title', 'Pengembangan Diri')
@section('styles')
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/post.min.css" />
@endsection
@section('data-page', 'post')
@section('data-overlay', '@@overlay')

@section('content')
<x-templates.user.pages-header
    title="Kursus Pengembangan Diri"
    description="Nibh tellus molestie nunc non blandit. Mi tempus imperdiet nulla malesuada pellentesque elit"
    {{-- breadcrumb_name="Katalog"
    current="Berita" --}}
/>
