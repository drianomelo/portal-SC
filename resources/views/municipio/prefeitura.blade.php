<x-layout.municipio bg="bg-prefeitura">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:max-w-full">
        <!-- SECTION PROFILE -->
        <x-municipio.profile img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/prefeitura.jpg"
            title="Prefeitura" subtitle="Prefeitura - São Cristóvão" :socials="[
                [
                    'url' => 'https://www.instagram.com/prefsaocristovao/',
                    'icon' => 'fa-brands fa-instagram',
                ],
                [
                    'url' => 'https://twitter.com/pref_sc',
                    'icon' => 'fa-brands fa-x-twitter',
                ],
                [
                    'url' => 'https://www.youtube.com/@PrefeituradeSaoCristovaoSe',
                    'icon' => 'fa-brands fa-youtube',
                ],
                [
                    'url' => 'https://wa.me/5579998731806?text=Olá,%20Prefeitura%20de%20São%20Cristóvão',
                    'icon' => 'fa-brands fa-whatsapp',
                ],
            ]"
            linkButton="https://wa.me/5579998731806?text=Olá,%20Prefeitura%20de%20São%20Cristóvão"
            nameButton="Contate-me" />

        <!-- SECTION DESCRIPITON -->
        <div class="sm:px-4">
            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between mb-6 lg:min-w-full">
                <x-title img="" h2="Endereço" p="Saiba onde encontrar nossa Prefeitura"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl text dark:text-white first-letter:text-5xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left">
                    A Prefeitura Municipal de São Cristóvão fica situada no Paço Municipal, S/N, Centro Histórico - CEP
                    49100-071
                    São Cristóvão, Sergipe - Brasil</p>
            </div>

            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between mb-6 lg:min-w-full">
                <x-title img="" h2="Contatos" p="Saiba como entrar em contato com nossa Prefeitura"></x-title>
                <p class="dark:text-white text sm:text-xs">
                    Fone Fixo - (79) 3045-4910</p>
                <p class="dark:text-white text sm:text-xs">
                    Endereço eletrônico: <a class="text-sm text-blue-400 underline sm:text-xs"
                        href="https://www.saocristovao.se.gov.br">https://www.saocristovao.se.gov.br</a></p>
            </div>

            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between xl:mb-10 lg:min-w-full">
                <x-title img="" h2="Galeria" p="Galeria dos prefeitos de São Cristóvão"></x-title>

                <div class="flex flex-wrap items-center justify-center w-full gap-6">
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/marcos-santana.jpeg"
                        name="Marcos Santana" mandato="2017 - 2024"
                        desc="Marcos Antônio de Azevedo Santana ,nasceu em São Cristóvão
                        (SE), no dia 8 de novembro de 1959. Filho de José Alves de
                        Santana (in memorian) e Lusinete de Azevedo Santana. Casado
                        com Sandra Oliveira Rodrigues Santana há 40 anos. Pai de três
                        filhas e avô de 5 netos. Estudou no Colégio Estadual Senador
                        Paulo Sarazate. É formado em Administração pela FANESE e
                        pós-graduado em Gestão Urbana e Planejamento Municipal pela
                        UFS. É funcionário concursado da Caixa Econômica Federal há
                        30 anos. Atuou em vários órgãos governamentais: PRONESE,
                        Secretaria Estadual do Meio Ambiente e dos Recursos Hídricos,
                        DESO. No dia 12 de julho de 2010 fundou, junto com um grupo
                        de conterrâneos preocupados com a promoção da Cultura e da
                        Cidadania no município, a Ação Popular e Cidadania João Bebe-
                        Água (ACIJOBA), uma ONG que tinha entre as suas principais
                        finalidades: “o fomento de ações que contribuam para manter
                        viva a memória cultural popular relacionada com os usos,
                        costumes e tradições da diversidade cultural brasileira, a
                        promoção da arte e da cultura, e a defesa e conservação do
                        patrimônio histórico e artístico”. E realiza anualmente o evento
                        “Tributo a João Bebe-Água”. Em sua gestão como prefeito do
                        Município de São Cristóvão, resgatou o Festival de Artes de São
                        Cristóvão (FASC), no ano de 2017, em sua 34ª edição (após um
                        hiato de 12 anos que o evento não
                        vinha sendo realizado pelas gestões anteriores). Também2
                        resgatou os eventos “Carnaval dos Carnavais” e “São João da
                        Tradição”, além de implantar os projetos “Feira São Criativos”
                        e “Pôr do Sol na Cidade Mãe”."></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/jorge-eduardo.jpeg"
                        name="Jorge Eduardo" mandato="2015 - 2016" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/rivanda-varias.jpeg"
                        name="Rivanda Varias" mandato="2013 - 2015"
                        desc="Rivanda Farias de Oliveira a Rivanda Farias foi a primeira
                        mulher eleita a ocupar esse cargo, na cidade de São
                        Cristovão"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/alexander-rocha.jpeg"
                        name="Alexander Rocha" mandato="2007 - 2012"
                        desc="Alexsander Oliveira de Andrade [Alex Rocha] Um de seus
                        feitos como gestor foi aprovar o Plano Diretor na Câmara
                        municipal de Vereadores. Outro, durante na sua gestão o
                        sucesso de ter conseguido a chancela da praça são Francisco
                        como patrimônio da Humanidade"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/carlos-augusto.jpeg"
                        name="Carlos Augusto" mandato="2008" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/jose-correia.jpeg"
                        name="José Correia" mandato="2005 - 2007"
                        desc="O popular Zezinho, sancristovense, nasceu no bairro
                        Apicum Mérem, em São Cristóvão, no dia 25 de fevereiro
                        de 1963.Trabalhou no ramo da construção civil. Faleceu em
                        31/07/2008. Em 1998 conseguiu publicar a coletânea Por
                        amor à nossa Terra, com poesias dedicadas à São Cristóvão
                        e à Aracaju."></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/armando-batalha.jpeg"
                        name="Armando Batalha" mandato="1997 - 2004"
                        desc="Ex-vereador, Presidente da Câmara e ex-prefeito de três
                        mandatos, (sendo uma indiretamente) da velha São
                        Cristóvão, o ex-deputado estadual Armando Batalha.
                        Armando Batalha lembra que em 2000, quando foi reeleito
                        com 71% dos votos da população, foi reconhecido pela
                        BrasMarquet/Revista Isto É, como um dos 25 melhores
                        administradores do Brasil."></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/isaias-almeida.jpeg"
                        name="Isaias Almeida" mandato="1993 - 1996" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/horacio-souza.jpeg"
                        name="Horácio de Souza" mandato="1983 - 1988"
                        desc="HORÁCIO SOUZA LIMA, ele foi prefeito do nosso
                        município de 1983 a 1988. Horácio morou por muitos anos
                        na esquina do começo da Ladeira São Gonçalo, até hoje sua
                        irmã Bernadete mora lá. No populoso bairro Alto da
                        Divineia há uma grande avenida que recebeu seu nome."></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/jailton-vieira.jpeg"
                        name="Jailton Vieira" mandato="1982" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/lauro-rocha.jpeg"
                        name="Lauro Rocha" mandato="1977 - 1982 / 1989 - 1992"
                        desc="LAURO ROCHA, nasceu no dia 21 de julho de 1936.
                        Escreve que a minha vida política começou no Rio de
                        Janeiro quando eu servi à Marinha Mercante do Brasil por
                        10 anos. Eu era suboficial e fui representante da categoria
                        no sindicato. Por conta desse envolvimento com as causas
                        coletivas, comecei a participar ativamente da política.
                        Quando retornei para São Cristóvão, logo após o golpe
                        militar em 1964, participei diretamente da eleição de 1966.
                        Na época, nosso partido teve mais votos que o candidato
                        da Arena, que representava a situação. Seis anos depois,
                        fui candidato a vereador por Aracaju, para ajudar o MDB a
                        conquistar mais espaço na capital, mas não fui eleito. Em
                        seguida, já em 1974, me candidatei a deputado federal e
                        também não obtive êxito. Em 1976, disputei a eleição para
                        prefeito de São Cristóvão e
                        conseguimos vencer. O mandato, naquela época, era de
                        seis anos, e fiquei no cargo até 1982. Depois fui eleito
                        deputado estadual e ocupei o cargo de segundo secretário
                        da Assembleia Legislativa de Sergipe. Em 1988, nas
                        eleições municipais, fui eleito prefeito novamente. Assumi
                        a prefeitura em 1989 e terminei o
                        mandato em 1992. Essa é minha trajetória política de
                        serviço prestado ao povo da nossa São Cristóvão."></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/cledivaldo-oliveira.jpeg"
                        name="Cledivlado de Oliveira" mandato="1973 - 1976" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/paulo-correia.jpeg"
                        name="Paulo Correia" mandato="1971 - 1972"
                        desc="em 20 de novembro de 2015 (sexta-feira), faleceu em
                        Aracaju aos 93 anos, o ex-prefeito de São Cristóvão
                        PAULO CORREIA DOS SANTOS, mais conhecido como
                        ‘Paulo da Farmácia’. Sua inumação foi no Cemitério Colina
                        da Saudade. ‘Seu’ Paulo da Farmácia, alagoano da cidade
                        de Igreja Nova, foi prefeito biônico de São Cristóvão em
                        pleno regime ditatorial pela antiga ARENA (Aliança
                        Renovadora Nacional – antigo partido político que dava
                        sustentação ao governo militar de 1964), exerceu o cargo
                        executivo com mestria por quase dois anos (1971-1972); na
                        época o governador do estado era Paulo Barreto de Menezes
                        (1971-1975), também biônico: CARGO BIÔNICO
                        descrevia aquele cujo titular era investido mediante a
                        ausência do sufrágio universal (não havia eleição), a escolha
                        era a sanção das autoridades de Brasília nas décadas de
                        1960-11
                        1980.Entre as principais obras na sua gestão estão:
                        urbanização da estátua do Cristo, da Praça da Bandeira, da
                        Ladeira do Cemitério, a criação da Escola do Povoado Ilha
                        Grande, que tem seu nome, e
                        estabeleceu, na Praça da Bandeira, a Lyra João Batista
                        Prado em 1972."></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/izaias-gileno.jpeg"
                        name="Izaías Gileno" mandato="1967 - 1970" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/romualdo-prado.jpeg"
                        name="Romualdo Prado" mandato="1963 - 1966"
                        desc="Romualdo Prado nasceu em São Cristóvão no dia 11 de
                        janeiro de 1923, filho de Erundino Prado filho e dona Tereza
                        sacramento prado, nos anos de 1962 escrivão já tinha um
                        mandato de vereador , logo depois foi eleito a prefeito de
                        São Cristóvão em um período de 1963 a 1966, isso no
                        caldeirão do início do ditadura militar. Se ouve muito nos
                        depoimentos de seus contemporâneos que foi um período de
                        grandes mudanças da vida cotidiana do povo sancristovense,
                        isso contando com as turbulência já no meio de seu mandato
                        com a chegada do regime militar conhecido como ditadura
                        de 1964. Foram 3 anos de muitos acertos e grandes
                        realizações. Realizou calçamentos, reformou praças, iniciou
                        a via de acesso a BR-101 também em fase de construção e
                        outras melhorias das condições de vida dos munícipes. Seu
                        feito maior foi a construção do Ginásio de Esportes, Seu
                        legado é o respeito com o bem público. Romualdo Prado
                        tinha 96 anos. Ele foi prefeito na cidade entre os anos de
                        1963 a 1966. Faleceu em 30 de junho de 2019, com 96 anos.
                        Como prefeito, além de grandes obras, deixou uma marca
                        quanto ao zelo, e a honestidade ao coisa pública realizou
                        grandes obras, a exemplo de abertura de ruas e construção
                        de seis escolas. Seu legado é o respeito com o bem público."></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/elysio-carmelo.jpeg"
                        name="Elysio Carmelo" mandato="1959 - 1962"
                        desc='Elysio Carmelo nasceu em 02 de dezembro de 1908 e, após
                        os estudos, exerceu a atividade de comerciante. Durante 35
                        anos, ele também exerceu com brilho e honradez na
                        Prefeitura Municipal as funções de Escrivão, Tabelião e
                        Oficial do Registro de Imóveis da Comarca de São
                        Cristóvão".
                        Elysio Carmelo ingressou na vida política filiando-se ao
                        PTB. "Em 1958, atendendo a convites de amigos e políticos
                        de expressão no Estado, candidatou-se ao cargo de prefeito
                        de São Cristóvão. Eleito, ele governou o município de 1959
                        a 1962 e, dentre várias obras, fundou o Ginásio, hoje
                        denominado Paulo Sarasarte. Sua grande preocupação era a
                        educação dos jovens, tanto os ricos como pobres" Candidato
                        a deputado estadual em 1962 e eleito, exerceu o mandato de
                        1963 a 1966, enfrentando grande dificuldades impostas pelo
                        regime militar. Em 1967 foi nomeado para o cargo de
                        Diretor do Serviço do Patrimônio da União (SPU).
                        Posteriormente ele voltou a exercer as funções de Escrivão,
                        Tabelião e Oficial do Registro de Imóveis até 1978, quando
                        se aposentou e dedicou-se apenas a vida de fazendeiro e
                        agro-pecuarista. Faleceu em 29 de abril de 1983 e foi
                        enterrado no Cemitério Santo Antônio".'></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/deoclecio-vieira.jpeg"
                        name="Deoclécio Vieira" mandato="1955 - 1958"
                        desc='Quem trouxe a energia elétrica - "serviço de energia e
                        força" - da CHESF para a nossa cidade foi o então prefeito
                        operário Deoclécio Vieira da Silva (1955- 1958) - foto,
                        inaugurada no dia 17 de novembro de 1957.'></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/lourival-batista.jpeg"
                        name="Lourival Batista" mandato="1950 - 1954"
                        desc="Filho de Francisco da Costa Baptista e Angelina Gomes
                        Baptista. Iniciou seus estudos em Alagoinhas. No ano de
                        1943, já formado em medicina pela Universidade Federal
                        da Bahia, Lourival chegou a Sergipe, constituindo família
                        e adotando Sergipe como seu lar. Estabeleceu-se em São
                        Cristóvão, onde exerceu sua profissão de médico. Pela sua
                        vocação política, no ano de 1947 foi eleito Deputado
                        Estadual e, em seguida, Prefeito de São Cristóvão. Foi
                        deputado estadual (1947-1951), prefeito de São Cristóvão
                        (1951-1954), deputado federal (1959-1967), governador
                        de Sergipe (31 de janeiro de 1967 a 14 de maio de 1971) e
                        senador (1971-1995). Conhecido por ser um político de
                        invulgares sagacidade e inteligência, no ano de 1959 já
                        logrou a Câmara dos Deputados,
                        com votação consagradora, e em 1966 assumiu o Governo
                        do Estado de Sergipe"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/mamades-fernandes.jpeg"
                        name="Mamades Fernandes" mandato="1946 - 1949"
                        desc="MAMADES FERNANDES DANTAS – conhecido
                        como Seu Vavá Dantas (1946-1949) à direita da foto, ao
                        lado do então médico da Fábrica Nova Dr. Lourival
                        Baptista, na inauguração do Banho Morno. Dr.Lourival
                        Baptista foi prefeito do município (1950- 1954), asuceder,
                        portanto, Seu Vavá Dantas."></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/helio-amado.jpeg"
                        name="Hélio Amado" mandato="1945"
                        desc="Filho de Pedro Amado (proprietário da Fábrica Velha), foi
                        prefeito da cidade de 1945 a 1946."></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/jose-pereira.jpeg"
                        name="José Pereira" mandato="1940 - 1945" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/antonio-silvio.jpeg"
                        name="Antônio Sílvio" mandato="1936 - 1939"
                        desc="ANTONIO SÍLVIO BASTOS, Nasceu em 1886, em
                        São Cristóvão e faleceu em 1973, foi prefeito de 1936 a
                        1939. Foto 15 de julho de 1973 mostra solene reunião na
                        Câmara de Vereadores para celebrar passagem de um mês
                        do então falecimento do saudoso prefeito Seu ANTONIO
                        SÍLVIO BASTOS (1886-
                        1973), foi prefeito de 1936 a 1939. Note-se a presença (na
                        frente da foto) do saudoso João Pitanga vereador à época,
                        e alguns dos parentes do homenageado: saudoso Paulo
                        Bastos (filho) e sua esposa Dona Francisca; saudoso Seu
                        Austeclinío (filho); Iolanda e Plácida Bastos (filhas) e
                        saudoso Seu Hudson Pitanga Bastos (mais conhecido com
                        Seu Dissón) - filho. homenageado: saudoso Paulo Bastos
                        (filho) e sua esposa Dona Francisca; saudoso Seu
                        Austeclinío (filho); Iolanda e Plácida Bastos (filhas) e
                        saudoso Seu Hudson Pitanga Bastos (mais conhecido com
                        Seu Dissón) - filho. Lembro-me que a Câmara de
                        Vereadores, na época, funcionava no andar superior da
                        Prefeitura"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/pedro-montalvao.jpeg"
                        name="Pedro Montalvão" mandato="1935 - 1936" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/joao-baptista.jpeg"
                        name="João Baptista" mandato="1935" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/erundino-prado.jpeg"
                        name="Erundino Prado" mandato="1934" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/jose-vieira.jpeg"
                        name="José Vieira" mandato="1925 - 1930 / 1906 - 1910" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/generico.jpg"
                        name="José Góis" mandato="1926 - 1927" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/generico.jpg"
                        name="Bathazar Mandarino" mandato="1925 - 1926" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/generico.jpg"
                        name="Odilon Cardoso" mandato="1923 - 1924" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/generico.jpg"
                        name="Manoel Bernadino" mandato="1922 - 1923" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/antonio-fontes.jpeg"
                        name="Antônio Fontes" mandato="1916 - 1922 / 1900 - 1905" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/messias-prado.jpeg"
                        name="Messias do Prado" mandato="1911 - 1915" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/generico.jpg"
                        name="Diniz Galvão" mandato="1912 - 1913" desc=""></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/antonio-miguel.jpeg"
                        name="Antônio Miguel" mandato="1888 - 1900" desc=""></x-municipio.card>
                </div>
            </div>
        </div>
    </section>

    <x-municipio.modal />

    @push('scripts')
        @vite('resources/js/modal-galeria.js')
    @endpush

</x-layout.municipio>
