@extends('layouts.master')

@section('title', 'Assista junto')

@section("content")
<div class="grid grid-cols-12 ">
    <div class="col-span-12">
        <div class="flex items-center justify-center min-h-screen flex-col">
            <div class="mb-10">
                <h1 class="text-white font-bold text-4xl">Compartilhe vídeos em <span class="text-rose-600">salas virtuais</span>!</h1>
            </div>
            <div class="flex">
                <button class="btn" id="btnJoin">Juntar-se</button>
                <form action="/room/create" method="POST">
                    @csrf
                    <button class="btn" id="btnCreate">Criar Sala</button>
                </form>
            </div>
            <form action="/room" method="GET" class="mt-10 flex justify-center hidden" id="formJoin">
                <input type="text" name="id" id="id" class="border-2 border-rose-600 bg-transparent px-2 py-1 rounded-lg min-w-full" placeholder="Informe o código da sala">
                <button class="btn-sm">Entrar</button>
            </form>
        </div>
    </div>
</div>

@stop

@section('footer')
<div class="min-w-full mx-0">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e11d48" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z" style="user-select: auto;"></path>
    </svg>
    <div class="bg-rose-600 p-10 text-center">
        <small>Desenvolvido por Vinicius Antonio da Silva</small>
    </div>
</div>
@stop

@section('footer_scripts')
<script>
    let btnJoin = document.getElementById("btnJoin");
    let btnCreate = document.getElementById("btnCreate");
    
    btnJoin.addEventListener("click", ()=>{
        var formJoin = document.getElementById("formJoin");

        if(formJoin.classList.contains("visible")){
            formJoin.classList.add("hidden");
            formJoin.classList.remove("visible");
        }else{
            formJoin.classList.add("visible");
            formJoin.classList.remove("hidden");
        }
    });

    // btnCreate.addEventListener("click", ()=>{
    //     alert("Criando sala");
    // });
</script>
@stop
