<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannersController extends Controller
{
    public function index() {
        return view('banners.index');
    }
    public function governancapublica() {
        return view('banners.governanca-publica');
    }
    public function conselhomunicipalgestaoterritorial() {
        return view('banners.conselho-municipal-gestao-territorial');
    }
    public function concursoseselecoes() {
        return view('banners.concursos-selecoes');
    }
    public function concursos() {
        return view('banners.concursos');
    }
    public function concursoguardaeoutros() {
        $editais = [
            ["2024","Edital 15/2024 Resultado dos exames médicos admissionais, cargo Engenheiro Civil Substituto","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital%2015%202024%20Resultado%20dos%20exames%20médicos%20admissionais,%20cargo%20Engenheiro%20Civil%20Substituto.pdf"],
            ["2024","Edital 14/2024 Resultado dos exames médicos admissionais, cargo Psicólogo","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital%2014%202024%20Resultado%20dos%20exames%20médicos%20admissionais,%20cargo%20Psicólogo.pdf"],
            ["2024","Edital 13/2024 Resultado Provisório da Avaliação Psicológica dos Candidatos ao Cargo de Guarda Municipal","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/ATUAL%20RESULTADO_PROVISÓRIO_DA_AVALIAÇÃO_PSICOLÓGICA.pdf"],
            ["2024", "Edital 12/2024 Convocação de candidatos sub judice para a avaliação psicológica","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/EDITAL_PSICOLOGOS_SAO_CRISTOVAO_Sub_Judice_12.pdf"],
            ["2024", "Edital 11/2024 Convocação para entrega de documentos e exames médicos admissionais, cargo Engenheiro Civil Substituto","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital%2011%202024%20Convocação%20para%20entrega%20de%20documentos%20e%20exames%20médicos%20admissionais,%20cargo%20Engenheiro%20Civil%20Substituto.pdf"],
            ["2024", "Edital 10/2024 Convocação para entrega de documentos e exames médicos admissionais, cargo Psicólogo","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital%2010%202024%20Convocação%20para%20entrega%20de%20documentos%20e%20exames%20médicos%20admissionais,%20cargo%20Psicólogo.pdf"],
            ["2024", "Edital 09/2024 Resultado dos exames médicos admissionais, cargos Assistente Social e Psicólogo","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital%2009%202024%20Resultado%20dos%20exames%20médicos%20admissionais,%20cargos%20Assistente%20Social%20e%20Psicólogo.pdf"],
            ["2024", "Edital 08/2024 Resultado dos exames médicos admissionais, cargo Analista Ambiental","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital%2008%202024%20Resultado%20dos%20exames%20médicos%20admissionais,%20cargo%20Analista%20Ambiental.pdf"],
            ["2024", "Edital 07/2024 Convocação para avaliação psicológica - cargo Guarda Municipal","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital%2007%202024%20Convocação%20para%20avaliação%20psicológica%20-%20cargo%20Guarda%20Municipal.pdf"],
            ["2024", "Edital 06/2024 Retificação subitem 14.4 do Edital 01 2023, somente para o Cargo 7 Guarda Municipal","https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/Guarda%20Municipal/2024/Edital%2006%202024%20Retificação%20subitem%2014.4%20do%20Edital%2001%202023,%20somente%20para%20o%20Cargo%207%20Guarda%20Municipal.pdf"],
            ["2024", "Edital 05/2024 Convocação para entrega de documentos e exames médicos admissionais, cargos Assistente Social e Psicólogo e torna sem efeito o Edital nº 03/2024 de 25 de janeiro de 2024","https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/Guarda%20Municipal/2024/Edital%2005%202024%20Convocação%20para%20entrega%20de%20documentos%20e%20exames%20médicos%20admissionais,%20cargos%20Assistente%20Social%20e%20Psicólogo%20e%20torna%20sem%20efeito%20o%20Edital%20nº%2003%202024%20de%2025%20de%20janeiro%20de%202024.pdf"],
            ["2024", "Edital 04/2024 Convocação para entrega de documentos e exames médicos admissionais, cargo Analista Ambiental","https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/Guarda%20Municipal/2024/Edital%2004%202024%20Convocação%20para%20entrega%20de%20documentos%20e%20exames%20médicos%20admissionais,%20cargo%20Analista%20Ambiental.pdf"],
            ["2024", "Edital 03/2024 Convocação para entrega de documentos e exames médicos admissionais, cargos Assistente Social e Psicólogo","https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/Guarda%20Municipal/Edital%2003%202024%20Convocação%20para%20entrega%20de%20documentos%20e%20exames%20médicos%20admissionais,%20cargos%20Assistente%20Social%20e%20Psicólogo.pdf"],
            ["2024", "Edital 02/2024 Resultado dos exames médicos admissionais, cargos Analista Ambiental, Nutricionista e Técnico Ambiental","https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/Guarda%20Municipal/Edital%2002%202024%20Resultado%20dos%20exames%20médicos%20admissionais,%20cargos%20Analista%20Ambiental,%20Nutricionista%20e%20Técnico%20Ambiental.pdf"],
            ["2024", "Edital 01/2024 Convocados que não compareceram para entrega dos documentos, cargo Analista Ambiental – vagas negros","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital%2001%202024%20Convocados%20que%20não%20compareceram%20para%20entrega%20dos%20documentos,%20cargo%20Analista%20Ambiental%20–%20vagas%20negros.pdf"],
            ["2023","Edital 29/2023 Convocação para entrega de documentos e exames médicos admissionais, cargos Analista Ambiental, Nutricionista e Técnico Ambiental","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital_29_2023_Convocacao_para_entrega_de_documentos_e_exames_medicos_admissionais_cargos_Analista_Ambiental_Nutricionista_e_Tecnico_Ambiental.pdf"],
            ["2023","Edital 28/2023 Resultado Final da avaliação Biopsicossocial  vagas pessoa com defiência e vagas reservadas a negros - Cargo 7 Guarda Municipal","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital_28-2023_Resultado_Final_da_avaliacao_Biopsicossocial_vagas_pessoa_com_defiencia_e_vagas_reservadas_a_negros_-_Cargo_7_Guarda_Municipal.pdf"],
            ["2023","Edital 27 2023 Resultado dos exames médicos admissionais, cargo assistente social","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital%2027%202023%20Resultado%20dos%20exames%20médicos%20admissionais,%20cargo%20assistente%20social.pdf"],
            ["2023","Edital 26/2023 Resultado Provisorio avaliação vagas pessoa com defiência e vagas reservadas a negros - Cargo 7 Guarda Municipal","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital_26_Resultado_Provisorio_avaliacao_vagas_pessoa_com_defiencia_e_vagas_reservadas_a_negros-_Cargo_7_Guarda_Municipal.pdf"],
            ["2023","Edital 25/2023 Convocação para entrega de documentos e exames médicos admissionais, cargo Assistente Social","https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital%2025%202023%20Convocação%20para%20entrega%20de%20documentos%20e%20exames%20médicos%20admissionais,%20cargo%20Assistente%20Social.pdf"],
            ["2023", "Edital 24/2023 Convocação para Avaliação Biopsicossocial dos candidatos concorrendo a vaga de negros", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital%2024%202023%20-%20convocação%20para%20avaliação%20biopsicossocial%20dos%20candidatos%20concorrendo%20a%20vaga%20de%20negros.pdf"],
            ["2023", "Edital 23/2023 Resultado dos exames médicos admissionais, cargos assistente social, nutricionista e psicólogo", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital%2023%202023%20Resultado%20dos%20exames%20médicos%20admissionais,%20cargos%20assistente%20social,%20nutricionista%20e%20psicólogo.pdf"],
            ["2023", "Edital 22/2023 Resultado final no teste de aptidão física (TAF)", "https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/Guarda%20Municipal/Edital_22_2023_Resultado_final_no_teste_de_aptidao_fisica_TAF.pdf"],
            ["2023", "Edital 21/2023 Convocados que não compareceram para entrega dos documentos, cargo Assistente Social", "https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/Guarda%20Municipal/Edital%2021%202023%20Convocados%20que%20não%20compareceram%20para%20entrega%20dos%20documentos,%20cargo%20Assistente%20Social.pdf"],
            ["2023", "Edital 20/2023 - Concurso Prefeitura Municipal de São Cristóvão - Resultado Provisório no teste de aptidão física (TAF)", "https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/Guarda%20Municipal/Edital%2020%202023%20-%20Concurso%20Prefeitura%20Municipal%20de%20São%20Cristóvão-%20Resultado%20Provisório%20no%20teste%20de%20aptidão%20física%20(TAF).pdf"],
            ["2023", "EDITAL 19/2023 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS E EXAMES MÉDICOS ADMISSIONAIS, CARGOS ASSISTENTE SOCIAL, NUTRICIONISTA E PSICOLOGO", "https://anexos.saocristovao.se.gov.br/storage/files/20/Guarda%20Municipal/EDITAL_19_2023_CONVOCACAO_PARA_ENTREGA_DE_DOCUMENTOS_E_EXAMES_MEDICOS_ADMISSIONAIS.pdf"],
            ["2023", "Edital 18/2023 Resultado final na investigação social e a convocação para o teste de aptidão física (TAF), somente para o Cargo 7 Guarda Municipa", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital_18-2023_Resultado_final_na_investigacao_social_e_a_convocacao_para_o_teste_de_aptidao_fisica_TAF_somente_para_o_Cargo_7_Guarda_Municipal.pdf"],
            ["2023", "EDITAL Nº 17/2023 RESULTADO PROVISÓRIO NA INVESTIGAÇÃO SOCIAL, SOMENTE PARA O CARGO 7: GUARDA MUNICIPAL", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Ed_17_2022_Pref_Sao_Cristovao_SEGOV_Res_prov_IS.pdf"],
            ["2023", "EDITAL Nº 16/2023 RESULTADO FINAL AVALIAÇÃO BIOPSICOSSOCIAL CANDIDATOS ÀS VAGAS RESERVADAS À PCD, RESULTADO FINAL CANDIDATOS NEGROS, RESULTADO FINAL E HOMOLOGAÇÃO CARGOS NÍVEL SUPERIOR E MÉDIO, EXCETO PARA O CARGO 7: GUARDA MUNICIPAL", "https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/Guarda%20Municipal/Edital_16-2023_resultado_final_avaliacao_biopsicossocial_candidatos_as_vagas_reservadas_a_PCD_resultado_final_candidatos_negros_resultado_final_e_homologacao_cargos_nivel_superior_e_medio_exce.pdf"],
            ["2023", "EDITAL Nº 15/2023 RESULTADO PROVISÓRIO NA AVALIAÇÃO BIOPSICOSSOCIAL DOS CANDIDATOS - VAGAS CANDIDATOS NEGROS E PESSOAS COM DEFICIÊNCIA, EXCETO CARGO 7", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital_no_15-2023_Resultado_provisorio_na_avaliacao_biopsicossocial_dos_candidatos_-_vagas_candidatos_negros_e_pessoas_com_deficiencia_exceto_cargo_7.pdf"],
            ["2023", "EDITAL Nº 14/2023 RESULTADO FINAL DOS EXAMES MÉDICO E ANTROPOMÉTRICO E CONVOCAÇÃO PARA INVESTIGAÇÃO SOCIAL, SOMENTE PARA O CARGO 7 GUARDA MUNICIPAL", "https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/Guarda%20Municipal/Edital_no_14-2023_Resultado_final_dos_exames_medico_e_antropometrico_e_convocacao_para_investigacao_social_somente_para_o_Cargo_7_Guarda_Municipal.pdf"],
            ["2023", "EDITAL Nº 13/2023 FORMAÇÃO DE CADASTRO DE RESERVA EM CARGOS DE NÍVEL SUPERIOR E DE NÍVEL MÉDIO", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital_no_13-2023_Formacao_de_cadastro_de_reserva_em_cargos_de_nivel_superior_e_de_nivel_medio.pdf"],
            ["2023", "EDITAL 12/2023 FORMAÇÃO DE CADASTRO DE RESERVA RETIFICAÇÃO", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital_no_12-2023_-_Formacao_de_cadastro_de_reserva_-_retificacao.pdf"],
            ["2023", "EDITAL 11/2023 FORMAÇÃO DE CADASTRO DE RESERVA EM CARGOS DE NÍVEL SUPERIOR E DE NÍVEL MÉDIO - CARGO 7", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/EDITAL_No_11_2023_FORMACAO_DE_CADASTRO_DE_RESERVA_EM_CARGOS_DE_NIVEL_SUPERIOR_E_DE_NIVEL_MEDIO_-_Cargo_7.pdf"],
            ["2023", "EDITAL Nº 10 FORMAÇÃO DE CADASTRO RESERVA", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Edital_10-2023_Formacao_de_cadastro_reserva.pdf"],
            ["2023", "EDITAL Nº 9 RESULTADO FINAL NA PROVA DISCURSIVA", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Ed_9_2023_Pref_Sao_Cristovao_SEGOV.pdf"],
            ["2023", "COMUNICADO DE EXAMES", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Pref_Sao_Cristovao_-_Comunicado_exame.pdf"],
            ["2023", "EDITAL Nº 8 RESULTADO DAS PROVAS OBJETIVAS", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Ed_8_2023_Pref_Sao_Cristovao_SEGOV_Res_fin_obj_prov_disc_conv_exames_medicos.pdf"],
            ["2023", "EDITAL Nº 7 CRONOGRAMA PREVISTO", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/edital_7-2023.pdf"],
            ["2023", "EDITAL Nº 6 CADASTRO RESERVA", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoGuardaEOutrasAreas/Ed_6_2023_Pref_Sao_Cristovao_SEGOV_Ret_Conv_Exames_Medicos.pdf"],
            ["2023", "EDITAL Nº 5 LOCAIS DAS APLICAÇÕES DAS PROVAS", "https://anexos.saocristovao.se.gov.br/storage/files/4/Guarda%20Municipal/Ed_5_2022_Pref_Sao_Cristovao_SEGOV_local_e_horario.pdf"],
            ["2023", "EDITAL Nº 4 RETIFICAÇÃO", "https://anexos.saocristovao.se.gov.br/storage/files/5/Ed_4_2023_Pref_São_Cristóvão_SEGOV_ret_curso_de_formação.pdf"],
            ["2023", "EDITAL Nº 03.2023 2ª RETIFICAÇÃO DO EDITAL Nº 1", "https://anexos.saocristovao.se.gov.br/storage/files/2/Edital%2003%202023%20-%202%C2%AA%20Retifica%C3%A7%C3%A3o%20do%20Edital%2001%202023%20PMSC.pdf"],
            ["2023", "EDITAL Nº 02.2023 1ª RETIFICAÇÃO DO EDITAL Nº1", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/guarda/Edital_1_retificacao.pdf"],
            ["2023", "EDITAL Nº 1 2 DE FEVEREIRO DE 2023", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/guarda/Edital_1.pdf"],
        ];

        return view('banners.concurso-guarda-outros', compact('editais'));
    }
    public function concursoagentecomunitario() {

        $editais = [
            ["2024", "EDITAL Nº 02.2024 RESULTADO DOS EXAMES MÉDICOS ADMISSIONAIS DO CONCURSO PÚBLICO DA SAÚDE", "https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/Saúde/2024/EDITAL%2002%202024%20RESULTADO%20DOS%20EXAMES%20MÉDICOS%20ADMISSIONAIS%20DO%20CONCURSO%20PÚBLICO%20DA%20SAÚDE.pdf"],
            ["2024", "EDITAL Nº 01.2024 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS E EXAMES MÉDICOS ADMISSIONAIS", "https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/Saúde/2024/EDITAL%2001%202024%20CONVOCAÇÃO%20PARA%20ENTREGA%20DE%20DOCUMENTOS%20E%20EXAMES%20MÉDICOS%20ADMISSIONAIS%20(1).pdf"],
            ["2023", "EDITAL Nº 08.2023 RESULTADO DOS EXAMES MÉDICOS ADMISSIONAIS DO CONCURSO PÚBLICO DA SAÚDE", "https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/Saúde/EDITAL_08_2023_RESULTADO_DOS_EXAMES_MEDICOS_ADMISSIONAIS_DO_CONCURSO_PUBLICO_DA_SAUDE.pdf"],
            ["2023", "EDITAL Nº 07.2023 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS E EXAMES MÉDICOS ADMISSIONAIS", "https://anexos.saocristovao.se.gov.br/storage/files/5/EDITAL_No_07_2023_CONVOCACAO_PARA_ENTREGA_DE_DOCUMENTOS_E_EXAMES_MEDICOS_ADMISSIONAIS.pdf"],
            ["2023", "EDITAL Nº 06.2023 RESULTADO DOS EXAMES MÉDICOS ADMISSIONAIS DO CONCURSO PÚBLICO", "https://anexos.saocristovao.se.gov.br/storage/files/5/EDITAL%2006%202023%20DE%20RESULTADO%20DE%20INSPEÇÃO%20MÉDICA%20DO%20CONCURSO%20PÚBLICO.pdf"],
            ["2023", "EDITAL Nº 05.2023  1ª RETIFICAÇÃO DO EDITAL 04 2023", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursoAgenteComunitarioSaude\EDITAL_05_2023.pdf"],
            ["2023", "EDITAL Nº 04.2023 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS E EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursoAgenteComunitarioSaude\EDITAL_04_2023.pdf"],
            ["2023", "EDITAL Nº 04.2023 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS E EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursoAgenteComunitarioSaude\EDITAL_04_2023.pdf"],
            ["2023", "EDITAL Nº 03.2023 RESULTADO DOS EXAMES MÉDICOS ADMISSIONAIS DO CONCURSO PÚBLICO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursoAgenteComunitarioSaude\EDITAL_03_2023.pdf"],
            ["2023", "EDITAL Nº 02.2023 RELAÇÃO DOS CONVOCADOS QUE NÃO COMPARECERAM", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursoAgenteComunitarioSaude\EDITAL_02_2023.pdf"],
            ["2023", "EDITAL Nº 01.2023 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS E EXAMES SAÚDE", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursoAgenteComunitarioSaude/1a_convocacao_agente_saude_2023.pdf"],
            ["2022", "EDITAL Nº 5 RESULTADO FINAL SAÚDE", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursoAgenteComunitarioSaude/resultado_final._Concurso_agentes.pdf"],
            ["2022", "EDITAL Nº 4 SAÚDE RESULTADO PROVISÓRIO DOS CANDIDATOS QUE SE DECLARARAM COM DEFICIÊNCIA", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursoAgenteComunitarioSaude\Concurso_Agente_comunitario_de_saude_e_agente_de_endemias_-_Sao_Cristovao_4.pdf"],
            ["2022", "EDITAL Nº 3 16 DE SETEMBRO DE 2022 SAÚDE RESULTADO FINAL", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursoAgenteComunitarioSaude\Concurso_Agente_comunitario_de_saude_e_agente_de_endemias_-_Sao_Cristovao_3.pdf"],
            ["2022", "EDITAL Nº 2 AGENTE COMUNITÁRIO E ENDEMIAS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursoAgenteComunitarioSaude\Concurso_Agente_comunitario_de_saude_e_agente_de_endemias_-_Sao_Cristovao_2.pdf"],
            ["2022", "RELAÇÃO PROVISÓRIA DOS CANDIDATOS COM INSCRIÇÃO DEFERIDA - PCD", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursoAgenteComunitarioSaude/PREF_SO_CRISTOVO_REL_PROV_PCD.PDF"],
            ["2022", "NOTA DE ESCLARECIMENTO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursoAgenteComunitarioSaude/NOTA_DE_ESCLARECIMENTO_-_concurso_2022.pdf"],
            ["2022", "EDITAL Nº 1 09 DE JUNHO DE 2022 AGENTE COMUNITÁRIO E ENDEMIAS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursoAgenteComunitarioSaude\Concurso_Agente_comunitario_de_saude_e_agente_de_endemias_-_Sao_Cristovao.pdf"],
        ];

        return view('banners.concurso-agente-comunitario', compact('editais'));
    }
    public function concursosemed2019() {
        $editais = [
            ["2024", "EDITAL Nº 02/2024 RESULTADO DOS EXAMES MÉDICOS ADMISSIONAIS", "https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/SEMED/2024/EDITAL_02_2024_RESULTADO_DOS_EXAMES_MEDICOS_ADMISSIONAIS.pdf"],
            ["2024", "EDITAL Nº 01/2024 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS E EXAMES MÉDICOS ADMISSIONAIS", "https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/SEMED/EDITAL%2001%202024%20CONVOCAÇÃO%20PARA%20ENTREGA%20DE%20DOCUMENTOS%20E%20EXAMES%20MÉDICOS%20ADMISSIONAIS.pdf"],

            ["2023", "EDITAL Nº 11/2023 RESULTADO DOS EXAMES MÉDICOS ADMISSIONAIS", "https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/SEMED/EDITAL_11_2023_DE_RESULTADO_DE_INSPECAO_MEDICA_DO_CONCURSO_PUBLICO.pdf"],
            ["2023", "EDITAL Nº 10/2023 CONVOCAÇÃO PARA ENTREGA DE EXAMES MÉDICOS ADMISSIONAIS DO CONCURSO PÚBLICO PARA PROFESSOR DE EDUCAÇÃO BÁSICA", "https://anexos.saocristovao.se.gov.br/storage/files/45/Concurso/SEMED/EDITAL_10_2023_CONVOCACAO_PARA_ENTREGA_DE_EXAMES_MEDICOS_ADMISSIONAIS_DO_CONCURSO_PUBLICO_PARA_PROFESSOR_DE_EDUCACAO_BASICA.pdf"],
            ["2023", "EDITAL Nº 09 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoSEMED2019/EDITAL_09_2023_DE_RESULTADO_DE_INSPECAO_MEDICA_DO_CONCURSO_PUBLICO.pdf"],
            ["2023", "EDITAL Nº 08 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoSEMED2019/EDITAL_08_2023_DE_RESULTADO_DE_INSPECAO_MEDICA_DO_CONCURSO_PUBLICO.pdf"],
            ["2023", "EDITAL Nº 07 SUSPENSÃO DE CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoSEMED2019/EDITAL_07_2023_CONVOCACAO_CONCURSO_PUBLICO.pdf"],
            ["2023", "EDITAL Nº 06 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/storage/files/2/ConcursoSEMED2019/EDITAL_06_2023_CONVOCACAO_CONCURSO_PUBLICO.pdf"],
            ["2023", "EDITAL Nº 05 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/EDITAL_05_2023_CONVOCACAO_CONCURSO_PUBLICO.pdf"],
            ["2023", "EDITAL Nº 04 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/EDITAL_04_2023_CONVOCACAO_CONCURSO_PUBLICO.pdf"],
            ["2023", "EDITAL Nº 03 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_03_2023.pdf"],
            ["2023", "EDITAL Nº 02 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_02_2023.pdf"],
            ["2023", "EDITAL Nº 02 REVOGAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_02_2023_REVOGACAO.pdf"],
            ["2023", "EDITAL Nº 01 RELAÇÃO DE CONVOCADOS QUE NÃO COMPARECERAM PARA ENTREGA DE DOCUMENTOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_01_2023.pdf"],

            ["2022", "EDITAL Nº 46 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_46_2022.pdf"],
            ["2022", "EDITAL Nº 45 RESULTADO DOS EXAMES", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_45_2022.pdf"],
            ["2022", "EDITAL Nº 44 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_44_2022.pdf"],
            ["2022", "EDITAL Nº 43 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_43_2022.pdf"],
            ["2022", "EDITAL Nº 42 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_42_2022.pdf"],
            ["2022", "EDITAL Nº 41 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_41_2022.pdf"],

            ["2022", "EDITAL Nº 40 RELAÇÃO DE CONVIDADOS QUE NÃO COMPARECERAM PARA ENTREGA DE DOCUMENTOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_40_2022.pdf"],
            ["2022", "EDITAL Nº 39 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_39_2022.pdf"],
            ["2022", "EDITAL Nº 38 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_38_2022.pdf"],
            ["2022", "EDITAL Nº 37 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_37_2022.pdf"],
            ["2022", "EDITAL Nº 36 RELAÇÃO DE CONVOCADOS QUE NÃO COMPARECERAM PARA ENTREGA DE DOCUMENTOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_36_2022.pdf"],
            ["2022", "EDITAL Nº 35 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_35_2022.pdf"],
            ["2022", "EDITAL Nº 34 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_34_2022.pdf"],
            ["2022", "EDITAL Nº 33 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_33_2022.pdf"],
            ["2022", "EDITAL Nº 32 RELAÇÃO DE CONVOCADOS QUE NÃO COMPARECERAM PARA ENTREGA DOS DOCUMENTOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_32_2022.pdf"],
            ["2022", "EDITAL Nº 31 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_31_2022.pdf"],

            ["2022", "EDITAL Nº 30 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_30_2022.pdf"],
            ["2022", "EDITAL Nº 29 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_29_2022.pdf"],
            ["2022", "EDITAL Nº 28 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_28_2022.pdf"],
            ["2022", "EDITAL Nº 27 RELAÇÃO DE CONVOCADOS QUE NÃO COMPARECERAM PARA ENTREGA DE DOCUMENTOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_27_2022.pdf"],
            ["2022", "EDITAL Nº 26 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_26_2022.pdf"],
            ["2022", "EDITAL Nº 25 RELAÇÃO DE CONVOCADOS QUE NÃO OMPARECERAM PARA ENTREGA DE DOCUMENTOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_25_2022.pdf"],
            ["2022", "EDITAL Nº 24 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_24_2022.pdf"],
            ["2022", "EDITAL Nº 23 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_23_2022.pdf"],
            ["2022", "EDITAL Nº 22 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_22_2022.pdf"],
            ["2022", "EDITAL Nº 21 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_21_2022.pdf"],

            ["2022", "EDITAL Nº 20 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_20_2022.pdf"],
            ["2022", "EDITAL Nº 19 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_19_2022.pdf"],
            ["2022", "EDITAL Nº 18 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_18_2022.pdf"],
            ["2022", "EDITAL Nº 17 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_17_2022.pdf"],
            ["2022", "EDITAL Nº 16 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_16_2022.pdf"],
            ["2022", "EDITAL Nº 15 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_15_2022.pdf"],
            ["2022", "EDITAL Nº 14 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_14_2022.pdf"],
            ["2022", "EDITAL Nº 13 RESULTADOS DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_13_2022.pdf"],
            ["2022", "EDITAL Nº 12 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS E EXAMES", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_12_2022.pdf"],
            ["2022", "EDITAL Nº 11 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_11_2022.pdf"],


            ["2022", "EDITAL Nº 10 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_10_2022.pdf"],
            ["2022", "EDITAL Nº 09 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_9_2022.pdf"],
            ["2022", "EDITAL Nº 08 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_8_2022.pdf"],
            ["2022", "EDITAL Nº 07 CONVOCAÇÃO DE CANDIDATOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_7_2022.pdf"],
            ["2022", "EDITAL Nº 06 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_6_2022.pdf"],
            ["2022", "EDITAL Nº 05 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_5_2022.pdf"],
            ["2022", "EDITAL Nº 04 CONVOCAÇÃO DE CANDIDATOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_4_2022.pdf"],
            ["2022", "EDITAL Nº 03 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_3_2022.pdf"],
            ["2022", "EDITAL Nº 02 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_2_2022.pdf"],
            ["2022", "EDITAL Nº 01 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_1_2022.pdf"],

            ["2021", "EDITAL Nº 16 DESISTÊNCIA E CONVOCAÇÃO DE CANDIDATOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_16_2021.pdf"],
            ["2021", "EDITAL Nº 15 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_15_2021.pdf"],
            ["2021", "EDITAL Nº 14 RESULTADO DOS EXAMES MÉDICOS ADMISSIONAIS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_14_2021.pdf"],
            ["2021", "EDITAL Nº 13 RESULTADO DOS EXAMES MÉDICOS ADMISSIONAIS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_13_2021.pdf"],
            ["2021", "EDITAL Nº 12 RESULTADO DOS EXAMES MÉDICOS ADMISSIONAIS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_12_2021.pdf"],
            ["2021", "EDITAL Nº 11 RESULTADO DOS EXAMES MÉDICOS ADMISSIONAIS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_11_2021.pdf"],
            ["2021", "EDITAL Nº 10 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_10_2021.pdf"],
            ["2021", "EDITAL Nº 09 DESISTÊNCIA E CONVOCAÇÃO DE CANDIDATOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_9_2021.pdf"],
            ["2021", "EDITAL Nº 08 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_8_2021.pdf"],
            ["2021", "EDITAL Nº 07 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_7_2021.pdf"],
            ["2021", "EDITAL Nº 06 RESULTADO DOS EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_6_2021.pdf"],
            ["2021", "EDITAL Nº 05 CONVOCAÇÃO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_5_2021.pdf"],
            ["2021", "EDITAL Nº 04 RESULTADO AMPLA CONCORRÊNCIA 1º AO 5 º ANO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_4_2021.pdf"],
            ["2021", "EDITAL Nº 03 RESULTADO DOS EXAMES MÉDICO", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_3_2021.pdf"],
            ["2021", "EDITAL Nº 02 CONVOCAÇÃO PARA ENTREGA DE EXAMES", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_2_2021.pdf"],
            ["2021", "EDITAL Nº 01 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS E EXAMES MÉDICOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_1_2021.pdf"],

            ["2020", "EDITAL Nº 5 RESULTADO DOS EXAMES MÉDICOS ADMISSIONAIS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_5_2020.pdf"],
            ["2020", "EDITAL Nº 4 CONVOCAÇÃO PARA EXAMES MÉDICOS ADMISSIONAIS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_4_2020.pdf"],
            ["2020", "EDITAL Nº 3", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_3_2020.pdf"],
            ["2020", "EDITAL Nº 2 DESISTÊNCIA E CONVOCAÇÃO DE CANDIDATOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_2_2020.pdf"],
            ["2020", "EDITAL Nº 1 CONVOCAÇÃO PARA ENTREGA DE DOCUMENTOS", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_1_2020.pdf"],

            ["2019", "EDITAL Nº 1 CARGO DE PROFESSOR DE EDUCAÇÃO BÁSICA", "https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/concursos/semed2019/EDITAL_1_2019.pdf"],
        ];

        return view('banners.concurso-semed-2019', compact('editais'));
    }
    public function pss() {
        return view('banners.pss');
    }
    public function psssemed2023() {
        return view('banners.pss-semed-2023');
    }
    public function pssmotorista() {
        return view('banners.pss-motorista');
    }
    public function psssaude() {
        return view('banners.pss-saude');
    }
    public function psssemed2021() {
        return view('banners.pss-semed-2021');
    }
    public function pssassistenciasocial() {
        return view('banners.pss-assistencia-social');
    }
    public function pssbolsistas() {
        return view('banners.pss-bolsistas');
    }
    public function leipaulogustavo() {
        return view('banners.lei-paulo-gustavo');
    }
    public function credenciamentoprofissionaiscultura() {
        return view('banners.credenciamento-profissionais-cultura');
    }
    public function saladoempreendedor() {
        return view('banners.sala-do-empreendedor');
    }
    public function editalosc() {
        return view('banners.edital-osc');
    }
    public function estagio() {
        return view('banners.estagio');
    }
    public function paa() {
        return view('banners.paa');
    }
    public function hino() {
        return view('banners.hino');
    }
    public function guardapet() {
        return view('banners.guarda-pet');
    }

    public function projetoreconhecendo() {
        return view('banners.projeto-reconhecendo');
    }
    public function loappa() {
        return view('banners.loa-ppa');
    }
    public function seminario() {
        return view('banners.seminario');
    }
    public function planomunicipalsaude() {
        return view('banners.plano-municipal-saude');
    }
}
