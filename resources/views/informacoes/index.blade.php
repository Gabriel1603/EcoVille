@extends('layouts.app')

@section('content')

<style>

    .informacoes-container{
        display:flex;
        gap:30px;
        padding:30px 20px;
        font-family: 'Poppins', sans-serif;
    }

    .info-esquerda{
        width:50%;
        background: #efefef;
        border-radius:18px;
        padding:30px;
        box-sizing:border-box;
    }

    .info-direita{
        width:50%;
        display:flex;
        flex-direction:column;
        gap:20px;
    }

    .bloco{
        background: #efefef;
        border-radius:18px;
        padding:20px;
        box-sizing:border-box;
    }

    .info-esquerda h1,
    .info-esquerda h2,
    .bloco h2,
    .bloco h3{
        margin-top:0;
    }

    .info-esquerda p,
    .info-esquerda li,
    .bloco p,
    .bloco li{
        line-height:1.6;
    }

    .info-esquerda ul,
    .bloco ul{
        padding-left:20px;
    }

    .grid-imagens{
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:15px;
    }

    .card-imagem{
        background: #dddddd;
        border-radius:14px;
        overflow:hidden;
    }

    .card-imagem img{
    width:100%;
    height:180px;
    object-fit:contain;
    background: #f5f5f5;
    }

    .card-imagem p{
        margin:0;
        padding:10px;
        font-size:14px;
    }

    .dicas-grid{
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:15px;
    }

    .dica{
        background:#dddddd;
        border-radius:14px;
        padding:15px;
    }

    .dica h4{
        margin-top:0;
        margin-bottom:8px;
    }

    .curiosidade{
        background:#dddddd;
        border-radius:14px;
        padding:15px;
        margin-top:10px;
    }

    .passos{
        display:flex;
        flex-direction:column;
        gap:12px;
    }

    .passo{
        background:#dddddd;
        border-radius:14px;
        padding:15px;
    }

    .passo strong{
        display:block;
        margin-bottom:5px;
    }

    @media (max-width: 1000px){
        .informacoes-container{
            flex-direction:column;
        }

        .info-esquerda,
        .info-direita{
            width:100%;
        }
    }

    @media (max-width: 700px){
        .grid-imagens,
        .dicas-grid{
            grid-template-columns:1fr;
        }
    }
    
</style>

<div class="informacoes-container">

<div class="info-esquerda">

        <h1>Informações sobre Reciclagem</h1>

        <p>
            A reciclagem é um processo fundamental para a preservação do meio ambiente.
            Por meio dela, materiais que seriam descartados como lixo podem voltar para a
            cadeia produtiva e se transformar em novos produtos.
        </p>

        <p>
            Separar corretamente os resíduos ajuda a reduzir a poluição, economizar recursos
            naturais e diminuir a quantidade de lixo enviada para aterros sanitários.
            Pequenas atitudes no dia a dia podem gerar um impacto muito positivo para a cidade
            e para o planeta.
        </p>

        <h2>Por que reciclar?</h2>
        <ul>
            <li>Reduz a quantidade de lixo acumulado nas ruas e aterros.</li>
            <li>Ajuda a preservar recursos naturais como água, madeira e minérios.</li>
            <li>Diminui a poluição do solo, da água e do ar.</li>
            <li>Economiza energia na fabricação de novos produtos.</li>
            <li>Gera emprego e renda para cooperativas e catadores.</li>
        </ul>

        <h2>Como separar corretamente</h2>
        <p>
            Antes de descartar, o ideal é verificar o tipo de material e fazer uma separação básica:
            plástico, papel, metal, vidro e resíduos especiais. Sempre que possível, lave embalagens
            com excesso de sujeira e descarte os materiais secos.
        </p>

        <ul>
            <li><strong>Plástico:</strong> garrafas PET, potes, embalagens e sacolas.</li>
            <li><strong>Papel:</strong> jornais, revistas, folhas, caixas e papelão.</li>
            <li><strong>Metal:</strong> latas, tampas, alumínio e alguns utensílios metálicos.</li>
            <li><strong>Vidro:</strong> garrafas, frascos e potes.</li>
            <li><strong>Especiais:</strong> pilhas, baterias, eletrônicos e óleo de cozinha.</li>
        </ul>

        <h2>O que evitar</h2>
        <ul>
            <li>Não misturar recicláveis com restos de comida.</li>
            <li>Não descartar vidro quebrado sem proteção.</li>
            <li>Não jogar óleo de cozinha na pia.</li>
            <li>Não colocar pilhas e eletrônicos no lixo comum.</li>
            <li>Não enviar papel molhado ou muito engordurado para reciclagem.</li>
        </ul>

        <h2>Impacto positivo da reciclagem</h2>
        <p>
            Quando a população participa da coleta seletiva e utiliza os pontos de descarte corretos,
            a cidade fica mais limpa, os gastos públicos com limpeza urbana podem diminuir e a vida útil
            dos aterros sanitários aumenta. Além disso, a reciclagem fortalece a consciência ambiental
            e incentiva hábitos mais sustentáveis.
        </p>

        <h2>Dicas para reciclar melhor no dia a dia</h2>

        <p>
        A reciclagem começa com pequenas atitudes dentro de casa. Separar corretamente os materiais
        e entender como cada tipo de resíduo deve ser descartado ajuda a tornar todo o processo
        mais eficiente. Quanto mais limpos e organizados estiverem os materiais, maiores são as
        chances de serem realmente reciclados.
        </p>

        <ul>
        <li>Separe os resíduos recicláveis do lixo orgânico.</li>
        <li>Lave embalagens que contenham restos de alimentos.</li>
        <li>Evite misturar materiais diferentes no mesmo recipiente.</li>
        <li>Prefira reduzir o consumo de embalagens sempre que possível.</li>
        <li>Utilize ecopontos para descartar resíduos especiais.</li>
        </ul>


        <h2>Materiais que precisam de descarte especial</h2>

        <p>
        Alguns resíduos não devem ser descartados junto ao lixo comum ou reciclável. Esses materiais
        podem causar danos ao meio ambiente e precisam ser levados a pontos de coleta específicos.
        </p>

        <ul>
        <li>Pilhas e baterias</li>
        <li>Eletrônicos e celulares</li>
        <li>Lâmpadas</li>
        <li>Óleo de cozinha usado</li>
        <li>Medicamentos vencidos</li>
        </ul>

    </div>

    <div class="info-direita">

        <div class="bloco">
            <h2>Imagens e exemplos</h2>

            <div class="grid-imagens">
                <div class="card-imagem">
                    <img src="/images/info1.jpg" alt="Separação de resíduos">
                    <p>Separação correta dos resíduos recicláveis em casa.</p>
                </div>

                <div class="card-imagem">
                    <img src="/images/info4.jpg" alt="Coleta seletiva">
                    <p>Coleta seletiva ajuda a organizar o descarte por categoria.</p>
                </div>

                <div class="card-imagem">
                    <img src="/images/info3.jpg" alt="Ponto de coleta">
                    <p>Pontos de coleta facilitam o descarte de materiais especiais.</p>
                </div>

                <div class="card-imagem">
                    <img src="/images/info2.jpg" alt="Materiais recicláveis">
                    <p>Materiais limpos e secos têm mais chance de reaproveitamento.</p>
                </div>
            </div>
        </div>

        <div class="bloco">
            <h2>Dicas rápidas</h2>

            <div class="dicas-grid">
                <div class="dica">
                    <h4>Lave embalagens</h4>
                    <p>Uma limpeza rápida já ajuda a evitar contaminação dos recicláveis.</p>
                </div>

                <div class="dica">
                    <h4>Separe por tipo</h4>
                    <p>Organize plástico, papel, vidro e metal para facilitar a coleta.</p>
                </div>

                <div class="dica">
                    <h4>Cuidado com vidro</h4>
                    <p>Embale pedaços quebrados para evitar acidentes com coletores.</p>
                </div>

                <div class="dica">
                    <h4>Use ecopontos</h4>
                    <p>Materiais como pilhas e eletrônicos devem ir para locais específicos.</p>
                </div>
            </div>

            <div class="curiosidade">
                <h3>Curiosidade</h3>
                <p>
                    Uma lata de alumínio pode voltar ao mercado em pouco tempo após ser reciclada.
                    Isso mostra como a separação correta faz diferença no reaproveitamento dos materiais.
                </p>
            </div>
        </div>

        <div class="bloco">
            <h2>Passo a passo sustentável</h2>

            <div class="passos">
                <div class="passo">
                    <strong>1. Separe os resíduos</strong>
                    <span>Crie o hábito de dividir o lixo reciclável do lixo orgânico.</span>
                </div>

                <div class="passo">
                    <strong>2. Higienize o básico</strong>
                    <span>Retire excesso de sujeira de embalagens e deixe secar.</span>
                </div>

                <div class="passo">
                    <strong>3. Consulte pontos de coleta</strong>
                    <span>Use o sistema para localizar ecopontos próximos de você.</span>
                </div>

                <div class="passo">
                    <strong>4. Denuncie descarte irregular</strong>
                    <span>Ajude a cidade denunciando locais com descarte inadequado.</span>
                </div>

                <div class="passo">
                    <strong>5. Compartilhe a ideia</strong>
                    <span>Incentive amigos e familiares a reciclar também.</span>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection