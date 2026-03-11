@extends('layouts.app')

@section('content')

<style>

    .containers{
        display:flex;
        gap:40px;
        padding:40px;
        justify-content:center;
    }

    .cards{
        background: #efefef;
        border-radius:12px;
        padding:25px;
        width:420px;
    }

    .input-campos{
        margin-bottom:15px;
        display:flex;
        flex-direction:column;
        font-family: 'Poppins', sans-serif;
    }

    .input-campos label{
        margin-bottom:5px;
    }

    .input-campos input,
    .input-campos select,
    .input-campos textarea{
        padding:10px;
        border-radius:12px;
        border:1px solid #d5d5d5;
        background: #e7e7e7;
    }

    textarea{
        resize:none;
    }

    .preview{
        height:220px;
        border-radius:12px;
        border:2px solid #cfcfcf;
        margin-bottom:20px;
        background: #e7e7e7;
        display:flex;
        align-items:center;
        justify-content:center;
        overflow:hidden;
        font-family: 'Poppins', sans-serif;
    }

    .preview img{
        width:100%;
        height:100%;
        object-fit:cover;
        display:none;
    }

    .preview span{
        color: #777;
    }


    .upload-label{
        background: #e7e7e7;
        border-radius:12px;
        padding:15px;
        text-align:center;
        cursor:pointer;
        margin-bottom:20px;
        display:block;
    }

    #imagem{
        display:none;
    }


    .botoes{
        display:flex;
        justify-content:space-between;
    }

    .cancelar{
        background: #e74c3c;
        border:none;
        padding:10px 30px;
        border-radius:20px;
        color:white;
        cursor:pointer;
    }

    .enviar{
        background: #6ed26e;
        border:none;
        padding:10px 30px;
        border-radius:20px;
        color:white;
        cursor:pointer;
    }

</style>


<form onsubmit="return enviarDenuncia()">

<div class="containers">

    <div class="cards">

        <div class="input-campos">
            <label>Título </label>
            <input type="text" required>
        </div>

        <div class="input-campos">
            <label>Categoria </label>
            <select required>
                <option value="">Selecione</option>
                <option>Lixo irregular</option>
                <option>Descarte ilegal</option>
                <option>Poluição</option>
            </select>
        </div>

        <div class="input-campos">
            <label>Localização </label>
            <input type="text" required>
        </div>

        <div class="input-campos">
            <label>Descrição </label>
            <textarea rows="4" required></textarea>
        </div>

        <div class="input-campos">
            <label>Nome Completo </label>
            <input type="text" required>
        </div>

        <div class="input-campos">
            <label>CPF </label>
            <input
                type="text"
                maxlength="11"
                inputmode="numeric"
                required
                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
            >
        </div>

    </div>


    <div class="cards">

        <div class="preview">
            <span id="texto-preview">Nenhuma imagem selecionada</span>
            <img id="imagem-preview">
        </div>

        <label for="imagem" class="upload-label">
             Enviar imagem 
        </label>

        <input type="file" id="imagem" accept="image/*" required>

        <div class="botoes">

            <button type="button" class="cancelar" onclick="location.reload()">
                Cancelar
            </button>

            <button type="submit" class="enviar">
                Enviar
            </button>

        </div>

    </div>

</div>

</form>


<script>

const inputImagem = document.getElementById('imagem');
const imagemPreview = document.getElementById('imagem-preview');
const textoPreview = document.getElementById('texto-preview');

inputImagem.addEventListener('change', function(){

    const arquivo = this.files[0];

    if(arquivo){

        const url = URL.createObjectURL(arquivo);

        imagemPreview.src = url;
        imagemPreview.style.display = 'block';
        textoPreview.style.display = 'none';
    }
});

function enviarDenuncia(){

    alert("Denúncia registrada com sucesso!");

    location.reload();

    return false;
}

</script>

@endsection