<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_amos', language 'pt_br', branch 'MOODLE_22_STABLE'
 *
 * @package   local_amos
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p> AMOS significa Automated Manipulation Of Strings (Manipulação automática de Strings). AMOS é o repositório central de strings do Moodle e seu histórico. Ele controla a adição de strings em Inglês para o código do Moodle, reúne traduções, manipula tarefas de tradução mais comuns e gera pacotes de idiomas a serem instalados nos servidores do Moodle. </p> <p> Veja <a href="http://docs.moodle.org/en/AMOS"> documentação AMOS</a> para mais informações. </ p>';
$string['amos'] = 'AMOS - Ferramenta de tradução do Moodle';
$string['amos:commit'] = 'Transfere as strings gradualmente inseridas em uma área de armazenamento temporário para o repositório principal.';
$string['amos:execute'] = 'Executa determinado script AMOS';
$string['amos:importfile'] = 'Importa strings de um arquivo enviado';
$string['amos:manage'] = 'Portal de administração do AMOS';
$string['amos:stage'] = 'Use a ferramenta de tradução do AMOS e coloque as strings na área de armazenamento temporário (Stage)';
$string['amos:stash'] = 'Transferir as strings da área de armazenamento temporário (Stage) para a área de validação (Stash)';
$string['amos:usegoogle'] = 'Use o serviço de tradução do Google';
$string['commitbutton'] = 'Efetivar';
$string['commitmessage'] = 'Mensagem de efetivação';
$string['commitstage'] = 'Efetiva as strings colocadas na área de avaliação (staged).';
$string['commitstage_help'] = 'Armazenar permanentemente no repositório AMOS todas as traduções enviadas para avaliação. A área de armazenamento temporário (Stage) é automaticamente limpa e reiniciada antes da transação ser confirmada. Apenas strings passíveis de efetivação são armazenados. Isso significa que apenas as traduções abaixo destacadas em verde serão armazenadas. A área de armazenamento temporária - Stage - é apagada após a efetivação.';
$string['committableall'] = 'Todas as linguagens';
$string['committablenone'] = 'Nenhuma linguagem permitida - por favor contate o administrador AMOS.';
$string['componentsall'] = 'Todos';
$string['componentsnone'] = 'Nenhum';
$string['componentsstandard'] = 'Padrão';
$string['confirmaction'] = 'Isto não pode ser desfeito. Você tem certeza que quer fazer isto?';
$string['contribaccept'] = 'Aceitar';
$string['contribactions'] = 'Ações de tradução contribuidas';
$string['contribactions_help'] = 'Dependendo dos seus direitos e do fluxo de trabalho de contribuição, você pode ter algumas das seguintes ações disponíveis:

* Aplicar - copiar a tradução que você contribuiu para o sua área de armazenamento temporário - Stage, sem modificar o registro de contribuição

* Atribuir a mim - definir-se como a pessoa a quem será atribuida a contribuição, sendo esta a pessoa responsável pela a revisão e integração

* Renuncia - definir que a contribuição não será atribuída a ninguém * Começar a revisão - atribuir a nova contribuição para si mesmo, definir o seu estado como "Em revisão" e copiar a tradução em sua área de armazenamento temporário (Stage)

* Aceitar - marcar a contribuição como aceita

* Rejeitar - marcar a contribuição como rejeitada, por favor, descreva as razões da recusa em um comentário.

O contribuinte é informado por e-mail sempre que há mudança de estado em sua contribuição.';
$string['contribapply'] = 'Aplicar';
$string['contribassignee'] = 'Destinatário';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Atribuir a mim';
$string['contribauthor'] = 'Autor';
$string['contribclosedno'] = 'Ocultar contribuições resolvidas';
$string['contribclosedyes'] = 'Mostrar contribuições resolvidas';
$string['contribcomponents'] = 'Componentes';
$string['contribid'] = 'ID';
$string['contribincomingnone'] = 'Não existem contribuições recebidas';
$string['contribincomingsome'] = 'Contribuições recebidas ({$a})';
$string['contriblanguage'] = 'Idioma';
$string['contribreject'] = 'Rejeitar';
$string['contribresign'] = 'Retirar';
$string['contribstartreview'] = 'Começar revisão';
$string['contribstatus'] = 'Status';
$string['contribstatus0'] = 'Novo';
$string['contribstatus10'] = 'Em revisão';
$string['contribstatus20'] = 'Rejeitado';
$string['contribstatus30'] = 'Aceito';
$string['contribsubject'] = 'Assunto';
$string['contributions'] = 'Contribuições';
$string['diffaction'] = 'Se uma diferença é detectada';
$string['emailcontributionsubject'] = '[contribuição no AMOS] Nova tradução enviada';
