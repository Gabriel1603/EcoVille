@extends('layouts.app')

@section('content')

<style>

    .containers{
        display:flex;
        gap:25px;
        padding:35px 25px;
        justify-content:center;
        flex-wrap:wrap;
    }

    .card-material{
        width:220px;
        background: #efefef;
        border-radius:18px;
        overflow:hidden;
    }

    .card-header{
        background: #d9d9d9;
        text-align:center;
        padding:22px 10px;
        font-size:18px;
        font-family: 'Poppins', sans-serif;
    }

    .card-corpo{
        padding:18px;
        font-family: 'Poppins', sans-serif;
    }

    .card-imagem{
        width:100%;
        height:130px;
        object-fit:cover;
        border-radius:12px;
        margin-bottom:15px;
    }

    .card-corpo h4{
        margin:0 0 10px 0;
        font-size:15px;
    }

    .card-corpo ul{
        margin:0;
        padding-left:18px;
    }

    .card-corpo li{
        margin-bottom:8px;
        font-size:14px;
    }

    .dica-final{
        margin-top:12px;
        font-size:13px;
    }
    
</style>

<div class="containers">

    <div class="card-material">
        <div class="card-header">PLÁSTICO</div>
        <div class="card-corpo">
            <img src="/images/plastico.jpg" alt="Plástico" class="card-imagem">
            <h4>Exemplos:</h4>
            <ul>
                <li>Garrafas PET</li>
                <li>Embalagens de produtos</li>
                <li>Potes de shampoo</li>
                <li>Sacolas plásticas</li>
            </ul>
            <p class="dica-final">Coloque limpo e seco.</p>
        </div>
    </div>

    <div class="card-material">
        <div class="card-header">PAPEL</div>
        <div class="card-corpo">
            <img src="/images/papel.jpg" alt="Papel" class="card-imagem">
            <h4>Exemplos:</h4>
            <ul>
                <li>Jornais</li>
                <li>Revistas</li>
                <li>Caixas de papelão</li>
                <li>Folhas usadas</li>
            </ul>
            <p class="dica-final">Evite papel molhado.</p>
        </div>
    </div>

    <div class="card-material">
        <div class="card-header">METAL</div>
        <div class="card-corpo">
            <img src="/images/metal.jpg" alt="Metal" class="card-imagem">
            <h4>Exemplos:</h4>
            <ul>
                <li>Latas de refrigerante</li>
                <li>Latas de alimentos</li>
                <li>Tampas metálicas</li>
                <li>Panelas velhas</li>
            </ul>
            <p class="dica-final">Retire resíduos antes.</p>
        </div>
    </div>

    <div class="card-material">
        <div class="card-header">VIDRO</div>
        <div class="card-corpo">
            <img src="/images/vidro.jpg" alt="Vidro" class="card-imagem">
            <h4>Exemplos:</h4>
            <ul>
                <li>Garrafas</li>
                <li>Potes de conserva</li>
                <li>Frascos</li>
                <li>Copos de vidro</li>
            </ul>
            <p class="dica-final">Cuidado com peças quebradas.</p>
        </div>
    </div>

    <div class="card-material">
        <div class="card-header">OUTROS</div>
        <div class="card-corpo">
            <img src="/images/outros.jpg" alt="Outros materiais" class="card-imagem">
            <h4>Exemplos:</h4>
            <ul>
                <li>Eletrônicos</li>
                <li>Pilhas</li>
                <li>Baterias</li>
                <li>Óleo de cozinha</li>
            </ul>
            <p class="dica-final">Leve a pontos específicos.</p>
        </div>
    </div>

</div>

@endsection