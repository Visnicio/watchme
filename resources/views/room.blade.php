@extends('layouts.master')

@section("content")
<div>
    @if ($room == null)
        <div class="flex items-center justify-center min-h-screen">
            <h1 class="font-bold p-6 text-2xl underline">Sala não encontrada :(</h1>    
        </div>
    @else
        <h1 class="text-2xl font-bold ">Sala atual: {{$room->video}}</h1>
    @endif
</div>
@stop

@section('footer_scripts')
<script>
    // alert("hello world");
</script>
@stop

