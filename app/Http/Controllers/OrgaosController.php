<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrgaosController extends Controller
{
    public function semas()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/assistencia');
        return view('orgaos.semas', compact('noticiasRecentes'));
    }

    public function cgm()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/controladoria');
        return view('orgaos.cgm', compact('noticiasRecentes'));
    }

    public function semdes()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/transito');
        return view('orgaos.semdes', compact('noticiasRecentes'));
    }

    public function semdet()
    {
        return view('orgaos.semdet');
    }

    public function semed()
    {
        $unidades = [
            ['CRECHE EZILDE SERRA PINHEIRO', 'Av. Irineu Neri, S/N', 'CENTRO', 'NOLY CARDOZO ANDRADE', 'creche.ezildepinheiro@saocristovao.se.gov.br', 'BERCARIO E MATERNAL', 'MANHÃ E TARDE', '32615221'],
            ['EMEF ARACELES RODRIGUES CORREA', 'Av. Horácio Souza Lima, 156 Alto da Divinéia', 'CENTRO', 'ANTONIO DA PAIXAO', 'emef.araceles@saocristovao.se.gov.br', 'ENS FUND ANOS FINAIS - 6º ao 9º e PROSIC', 'MANHÃ E TARDE', '32611323'],
            ['EMEF PROFESSORA MARIA JOSE PINTO FONTES', 'Alto de Itabaiana', 'CENTRO', 'CINTIA CARLA DOS SANTOS BASÍLIO', 'emef.mariajose@saocristovao.se.gov.br', 'CRECHE, PRE-ESCOLA, 1º AO 5º ANO', 'MANHÃ E TARDE', '32613463'],
            ['EMEF DR LOURIVAL BAPTISTA', 'Av. Paulo B. de Menezes, S/N Centro', 'CENTRO', 'ADRIANA LIMA DE JESUS', 'emef.lourivalbaptista@saocristovao.se.gov.br', 'ENS FUND ANOS INICIAIS - 1º AO 5º ANO', 'MANHÃ E TARDE', '32612114'],
            ['EMEF DR LOURIVAL FONTES', 'Alto da Colina', 'CENTRO', 'RAYSA DOS SANTOS GONÇALVES', 'emef.lourivalfontes@saocristovao.se.gov.br', 'PRÉ-ESCOLA, ENS FUND ANOS INICIAIS - 1º AO 5º ANO', 'MANHÃ E TARDE', '32614558'],
            ['EMEF FREI FERNANDO', 'Av. Félix Pereira, S/N Centro', 'CENTRO', 'FERNANDA SANTANA SANTOS MACHADO', 'emef.freifernando@saocristovao.se.gov.br', 'PRÉ-ESCOLA, ENS FUND ANOS INICIAIS - 1º AO 5º ANO', 'MANHÃ E TARDE', '32612822'],
            ['EMEF GINA FRANCO', 'Rua João Bebe Água, 56 Centro', 'CENTRO', 'NADJA IVONE ANDRADE DOS SANTOS', 'emef.ginafranco@saocristovao.se.gov.br', 'ENS FUND ANOS FINAIS - 6º ao 9º e PROSIC', 'MANHÃ E TARDE', '-'],
            ['EMEF JOÃO FRANCISCO DE ANDRADE', 'Loteamento Lauro Rocha', 'CENTRO', 'EMANUELA CRISTINA SANTOS SILVA DE OLIVEIRA', 'emef.franciscodeandrade@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 5º ANO', 'MANHÃ E TARDE', '-'],
            ['EMEF PEDRO AMADO', 'Av. Lourival Baptista, S/N', 'CENTRO', 'CLARISSA MARIA BEZERRA DOS SANTOS MESSIAS', 'emef.pedroamado@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 5º ANO', 'MANHÃ E TARDE', '32613462'],
            ['EMEF SAO CRISTOVAO', 'Rua Erundino Prado Filho, S/N Centro', 'CENTRO', 'ARILUCIO ESPINHEIRO SANTOS', 'emef.saocristovao@saocristovao.se.gov.br', 'ENS FUND ANOS FINAIS - 6º AO 9º ANO, EJA', 'MANHÃ, TARDE E NOITE', '32611660'],
            ['EMEF TIA MARINETE', 'Rua Belo Horizonte, Centro', 'CENTRO', 'EDVANIA DANTAS SANTOS', 'emef.tiamarinete@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA', 'MANHÃ E TARDE', '32611610'],
            ['EMEF CLAUDIO MEIRELES', 'Rua Principal, Pov. Colônia Miranda', 'RITA CACETE', 'KELLY SANTOS RIBEIRO SANTANA', 'emef.claudiomeireles@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 7º ANO', 'MANHÃ E TARDE', '-'],
            ['EMEF CLEODICE ARAUJO DA CRUZ', 'Povoado Coqueiro', 'RITA CACETE', 'DAYANE REIS FERREIRA', 'emef.cleodice@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 3º ANO', 'MANHÃ E TARDE', '32613755'],
            ['EMEF TIA AIDEE', 'Rua Principal, Pov. Rita Cacete', 'RITA CACETE', 'LUCIENE DOS SANTOS', 'emef.tiaaidee@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 5º ANO', 'MANHÃ E TARDE', '32612555'],
            ['EMEF DEP ANTONIO CARLOS LEITE FRANCO', 'Rua Principal, Pov. Cardoso', 'RURAL BR', 'FRANCIELE SANTOS FARIAS', 'emef.antoniocarlos@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 8º ANO', 'MANHÃ E TARDE', '32616064'],
            ['EMEF MANOEL ASSUNCAO DO NASCIMENTO', 'Povoado Parque Santa Rita', 'RURAL BR', 'MARIA APARECIDA SANTOS MOURA', 'emef.manoelaassuncao@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 5º ANO', 'MANHÃ E TARDE', '32614343'],
            ['EMEF POVOADO FEIJÃO', 'Povoado Feijão', 'RURAL BR', 'ALMIR DE OLIVEIRA SILVA', 'emef.povoadofeijao@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 5º ANO', 'MANHÃ', '-'],
            ['EMEF LOURDES TAVARES DOS SANTOS', 'Caípe Velho', 'RURAL PEDREIRAS', 'BRUNA RAFAELA LIMA SANTOS', 'emef.lourdestavares@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 2º ANO', 'MANHÃ', '-'],
            ['EMEF PROFA TEREZITA DE PAIVA LIMA', 'Povoado Pedreiras', 'RURAL PEDREIRAS', 'KARLA AMANDA SANTOS BISPO', 'emef.terezita@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 5º ANO', 'MANHÃ E TARDE', '32615446'],
            ['CRECHE MARIA DE LOURDES GOMES', 'Rua Valdomiro Teófilo, S/N', 'ROSA ELZE', 'MARIA CRISTINA ARAGAO', 'creche.mariadelourdes@saocristovao.se.gov.br', 'BERÇARIO E MATERNAL', 'MANHÃ E TARDE', '32571520'],
            ['EMEF AGNALDO SILVA SANTANA', 'Pov. Vázea Grande', 'ROSA ELZE', 'ERIAN RENEDI DOS SANTOS LIMA', 'eriansantos1603@gmail.com', 'CRECHE PRÉ-ESCOLA, ENS FUND ANOS INICIAIS - 1º AO 5º ANO', 'MANHÃ E TARDE', '-'],
            ['EMEF DR MARTINHO DE OLIVEIRA BRAVO', 'Rua Grujim, Rosa Elze', 'ROSA ELZE', 'ELIANA FERREIRA SANTOS', 'emef.martinhobravo@saocristovao.se.gov.br', '6º AO 9º E EJA (CICLOS)', 'MANHÃ, TARDE E NOITE', '32572385'],
            ['EMEF FRANCISCO DA COSTA BATISTA', 'Rua Elpidio Batista, S/N', 'ROSA ELZE', 'CRISTIANE LIMA DE CARVALHO', 'emef.franciscodacosta@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 2º ANO', 'MANHÃ E TARDE', '-'],
            ['EMEF MAJOR JOAO TELES', 'Povoado Cabrita', 'ROSA ELZE', 'ANDREZA BATALHA COSTA', 'emef.majorjoaoteles@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 5º ANO', 'MANHÃ E TARDE', '32579068'],
            ['EMEF MARIA DE LOURDES GOMES', 'Rua A, S/N. Loteamento Tijuquinha', 'ROSA ELZE', 'JEANNE MARQUISE SANTOS', 'emef.mariadelourdes@saocristovao.se.gov.br', 'PRE-ESCOLA, 1º AO 5º ANO', 'MANHÃ E TARDE', '-'],
            ['EMEF MARIA OLIVEIRA SANTOS', 'Travessa D, S/N Madre Paulina', 'ROSA ELZE', 'LUCIANO DA SILVA SANTOS', 'emef.mariaoliveira@saocristovao.se.gov.br', 'PRÉ-ESCOLA, ENS FUND ANOS INICIAIS - 1º AO 5º ANO', 'MANHÃ E TARDE', '32571583'],
            ['EMEF PROFA IZIDORIA MENDES CRUZ', 'Rua B 01, Lafaiete Coutinho', 'ROSA ELZE', 'EDUARDO CESAR SANTOS', 'emef.izidoria@saocristovao.se.gov.br', '1º AO 6º ANO', 'MANHÃ E TARDE', '-'],
            ['EMEF PROFA JOSINALVA SANTOS SILVA', 'Rua José Prado Barreto, S/N', 'ROSA ELZE', 'FRANCIS JACQUELINE DE MELO ROCHA', 'emef.josinalva@saocristovao.se.gov.br', 'PRÉ- ESCOLA, 1º AO 5º ANO', 'MANHÃ E TARDE', '32575277'],
            ['EMEF RAIMUNDO FRANCISCO DOS SANTOS', 'Rua A, S/N. Luiz Alves', 'ROSA ELZE', 'TELVANIA MARIA DA SILVA', 'emef.raimundofrancisco@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 5º ANO', 'MANHÃ E TARDE', '32576385'],
            ['EMEF RUTH DULCE DE ALMEIDA', 'Barreiro', 'ROSA ELZE', 'PAULA ANDREA DE JESUS SANTOS', 'emef.ruthdulce@saocristovao.se.gov.br', 'CRECHE (MAT II), PRE-ESCOLA, 1º AO 5º ANO', 'MANHÃ E TARDE', '32571765'],
            ['EMEF PROFª DULCILENE TEIXEIRA ALMEIDA', 'Loteamento porto Poxim, Loteamento Tijuquinha', 'ROSA ELZE', 'ANY CAROLINE PAIXÃO DOS SANTOS', 'emef.dulcilene@saocristovao.se.gov.br', 'BERÇARIO E MATERNAL E PRE-ESCOLA', 'MANHÃ E TARDE', '-']
        ];

        $dados_ideb = [
            ["2021", "Anos Iniciais", "https://qedu.org.br/municipio/2806701-sao-cristovao/ideb/escolas"],
            ["2021", "Anos Finais", "https://qedu.org.br/municipio/2806701-sao-cristovao/ideb/escolas?ciclo_id=AF&dependencia_id=3&ano=2021&order=nome&by=asc"],
            ["2019", "Anos Iniciais", ""],
            ["2019", "Anos Finais", ""],
            ["2017", "Anos Iniciais", ""],
            ["2017", "Anos Finais", ""],
            ["2015", "Anos Iniciais", ""],
            ["2015", "Anos Finais", ""],
            ["2013", "Anos Iniciais", ""],
            ["2013", "Anos Finais", ""],
            ["2011", "Anos Iniciais", ""],
            ["2011", "Anos Finais", ""],
            ["2009", "Anos Iniciais", ""],
            ["2009", "Anos Finais", ""],
            ["2007", "Anos Iniciais", ""],
            ["2007", "Anos Finais", ""],
            ["2005", "Anos Iniciais", ""],
            ["2005", "Anos Finais", ""],
        ];

        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/educacao');
        return view('orgaos.semed', compact('noticiasRecentes', 'unidades', 'dados_ideb'));
    }

    public function semel()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/esporte');
        return view('orgaos.semel', compact('noticiasRecentes'));
    }

    public function semfop()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/fazenda');
        return view('orgaos.semfop', compact('noticiasRecentes'));
    }

    public function gapre()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/gabinete');
        return view('orgaos.gapre', compact('noticiasRecentes'));
    }

    public function gabvp()
    {
        return view('orgaos.gabvp');
    }

    public function segov()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/governo');
        return view('orgaos.segov', compact('noticiasRecentes'));
    }

    public function seminfra()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/infraestrutura');
        return view('orgaos.seminfra', compact('noticiasRecentes'));
    }

    public function semma()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/meio-ambiente');
        return view('orgaos.semma', compact('noticiasRecentes'));
    }
    public function pgm()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/procuradoria');
        return view('orgaos.pgm', compact('noticiasRecentes'));
    }

    public function sms()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/saude');
        return view('orgaos.sms', compact('noticiasRecentes'));
    }

    public function semsurb()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/servicos-urbanos');
        return view('orgaos.semsurb', compact('noticiasRecentes'));
    }

    public function fumctur()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/cultura');
        return view('orgaos.fumctur', compact('noticiasRecentes'));
    }

    public function saae()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/saae');
        return view('orgaos.saae', compact('noticiasRecentes'));
    }

    public function smtt()
    {
        $apiController = new ApiController();
        $noticiasRecentes = $apiController->getApi('noticias/categorias/ultimas/transito');
        return view('orgaos.smtt', compact('noticiasRecentes'));
    }
}
