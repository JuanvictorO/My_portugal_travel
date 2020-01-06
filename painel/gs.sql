-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jun-2019 às 21:48
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs`
--
CREATE DATABASE IF NOT EXISTS `gs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gs`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bem_estar`
--

CREATE TABLE `bem_estar` (
  `id_bem_estar` int(11) UNSIGNED NOT NULL,
  `titulo_bem_estar` varchar(255) NOT NULL,
  `descricao_bem_estar` text NOT NULL,
  `conteudo_bem_estar` text NOT NULL,
  `data_bem_estar` datetime NOT NULL,
  `ativo_bem_estar` tinyint(1) NOT NULL,
  `cliques_bem_estar` int(11) UNSIGNED DEFAULT '0',
  `fonte_bem_estar` varchar(55) DEFAULT NULL,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bem_estar`
--

INSERT INTO `bem_estar` (`id_bem_estar`, `titulo_bem_estar`, `descricao_bem_estar`, `conteudo_bem_estar`, `data_bem_estar`, `ativo_bem_estar`, `cliques_bem_estar`, `fonte_bem_estar`, `user_id`) VALUES
(11, 'Oms apoia brasil em eventual taxação de bebidas adoçadas', '<p>A Organização Pan-Americana da Saúde/Organização Mundial da Saúde (OPAS/OMS) reuniu nesta semana pesquisadores internacionais e nacionais para apoiar o Brasil na avaliação do impacto econômico da adoção de medidas regulatórias como rotulagem nutricional e taxação de bebidas adoçadas. </p>', '<p>A Organização Pan-Americana da Saúde/Organização Mundial da Saúde (OPAS/OMS) reuniu nesta semana pesquisadores internacionais e nacionais para apoiar o Brasil na avaliação do impacto econômico da adoção de medidas regulatórias como rotulagem nutricional e taxação de bebidas adoçadas. Essas duas estratégias, aliadas à regulação da publicidade de alimentos e da venda de produtos não saudáveis nas cantinas escolares, são as ações mais efetivas para frear o crescimento da obesidade – um problema que afeta grande parte do mundo, inclusive o Brasil.&nbsp;</p><p><br>Apesar dos importantes avanços alcançados nos últimos anos, o panorama epidemiológico nutricional brasileiro ainda requer ações imediatas e efetivas. Sabe-se que hoje o país chega a ter metade de sua população adulta (54%) e um terço das crianças (34%) com excesso de peso. Por isso, os especialistas dizem que é preciso unir esforços. Isso inclui mudar os ambientes alimentares.</p><p><br>Globalmente, a obesidade quase triplicou desde 1975. Em 2016, mais de 1,9 bilhão de adultos, de 18 anos ou mais, apresentavam excesso de peso. Desses, mais de 650 milhões eram obesos. Em relação aos mais jovens, 41 milhões de crianças menores de 5 anos estavam acima do peso ou obesas, em 2016. O mesmo ocorreu com 340 milhões de crianças e adolescentes com idade entre 5 e 19 anos.</p>', '2019-05-30 16:09:47', 1, 0, 'http://www.blog.saude.gov.br', 1),
(12, 'E sua pressão, como está?', '<p>Silenciosa, a hipertensão é uma doença que pode e deve ser controlada com a ajuda de uma boa alimentação, hábitos saudáveis e, em alguns casos, com o auxílio de medicamento. Se não controlada, a pressão alta pode causar derrame cerebral, conhecido como AVC, infarto agudo do miocárdio e doença renal crônica. </p>', '<p>Silenciosa, a hipertensão é uma doença que pode e deve ser controlada com a ajuda de uma boa alimentação, hábitos saudáveis e, em alguns casos, com o auxílio de medicamento.&nbsp;<br>Se não controlada, a pressão alta pode causar derrame cerebral, conhecido como AVC, infarto agudo do miocárdio e doença renal crônica.&nbsp;<br>Sintomas e exames&nbsp;<br>Embora a hipertensão seja uma doença silenciosa, ou seja, muitas vezes a pessoa nem sabe que está com a pressão alta, é preciso prestar atenção em alguns sinais possíveis dados pelo organismo como: tontura, falta de ar, palpitações, dor de cabeça frequente e alteração na visão.&nbsp;<br>O que causa?&nbsp;<br>Hábitos não saudáveis, como o consumo exagerado de sal é um dos fatores que podem levar à doença. Além disso, obesidade, histórico familiar, estresse e envelhecimento também estão associados à hipertensão.&nbsp;<br>Tratamento&nbsp;<br>Embora não tenha cura, a doença pode ser controlada e isso não significa o uso contínuo de medicamentos. Porém, é imprescindível adotar um estilo de vida mais saudável, com pouca ou nenhuma ingestão de alimentos processados, redução de sal, atividade física regular, nada de cigarro e diminuir consideravelmente o consumo de álcool. </p>', '2019-05-31 11:15:06', 1, 0, 'http://www.riocomsaude.rj.gov.br', 1),
(13, 'A importância do teste do olhinho', '<p>Grande parte dos casos de cegueira tem seu início na infância. A estimativa hoje é de que haja no mundo cerca de um milhão e meio de crianças cegas. Por isso, os cuidados com a visão do bebê devem mobilizar a família.</p>', '<p>Grande parte dos casos de cegueira tem seu início na infância. A estimativa hoje é de que haja no mundo cerca de um milhão e meio de crianças cegas. Por isso, os cuidados com a visão do bebê devem mobilizar a família.&nbsp;</p><p><br>A visão é uma função sensorial complexa e necessita de estímulos, considerando que o desenvolvimento global da criança se processa de forma integrada e harmônica.<br>O amadurecimento das funções sensoriais, psicológicas e motoras está interligado, e a visão funciona como desencadeadora do desenvolvimento de várias áreas como o controle da coluna cervical, a linguagem e a afetividade.</p><p><br>Reflexo vermelho - A catarata congêntia – quando o cristalino fica opaco –, é uma das principais causas de cegueira evitável. Antes de deixar o hospital, o bebê deve fazer o “teste do olhinho”. Neste teste, um aparelho que emite uma luz vermelha será aproximado de cada um dos olhos da criança. A visão está normal quando os dois olhos apresentam um reflexo vermelho brilhante. Quando há algum problema, a luz não atinge a parte de trás do olho e não temos a visão do olho vermelho. Além de detectar a catarata congênita, o reflexo vermelho também permite rastrear doenças oculares graves como o retinoblastoma e o glaucoma congênito.</p><p><br>O exame do olhinho deve ser incluído na avaliação da criança, desde o nascimento até os três anos de idade. Solicite o “teste do reflexo vermelho” também na primeira consulta do bebê depois de deixar o hospital, e novamente nas consultas do segundo, sexto, nono e décimo segundo mês de vida. Depois do primeiro ano até o terceiro aniversário é suficiente fazer o exame a cada seis meses. Você também pode ajudar em casa, observando o comportamento do seu bebê. Repare se ele acompanha os objetos e se ele não esbarra muito nos móveis. A visão é muito importante para a qualidade de vida da criança, e a detecção precoce é o melhor caminho para o sucesso de qualquer tratamento.</p>', '2019-05-31 11:39:31', 1, 1, '', 1),
(14, 'A importância de uma alimentação saudável e equilibrada', '<p>Se alimentar de forma saudável e equilibrada é essencial para garantir qualidade de vida. Isso porque, além de fornecer energia e bem-estar geral, através de uma boa alimentação é possível prevenir e combater doenças, manter o peso corporal saudável e ter um bom desenvolvimento físico.</p>', '<p>Se alimentar de forma saudável e equilibrada é essencial para garantir qualidade de vida. Isso porque, além de fornecer energia e bem-estar geral, através de uma boa alimentação é possível prevenir e combater doenças, manter o peso corporal saudável e ter um bom desenvolvimento físico.</p><p>Um cardápio balanceado ajuda o sistema imunológico; melhora o humor e a memória; reduz o cansaço e o estresse; aumenta a qualidade do sono; previne o envelhecimento precoce da pele; melhora o sistema digestivo; e fornece disposição e mais energia para as atividades diárias.</p><p>Uma alimentação saudável requer quantidades certas, sem exageros e também sem exclusões e alimentos que forneçam ao corpo: proteínas, carboidratos, gorduras, fibras, cálcio vitaminas e outros minerais. A diversidade de grãos, verduras, legumes e frutas deve fazer parte das refeições do dia a dia. É importante também evitar o consumo de alimentos industrializados. Na maioria das vezes, eles são compostos de substâncias que prejudicam o nosso organismo, como corantes, conservantes, sódio e açúcar em grandes quantidades.</p><p>Outras dicas importantes são: ter horários para se alimentar; substituir biscoitos e bolachas por frutas; optar por farinha integral, no lugar da branca, valendo para o consumo de bolos, pães e massas; incluir gorduras saudáveis como coco, abacate, manteiga ou ghee, castanhas, cacau e ômega 3; e evitar frituras.</p><p><br></p><p><strong>Confira mais algumas dicas para uma alimentação saudável!</strong></p><p><br></p><p>1 - Ao invés do açúcar refinado, utilize xilitol, açúcar de coco ou melado;</p><p>2 - Evite refrigerantes e sucos industrializados;</p><p>3 - Prepare refeições com menos sal;</p><p>4 - Coma 1 a 2 porções de frutas por dia;</p><p>5 - Beba 2 litros de água diariamente;</p><p>6 - Não pule suas refeições;</p><p>7 - Evite o consumo de embutidos e queijos amarelos;</p><p>8 - Não consuma líquidos durante as refeições;</p><p>9 - Evite bebidas alcoólicas;</p>', '2019-06-03 16:05:49', 0, 2, '', 1),
(15, 'Cinco motivos para lembrar de tomar água', '<p>Quem nunca ouviu que precisamos ingerir pelo menos dois litros de água por dia? A água representa cerca de 70% do peso total do corpo do ser humano e é essencial para que todas as funções do nosso organismo sejam realizadas adequadamente.</p>', '<p>Quem nunca ouviu que precisamos ingerir pelo menos dois litros de água por dia? A água representa cerca de 70% do peso total do corpo do ser humano e é essencial para que todas as funções do nosso organismo sejam realizadas adequadamente.</p><p>De acordo com inúmeras pesquisas, ao longo de 24 horas perdemos em média dois litros de água através da transpiração, urina, respiração e outras funções vitais. Por isso, em dias mais quentes ou durante a prática de exercícios físicos, quando transpiramos muito, é necessário realizar a reposição.</p><p>Para se ter ideia da importância da água no nosso organismo, indivíduos desidratados apresentam menor volume de sangue que o normal, o que acaba atrapalhando o funcionamento do coração. Além disso, a falta de água pode causar fraqueza, tontura, dor de cabeça, fadiga e, se for muito prolongada, levar à morte.</p><p>Uma dica para se manter bem hidratado é ter sempre uma garrafa de água por perto, pois a reposição de líquidos deve ser frequente e independente da sensação de sede. Para aqueles que acham que dois litros é demais, a boa notícia é que a ingestão diária pode ser suprida com outras fontes, como sucos, água de coco, leite, frutas, chás e sopas. Confira outros motivos para não deixar de beber água.</p><p><br></p><p><strong>1- Regula a temperatura corporal:</strong> durante a prática de exercícios físicos ou quando o clima está muito quente, a água do organismo é liberada pela transpiração para regular a temperatura e evitar que nosso organismo esquente demais ou sofra alterações térmicas bruscas.</p><p><strong>2 - Desintoxica o corpo:</strong> a água ajuda na prevenção e no tratamento de infecção urinária. Além disso, junto as fibras alimentares, a água ajuda a formar e hidratar o bolo fecal, evitando que ele fique ressecado e, como consequência, cause constipação intestinal. Também auxilia na respiração, pois dilui o muco, o que facilita a expectoração de resíduos pulmonares.</p><p><strong>3 - Absorção e transporte de nutrientes:</strong> a água auxilia na absorção e transporte de nutrientes e glicose.</p><p><strong>4 - Rins livre de pedras:</strong> beber muita água é uma ótima estratégia para prevenir <a href=\"https://saude.abril.com.br/medicina/pedras-nos-rins-causas-sintomas-e-tratamentos/\">os&nbsp;</a>cálculos renais. Quanto maior a fluidez do líquido filtrado pelos rins, menor a probabilidade de a urina concentrar partículas sólidas que, agrupadas, dão origem às pedrinhas.</p><p><strong>5 - Deixa a pela mais bonita:</strong> a água promove a revitalização das células através de um processo de hidratação. Isso faz com que a pele fique mais bonita e descame menos.</p>', '2019-06-03 16:06:33', 0, 1, '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `bem_estar_img`
--

CREATE TABLE `bem_estar_img` (
  `id_bem_estar_img` int(11) UNSIGNED NOT NULL,
  `caminho_bem_estar_img` varchar(55) NOT NULL,
  `descricao_bem_estar_img` varchar(55) DEFAULT NULL,
  `tipo_bem_estar_img` tinyint(2) NOT NULL,
  `bem_estar_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bem_estar_img`
--

INSERT INTO `bem_estar_img` (`id_bem_estar_img`, `caminho_bem_estar_img`, `descricao_bem_estar_img`, `tipo_bem_estar_img`, `bem_estar_id`) VALUES
(14, 'ac79c341641e7fef23463f2f2d8695e9.jpg', '', 0, 13),
(15, 'fb5f3c7ad9f2a095fa744f8cc7f6517c.jpg', '', 0, 12),
(16, '112036d3ebc903a14bf6d04efb237375.jpg', '', 0, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id_destaque` int(11) UNSIGNED NOT NULL,
  `titulo_destaque` varchar(55) NOT NULL,
  `data_destaque` datetime NOT NULL,
  `ativo_destaque` tinyint(1) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques_img`
--

CREATE TABLE `destaques_img` (
  `id_destaque_img` int(11) UNSIGNED NOT NULL,
  `caminho_destaque_img` varchar(55) NOT NULL,
  `destaque_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'Editor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(55) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) UNSIGNED NOT NULL,
  `titulo_noticia` varchar(255) NOT NULL,
  `descricao_noticia` varchar(150) NOT NULL,
  `conteudo_noticia` text NOT NULL,
  `data_noticia` datetime NOT NULL,
  `ativo_noticia` tinyint(1) NOT NULL,
  `cliques_noticia` int(11) UNSIGNED DEFAULT '0',
  `fonte_noticia` varchar(55) DEFAULT NULL,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo_noticia`, `descricao_noticia`, `conteudo_noticia`, `data_noticia`, `ativo_noticia`, `cliques_noticia`, `fonte_noticia`, `user_id`) VALUES
(29, 'Lançamento do aplicativo Plano GS', 'Agora você pode contar com um aplicativo prático, rápido e seguro para ter sempre em mãos o que de melhor podemos lhe oferecer. ', '<p>Agora você pode contar com um aplicativo prático, rápido e seguro para ter sempre em mãos o que de melhor podemos lhe oferecer.<br>O GS acaba de lançar seu aplicativo para Android.</p><p><br>Nele você pode acessar:<br><strong>&nbsp;- CARTEIRINHA VIRTUAL&nbsp;</strong><br>Uma cópia digital da sua carteirinha sempre em mãos.<br><strong>- GUIA MÉDICO GS SAÚDE&nbsp;</strong><br>Consulta de rede de atendimento, hospitais, pronto-socorros, clínicas e laboratórios com a possibilidade de realizar ligações instantâneas.<br><strong>- SEGUNDA VIA DE BOLETOS&nbsp;</strong><br>Consulta rápida e fácil da segunda via de seu boleto<br><strong>- EXTRATO FINANCEIRO</strong><br>Consulte o estrato financeiro do seu plano sempre que precisar.<br><strong>- INFORMAÇÕES&nbsp;</strong><br>Suas principais informações como: dados cadastrais, carências, plano contratado e muito mais.<br><strong>- OUVIDORIA&nbsp;</strong><br>Elogios, sugestões e reclamações de forma rápida e direta.<br><br>O aplicativo GS já está disponível para Android no Google Store.<br>Para baixar acesse o link:<br>https://play.google.com/store/apps/details?id=br.com.spsnet.gsglobal<br><br>O aplicativo para IOS estará disponível em breve no APP Store.</p>', '2019-05-31 11:18:02', 1, 2, '', 1),
(30, 'Se tem chuva, aumente sua atenção com o aedes', 'O Ministério da Saúde convoca a população brasileira a continuar, de forma permanente, com a mobilização nacional pelo combate ao Aedes Aegypti.', '<p>O Ministério da Saúde convoca a população brasileira a continuar, de forma permanente, com a mobilização nacional pelo combate ao Aedes Aegypti, mosquito transmissor da dengue, zika e chikungunya, doenças que podem gerar outras enfermidades, como microcefalia e Guillain-Barré.&nbsp;</p><p><br>O período do verão é o mais propício à proliferação do mosquito Aedes aegypti, por causa das chuvas, e consequentemente é a época de maior risco de infecção por essas doenças. No entanto, a recomendação é não descuidar nenhum dia do ano e manter todas as posturas possíveis em ação para prevenir focos em qualquer época do ano.<br>Por isso, a população deve ficar atenta e redobrar os cuidados para eliminar possíveis criadouros do mosquito. Essa é a única forma de prevenção.</p><p><br>IMPORTANTÍSSIMO: A dificuldade do controle do mosquito no Brasil é a não uniformidade do cumprimento das diretrizes do programa de controle da dengue, zika e chikungunya em todos os municípios, além da incapacidade da vigilância epidemiológica e entomológica em eliminar todos os focos (criadouros) possíveis existentes em todas as regiões de todas as cidades brasileiras. Por isso, a participação social é fundamental. É necessário que cada um faça sua parte, eliminando todos os possíveis focos de proliferação do mosquito.</p>', '2019-05-31 11:29:19', 1, 0, 'http://portalms.saude.gov.br', 1),
(31, 'Ratera - reunião de acompanhamento terapêutico', 'A programação da RATERA - Reunião de Apoio Terapêutico de 2019 está definida.  Serão três palestras nos meses de abril, julho e outubro.', '<p>A programação da RATERA - Reunião de Apoio Terapêutico de 2019 está definida.<br>Serão três palestras nos meses de abril, julho e outubro, sempre às quintas-feiras.<br>A primeira será dia 25 de abril com o tema Tabagismo - Danos ao sistema cardiorrespiratório.</p><p><br>A RATERA é uma das ações de responsabilidade social do Plano GS e do Hospital São Lucas que oferece palestras em diversos temas sobre cuidados com a saúde.<br>Voltada principalmente para portadores de doenças cardiovasculares operados pelo Serviço de Cirurgia Cardíaca do São Lucas, a Ratera é aberta à comunidade.<br><strong><br>QUINTAS - FEIRAS, ÀS 14h</strong><br>LOCAL: Auditório do Hospital São Lucas (Av. Antônio Mario de Azevedo, 715 Duas Pedras, Nova Friburgo - RJ)<br>INFORMAÇÕES: (22) 2525-9955<br><br>CONFIRA A PROGRAMAÇÃO DE 2019<br><strong><br>25 de abril</strong><br>Tabagismo<br>Danos ao sistema cardiorrespiratório<br>Drª. Ana Acácia Lima - Pneumologista<br>Psicóloga Virgínia Pimenta<br><br><strong>25 de julho</strong><br>Cuidando do Coração<br>Drº. Alexandre Deslandes - Cirurgião Cardíaco<br><br><strong>24 de outubro</strong><br>Sinais de descompensação de doenças cardíacas<br>Drº. Fernando Palladino - Clínico Médico</p>', '2019-05-31 11:35:03', 1, 0, '', 1),
(32, 'Vigilância sanitária do estado alerta para os cuidados na compra de alimentos', ' Carnes, frios, laticínios, legumes e verduras são itens que requerem mais atenção na higiene e conservação.', '<p>Carnes, frios, laticínios, legumes e verduras são itens que requerem mais atenção na higiene e conservação.</p><p>Observar o aspecto do produto e a forma como está sendo oferecido ao público está entre os primeiros cuidados.<br>No mercado devemos observar a área de exposição dos produtos, se estão sem a presença de insetos, além de balanças, cestas e até carrinhos de compras. Todos estes locais devem estar higienizados e os funcionários devem se apresentar com uniformes limpos e proteção no cabelo. Visto isso, agora o consumidor pode se atentar durante a escolha do produto – comenta Eliane Cardozo, Superintendente de Vigilância Sanitária da Secretaria de Estado de Saúde.<br>Frutas, legumes e verduras devem ter um bom aspecto, os frios e laticínios, leite, queijos, manteigas e iogurtes devem estar estocados em balcões ou vitrines devidamente refrigeradas, conforme orientação descrita na embalagem, além de ter um carimbo de inspeção dos órgãos competentes. Alimentos fatiados, embalados e rotulados devem ter indicação de origem, peso, data de fracionamento e de validade.<br>Ao comprar carnes em geral, é preciso se atentar à textura, cor e odor do alimento. Se houver uma camada de gelo no fundo ou em volta da embalagem, por exemplo, indica que o alimento já foi descongelado e recongelado.</p><p><br>Essa alteração de temperatura desequilibra a composição do alimento e ajuda na proliferação de bactérias. Alimentos mal conservados podem provocar desde um mal-estar, diarreia até infecção alimentar – explica Eliane.<br>Outras dicas que também podem ser colocadas em prática para garantir sua saúde:<br>• Não adquira alimentos com embalagens danificadas, estufadas, amassadas ou enferrujadas.<br>• Não deixe alimentos refrigerados em locais inadequados (cestas, carrinhos, prateleiras etc.) por um longo período de tempo.<br>• Produtos como massas e pães de queijo, por exemplo, podem apresentar crescimento de fungo, bem como ficarem esfarelados.<br>• O sorvete é um produto aerado. Se houver compactação da massa ou cristalizar ao fundo é sinal que houve descongelamento;<br>A Secretaria de Estado de Saúde alerta a população para também ficar atenta a essas características sensoriais, validade do produto e, caso encontre condições inadequadas, entre em contato com a Vigilância Sanitária do seu Município.<br>Veja o contato do órgão fiscalizador do seu município neste link:<br>https://www.saude.rj.gov.br/vigilancia-sanitaria/denuncia</p>', '2019-05-31 15:48:51', 1, 0, 'https://www.saude.rj.gov.br', 1),
(33, 'Hospital São Lucas conta com novo e moderno aparelho para tratamento de cálculo renal', 'Além da resolução de casos complexos, equipamento oferece conforto e mais segurança aos pacientes ', '<p>O Hospital São Lucas deu mais um importante passo para a melhoria no atendimento dos seus pacientes. Referência em Nova Friburgo e toda a região, o hospital adquiriu um novo e moderno aparelho para o tratamento de cálculos renais. Além da resolução de casos complexos, o equipamento oferece conforto e mais segurança aos pacientes.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Chamado de Ureteroscopia Flexível com Laser, o procedimento consiste em passar uma microcâmera, chamada ureteroscópio flexível, pela uretra, atingindo a bexiga e seguindo em direção ao rim até a identificação dos cálculos. Uma vez localizada, as pedras são fragmentadas por laser e os fragmentos retirados com uma cesta especial.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;De acordo com o urologista Rodrigo Barros, a técnica representa um enorme avanço em relação aos tratamentos cirúrgicos invasivos, como a cirurgia aberta e a Nefrolitotripsia Renal Percutânea, feita através de uma pequena incisão na pele de mais ou menos um centímetro. “O uso do equipamento flexível permite alcançar locais do rim de difícil acesso e, com a utilização do laser, fragmentar os cálculos sem a necessidade de extração, reduzindo o traumatismo para os pacientes. Não ocorrem incisões, reduzindo a dor no pós-operatório e, consequentemente, acelerando a recuperação”, explicou ele, acrescentando que, geralmente, o paciente pode ir para casa após 24h.</p><p>Ainda segundo o médico, a Ureteroscopia Flexível com Laser também é uma alternativa para tratar cálculos que não são visíveis no raio-X e que não podem ser tratados com a Litotripsia Extra-corpórea, que é o tratamento por ondas de choque feito sem cirurgia. O chefe do serviço de urologia do hospital, Dr. Antônio Noé, destacou, além dos equipamentos de última geração, a equipe de urologistas especializados do São Lucas. “Desta forma, o Hospital São Lucas está habilitado a realizar procedimentos endourológicos eletivos e de emergência”, afirmou.</p><p>&nbsp;Para o diretor do Hospital São Lucas, Jose Carlos Verbicário Dantas dos Santos Junior, o uso de tecnologias, como a Ureteroscopia Flexível com Laser, traz melhorias para a população. “As inovações tecnológicas representam inúmeros benefícios para a área médica e também para os pacientes. Por isso o Hospital São Lucas investe constantemente na aquisição de modernos equipamentos e no aprimoramento de suas instalações. Nosso objetivo é oferecer para a população serviços da mais alta qualidade e segurança!’’, concluiu.</p><p>O Hospital São Lucas possui oito andares e conta com Centro Cirúrgico, Unidade de Cardiologia (Hemodinâmica e Cirurgia Cardíaca), Maternidade, Laboratório, Litotripsia, Radiologia Geral, Tomografia Computadorizada, Serviço de Fisioterapia, Endoscopia Digestiva, Pediatria, Pronto Socorro e Ortopedia 24h. O hospital fica localizado na Avenida Antônio Mário de Azevedo, 715, Duas Pedras, em Nova Friburgo. Mais informações podem ser obtidas pelo telefone: (22) 2525-9955.</p><p><br></p><p>Foto 1: Com o &nbsp;ureteroscópio flexível é possível alcançar locais do rim de difícil acesso e, com o laser, fragmentar os cálculos sem a necessidade de extração</p><p>Foto 2: Carrinho Stone Light é um dos aparelhos utilizados durante procedimento para a retirada de cálculo renal</p>', '2019-06-03 16:02:56', 0, 0, '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias_img`
--

CREATE TABLE `noticias_img` (
  `id_noticia_img` int(11) UNSIGNED NOT NULL,
  `caminho_noticia_img` varchar(55) NOT NULL,
  `descricao_noticia_img` varchar(55) DEFAULT NULL,
  `noticia_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias_img`
--

INSERT INTO `noticias_img` (`id_noticia_img`, `caminho_noticia_img`, `descricao_noticia_img`, `noticia_id`) VALUES
(32, '6c530cab2c56a6c59efd2adfd3aa5bc8.jpg', '', 29),
(33, '5911d52e60a51c0ba3b88dd916282edc.jpg', '', 30),
(34, '95ca7adf22e4bdfc59af2b5905d4a967.jpg', '', 31),
(35, 'e3cd544e877477ee6994f0833ab45990.jpg', '', 32);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '::1', 'TI Groove', '$2y$12$unTIMn9J8/Qq4G4g4kI9ceg8FMUnoKl5Y1/AgfCnr7sstD6iytytS', 'matheus.castro@groove.com.br', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1555605199, 1559652922, 1, '', '', '', '(21)9-9855-1629'),
(4, '::1', 'TI GS', '$2y$12$T3kHyp8TOlpyE6sgmYmXxuCdpol5duez7AqgxLyXV4CBaZW7n5LQS', 'ti@planogs.com.br', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1559243786, 1559561243, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `group_id` mediumint(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(4, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bem_estar`
--
ALTER TABLE `bem_estar`
  ADD PRIMARY KEY (`id_bem_estar`),
  ADD KEY `fk_user_bem_estar_id` (`user_id`);

--
-- Indexes for table `bem_estar_img`
--
ALTER TABLE `bem_estar_img`
  ADD PRIMARY KEY (`id_bem_estar_img`),
  ADD KEY `fk_bem_estar_id` (`bem_estar_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id_destaque`),
  ADD KEY `fk_user_destaque_id` (`user_id`);

--
-- Indexes for table `destaques_img`
--
ALTER TABLE `destaques_img`
  ADD PRIMARY KEY (`id_destaque_img`),
  ADD KEY `fk_destaque_id` (`destaque_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `fk_user_noticias_id` (`user_id`);

--
-- Indexes for table `noticias_img`
--
ALTER TABLE `noticias_img`
  ADD PRIMARY KEY (`id_noticia_img`),
  ADD KEY `fk_noticia_id` (`noticia_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_group_user_id` (`user_id`),
  ADD KEY `fk_user_group_group_id` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bem_estar`
--
ALTER TABLE `bem_estar`
  MODIFY `id_bem_estar` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bem_estar_img`
--
ALTER TABLE `bem_estar_img`
  MODIFY `id_bem_estar_img` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id_destaque` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destaques_img`
--
ALTER TABLE `destaques_img`
  MODIFY `id_destaque_img` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `noticias_img`
--
ALTER TABLE `noticias_img`
  MODIFY `id_noticia_img` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `bem_estar`
--
ALTER TABLE `bem_estar`
  ADD CONSTRAINT `fk_user_bem_estar_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `bem_estar_img`
--
ALTER TABLE `bem_estar_img`
  ADD CONSTRAINT `fk_bem_estar_id` FOREIGN KEY (`bem_estar_id`) REFERENCES `bem_estar` (`id_bem_estar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `destaques`
--
ALTER TABLE `destaques`
  ADD CONSTRAINT `fk_user_destaque_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `destaques_img`
--
ALTER TABLE `destaques_img`
  ADD CONSTRAINT `fk_destaque_id` FOREIGN KEY (`destaque_id`) REFERENCES `destaques` (`id_destaque`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `fk_user_noticias_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `noticias_img`
--
ALTER TABLE `noticias_img`
  ADD CONSTRAINT `fk_noticia_id` FOREIGN KEY (`noticia_id`) REFERENCES `noticias` (`id_noticia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_user_group_group_id` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_group_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
