@extends('layouts.app')
@section('title','Posts')

@section('content')
<x-table :posts="$posts->all()" :links="$posts->links()"></x-table>
@endsection()