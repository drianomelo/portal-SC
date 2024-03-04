<x-layout.orgaos bg="bg-sms">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Secretaria Municipal da Saúde" sigla="SMS" :img="asset('img/saude.png')" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências" p="Competências da Secretaria Municipal da Saúde"></x-title>
                <p
                    class="text-justify dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Secretaria Municipal da Saúde – SMS tem por competência prestar apoio e assistência direta e
                    imediata ao Chefe do Poder Executivo na área de políticas públicas do Governo Municipal referente à
                    saúde; gerenciar o Sistema Único de Saúde, em âmbito municipal; planejar, formular, supervisionar e
                    executar políticas de saúde pública; desempenhar atividades médicas e odontológicas; coordenar os
                    serviços das vigilâncias em saúde do trabalhador, sanitária, ambiental e epidemiológica; promover o
                    fornecimento gratuito de medicamentos básicos, através da rede pública de saúde e/ou programa
                    legalmente instituído; realizar pesquisas médico-sanitárias; executar outras atividades correlatas
                    ou do âmbito de sua competência, e as que lhe forem regularmente conferidas ou determinadas. Art. 91
                    do <a class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Secretária" p="Secretária Municipal da Assistência Social"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left min-w-[280px] h-48 rounded-lg bg-cover bg-[url(https://www.saocristovao.se.gov.br/imagens/orgaos/SMS.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Fernanda Rodrigues de Santana
                                Góes
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Assistente Social</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify text dark:text-white">
                        Fernanda Rodrigues de Santana Góes (Secretária Municipal de Saúde) é assistente Social, formada
                        pela UFS em 2006, com pós-graduação em Políticas Públicas e Direito de Família pela UFS/Escola
                        Superior do Ministério Público/SE. Trabalhou como assistente social com vínculo efetivo no
                        município de Aracaju, na Secretaria Municipal de Assistência Social. Já no estado atuou na
                        Fundação Hospitalar de Saúde (Hospital de Urgências de Sergipe). Em janeiro de 2017 assumiu a
                        Secretaria Municipal de Assistência Social e do Trabalho (Semast) de São Cristóvão onde realizou
                        um trabalho de reorganização das políticas socioassistenciais do município. Atualmente exerce a
                        função de secretária municipal de saúde de São Cristóvão.
                    </p>
                </div>

                <x-title img="" h2="Unidades de Assistência"
                    p="Unidades de Assistência da Secretaria Municipal da Saúde"></x-title>
                <table>
                    <thead>
                        <tr class="text-blue-900 bg-zinc-100 dark:bg-zinc-900">
                            <th class="p-2 pl-4 border text text-start">Unidade</th>
                            <th class="p-2 pl-4 border text text-start">Bairro</th>
                            <th class="p-2 pl-4 border text text-start">Gerente</th>
                            <th class="p-2 pl-4 border text text-start">Endereço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S DR JOSÉ RAIMUNDO ARAGÃO</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">DIVINEIA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">FERNANDA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">AV. HORÁCIO SOUZA LIMA S/N -
                                DIVINEIA</td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S JAIRO TEIXEIRA DE JESUS</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">CENTRO</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">JANE CARLA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">AV. FÉLIX PEREIRA S/N - CENTRO</td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S SINVAL JOSE DE OLIVEIRA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">SÃO GONÇALO</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">ANA JÚLIA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">RUA J, S/N LOTEAMENTO LAURO ROCHA
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S MASSOUD JALALI</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">ROSA ELZE</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">JOLENE</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">RUA PROF. HORÁCIO DE SOUZA LIMA, S/N
                                - ROSA ELZE
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S MARIANO DO NASCIMENTO</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">ROSA MARIA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">NATÁLIA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">RUA ALAN SILVA, 367 - ROSA ELZE
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S MARIA JOSÉ SOARES FIGUEIROA
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">EDUARDO GOMES</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">KÁTIA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">AV. MARGINAL S/N - CONJUNTO EDUARDO
                                GOMES
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S LUIZ ALVES</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">LUIZ ALVES</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">JISIELY</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">RUA B, 188, CONJUNTO LUIZ ALVES -
                                ROSA ELZE
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S ANTONIO FLORÊNCIO DE MATOS
                                (TIJUQUINHA)</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">TIJUQUINHA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">JÚLIA GRAZIELA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">RUA SÃO LOURENÇO, 292 - TIJUQUINHA
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S MARIA LUIZA DOS SANTOS
                                NASCIMENTO (CABRITA)</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">POVOADO CABRITA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">LETÍCIA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">AV. PRINCIPAL, S/N - POVOADO CABRITA
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S JOSÉ MACÁRIO DE SANTANA
                                (VÁRZEA)</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">VÁRZEA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">LETÍCIA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">AV. PRINCIPAL, S/N - POVOADO VÁRZEA
                                GRANDE
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S LAUDELINA LIMA DE ANDRADE
                                (CAIPE VELHO)</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">POVOADO CAIPE VELHO</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">ANDREA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">-
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S MARIA ALICE FREIRE (PEDREIRAS)
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">POVOADO PEDREIRAS</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">ANDREA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">AV. PRINCIPAL, S/N - POVOADO
                                PEDREIRAS
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U S MARIA DE LOURDES ALVES (POV
                                FEIJÃO)
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">POVOADO FEIJÃO</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">THIAGO</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">AV. PRINCIPAL, S/N - POVOADO FEIJÃO
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U S F MANOEL JUVINO SANTOS (CARDOSO)
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">POVOADO CARDOSO</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">THIAGO</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">AV. PRINCIPAL, S/N - POVOADO CARDOSO
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S PARQUE SANTA RITA
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">PARQUE SANTA RITA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">IZABEL</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">AV. PRINCIPAL, S/N - POVOADO PARQUE
                                SANTA RITA
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S MARIA DE LOURDES CRUZ (RITA
                                CACETE)
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">RITA CASSETE</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">MARTA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">AV. PRINCIPAL, SN - POVOADO RITA
                                CACETE
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S TÂNIA SANTOS CHAGAS (COLÔNIA
                                MIRANDA)
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">COLÔNIA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">MARTA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">RUA DO CORTE - POVOADO COLÔNIA
                                MIRANDA
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S IRÔNIA MARIA
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">ROMUALDO PRADO</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">SIMONE</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">AV. PAULO BARRETO DE MENEZES -
                                ROMUALDO PRADO
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">CAPS VALTER CORREIA
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">ALTO DA DIVINEIA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">EDJANE</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">AV. HORÁCIO DE SOUZA LIMA – ALTO DA
                                DIVINEIA
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">CAPS JOÃO BEBE ÁGUA
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">ROSA MARIA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">EDNA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">RUA JOSÉ ALMICAR AZEVEDO, 436, ROSA
                                MARIA
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">CENTRO ESPECIALIZADO EM
                                REABILITAÇÃO DRº RAIMUNDO ARAGÃO
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">LOURIVAL BATISTA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">IANDRA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">AV. LOURIVAL BATISTA – LOURIVAL
                                BATISTA
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">CENTRO DE ESPECIALIDADE LOURDES
                                VIEIRA
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">ROSA ELZE</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">LUANA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">RUA PROF. HORÁCIO DE SOUZA LIMA,
                                156 - ROSA ELZE
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">CONSELHO MUNICIPAL DE SAÚDE
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">CENTRO</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">ALDIRA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">PRAÇA GETULIO VARGAS-CENTRO
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">SECRETARIA MUNICIPAL DE SAÚDE
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">CENTRO</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">MAYARA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">PRAÇA GETULIO VARGAS – 328 –CENTRO
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">URGÊNCIA 24h
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">EDUARDO GOMES</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">TATIANY</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">RUA 62, 624 - CONJ. EDUARDO GOMES
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">COPEMCAM
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">-</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">NICELMA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">BR 101, S/N - POVOADO TIMBO
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S BRUNO KAIQUE
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">MADRE PAULINA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">SARA TRAVASSOS</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">RUA A, 167 - MADRE PAULINA
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 pl-4 text-[11px] font-light border text">U B S JOSÉ RODRIGUES AMADA
                            </td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">MARCELO DEDA</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">ADRIELLE</td>
                            <td class="p-2 pl-4 text-[11px] font-light border text">RUA D, S/N - BAIRRO MARCELO DEDA
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4">
                <x-title img="" h2="Notícias" p="Secretaria Municipal da Saúde"></x-title>

                <div class="flex flex-col gap-2">
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/sao-cristovao-realiza-mutirao-de-combate-ao-aedes-aegypti-no-dia-d-contra-a-dengue-2024-03-02-65e38742bfa58.jpeg"
                        alt="teste" href=""
                        title="São Cristóvão realiza mutirão de combate ao Aedes aegypti no Dia D contra a dengue"
                        tag="saúde" data="27/02/2024"
                        desc="Com o objetivo de promover a socialização e viabilizar momentos de interação para o público assistido pelo Serviço de Convivência e Formação de Vínculos (SCFV) dos Centros de Referência em Assistência Social (Cras) Gilson Prado e São Cristóvão, a Secretaria Municipal de Assistência Social (Semas) promoveu nesta segunda-feira (26) o Baile Carnavalesco Intergeracional. O evento ocorreu na sede do Sindicato dos Trabalhadores Técnico-administrativos em Educação da UFS (Sintufs), no bairro Rosa Elze."
                        fotografo="Dani Santos" />
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-de-sao-cristovao-da-inicio-a-parceria-com-retrend-brasil-ofertando-exames-para-mais-de-400-pessoas-com-diabetes-no-municipio-2024-03-01-65e253ba04899.jpeg"
                        alt="teste" href=""
                        title="Prefeitura de São Cristóvão dá início à parceria com RETREND Brasil ofertando exames para mais de 400 pessoas com diabetes no município"
                        tag="saúde" data="21/02/2024"
                        desc='Durante reunião entre o prefeito Marcos Santana e o secretário Municipal de Infraestrutura (Seminfra), Júlio Júnior, foram apresentados projetos que visam revitalizar o atracadouro do "Catamarã", no Centro Histórico e promover a requalificação de duas praças na cidade: a Praça da Alameda no Eduardo Gomes e a Praça Horácio Souza Lima, localizada no bairro Rosa Elze, em São Cristóvão.'
                        fotografo="Heitor Xavier" />
                </div>

                <x-title img="" h2="Projetos" p="Projetos da Secretaria Municipal da Saúde"></x-title>

                <div class="flex flex-col gap-4">
                    <a href=""
                        class="w-full p-4 text-3xl font-bold text-center text-white bg-blue-900 rounded-md shadow-md">
                        Educação Permanente
                    </a>
                    <a href=""
                        class="w-full p-4 text-3xl font-bold text-center text-white bg-blue-900 rounded-md shadow-md">
                        II Seminário de Boas Práticas
                    </a>
                    <a href=""
                        class="w-full p-4 text-3xl font-bold text-center text-white bg-blue-900 rounded-md shadow-md">
                        Plano Municipal de Saúde
                    </a>
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Secretaria Municipal da Saúde" address="Rua Praça Getúlio Vragas, S/N, Centro"
        horario="08:00 ás 16:00h" phone="(79) 3045-4915" cellphone=""
        email="gabinete.sms@saocristovao.se.gov.br" />
</x-layout.orgaos>
