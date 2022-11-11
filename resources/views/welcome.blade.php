@extends('layouts.master')

@section("content")
<div class="flex items-center justify-center min-h-screen">
    <button class="bg-rose-600 p-6 text-white rounded-lg mx-10 border-2 border-rose-600 hover:bg-transparent hover:border-2 hover:border-rose-600 transition-all duration-100" id="btnJoin">Juntar-se</button>
    <button class="bg-rose-600 p-6 text-white rounded-lg mx-10 border-2 border-rose-600 hover:bg-transparent hover:border-2 hover:border-rose-600 transition-all duration-100" id="btnCreate">Criar Sala</button>
</div>
@stop

@section('footer_scripts')
<script>
    let btnJoin = document.getElementById("btnJoin");
    let btnCreate = document.getElementById("btnCreate");
    
    btnJoin.addEventListener("click", ()=>{
        alert("Se juntando a sala");
    });

    btnCreate.addEventListener("click", ()=>{
        alert("Criando sala");
    });
</script>
@stop
