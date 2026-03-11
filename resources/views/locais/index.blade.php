@extends('layouts.app')

@section('content')

<style>

    .containers{
        display:flex;
        gap:40px;
        padding:40px;
    }


    .mapa{
        flex:2;
    }

    .mapa img{
        width:100%;
        border-radius:10px;
        border:3px solid #b9d5b6;
    }


    .local-direita{
        flex:1;
    }


    .busca{
        margin-bottom:20px;
    }

    .busca input{
        width:100%;
        padding:12px 15px;
        border:none;
        border-radius:20px;
        background: #e9e9e9;
    }


    .lista-locais{
        display:flex;
        flex-direction:column;
        gap:15px;
        max-height:500px;
        overflow-y:auto;
    }


    .cards{
        background: #efefef;
        border-radius:12px;
        padding:18px;
    }


    .card-header{
        display:flex;
        gap:10px;
        align-items:center;
    }

    .card-header h3{
        margin:0;
        font-size:16px;
    }

    .card-header p{
        margin:0;
        font-size:13px;
        color: #666;
    }


    .materiais{
        margin-top:10px;
    }

    .materiais span{
        background: #dcdcdc;
        padding:4px 10px;
        border-radius:10px;
        font-size:12px;
        margin-right:5px;
    }


    .card-footer{
        margin-top:15px;
        display:flex;
        justify-content:space-between;
        font-size:12px;
        color: #555;
    }

</style>



<div class="containers">

    <div class="mapa">
        <img src="/images/mapa-joinville.png" alt="Mapa">
    </div>


    <div class="local-direita">

        <div class="busca">
            <input type="text" placeholder="Buscar">
        </div>


        <div class="lista-locais">

            <div class="cards">

                <div class="card-header">
                    <div>
                        <h3>Centro de Reciclagem</h3>
                        <p>Rua Viscondi, Paulas 200</p>
                    </div>
                </div>

                <div class="materiais">
                    <span>Plástico</span>
                    <span>Papel</span>
                    <span>Metal</span>
                </div>

                <div class="card-footer">
                    <span> 1.9 km</span>
                    <span>07:00 - 18:00</span>
                </div>

            </div>


            <div class="cards">

                <div class="card-header">
                    <div>
                        <h3>Ecoponto Central</h3>
                        <p>Av. Brasil, 450</p>
                    </div>
                </div>

                <div class="materiais">
                    <span>Vidro</span>
                    <span>Plástico</span>
                </div>

                <div class="card-footer">
                    <span> 2.3 km</span>
                    <span>08:00 - 17:00</span>
                </div>

            </div>


            <div class="cards">

                <div class="card-header">
                    <div>
                        <h3>Recicla Bairro Norte</h3>
                        <p>Rua das Palmeiras, 120</p>
                    </div>
                </div>

                <div class="materiais">
                    <span>Papel</span>
                    <span>Metal</span>
                </div>

                <div class="card-footer">
                    <span> 3.1 km</span>
                    <span>09:00 - 18:00</span>
                </div>

            </div>


            <div class="cards">

                <div class="card-header">
                    <div>
                        <h3>Ponto Verde Sul</h3>
                        <p>Av. Independência, 890</p>
                    </div>
                </div>

                <div class="materiais">
                    <span>Vidro</span>
                    <span>Metal</span>
                    <span>Papel</span>
                </div>

                <div class="card-footer">
                    <span> 4.5 km</span>
                    <span>08:00 - 19:00</span>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection