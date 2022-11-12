@extends('layouts.master')

@section('title', 'Assista junto')

@section("content")
<div>
    @if ($room == null)
        <div class="flex items-center justify-center min-h-screen">
            <h1 class="font-bold p-6 text-2xl ">Sala não encontrada :(</h1>    
        </div>
    @else
        <div class="mb-10">
            {{-- <h1 class="text-2xl font-bold ">Vídeo atual: {{$room->video}}</h1> --}}
            <h2 class="text-xl">Código da sala: {{$room->id}}</h2>
        </div>

        <div class="grid grid-cols-12 gap-4 items-center">
            <div class="col-span-12">
                <form action="/room/update" method="POST">
                    @csrf
                    @method('put')
                    <div class="grid grid-cols-12">
                        <input type="hidden" name="id" value="{{$room->id}}">
                        <div class="col-span-4">
                            <input type="text" name="video_link" id="video_link" class="border-2 border-rose-600 bg-transparent px-2 py-1 rounded-lg min-w-full" placeholder="Informe o Link de seu vídeo">
                        </div>
                        <div class="col-span-4">
                            <button class="btn-sm">Compartilhar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
        <div class="grid grid-cols-12 gap-4 mt-10">
            <div class="col-span-6">
                <iframe class="min-w-full" height="460" src="https://www.youtube.com/embed/{{$room->video}}" ></iframe>
            </div>
        </div>
    @endif


</div>
@stop

@section('footer_scripts')
<script>
    // alert("hello world");
</script>
@stop

