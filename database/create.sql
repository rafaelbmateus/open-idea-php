CREATE TABLE tb_innovation_area (
  innovation_area_id SERIAL  NOT NULL ,
  area_name VARCHAR(255)   NOT NULL ,
  created_at TIMESTAMP   NOT NULL ,
  updated_at TIMESTAMP    ,
  is_deleted BOOL      ,
PRIMARY KEY(innovation_area_id));


INSERT INTO tb_innovation_area(area_name, created_at) 
VALUES ('Medicina', now());

INSERT INTO tb_innovation_area(area_name, created_at) 
VALUES ('Nanotecnologia', now());

INSERT INTO tb_innovation_area(area_name, created_at) 
VALUES ('Tecnologia da Informa��o', now());

INSERT INTO tb_innovation_area(area_name, created_at) 
VALUES ('Energia distribu�da', now());

INSERT INTO tb_innovation_area(area_name, created_at) 
VALUES ('Biocombust�veis', now());

INSERT INTO tb_innovation_area(area_name, created_at) 
VALUES ('Computa��o pervasiva', now());

commit;




CREATE TABLE tb_job (
  job_id SERIAL  NOT NULL ,
  job_name VARCHAR(255)   NOT NULL ,
  is_deleted BOOL    ,
  created_at TIMESTAMP    ,
  updated_at TIMESTAMP      ,
PRIMARY KEY(job_id));


INSERT INTO tb_job(job_name, created_at) VALUES ('corporate', now());
INSERT INTO tb_job(job_name, created_at) VALUES ('student', now());
INSERT INTO tb_job(job_name, created_at) VALUES ('researcher', now());
INSERT INTO tb_job(job_name, created_at) VALUES ('developer', now());

commit;




CREATE TABLE tb_user_type (
  type_id SERIAL  NOT NULL ,
  type_name VARCHAR(255)   NOT NULL ,
  is_deleted BOOL    ,
  created_at TIMESTAMP    ,
  updated_at TIMESTAMP      ,
PRIMARY KEY(type_id));


INSERT INTO tb_user_type(type_name, created_at) VALUES ('admin', now());
INSERT INTO tb_user_type(type_name, created_at) VALUES ('user', now());

commit;




CREATE TABLE tb_incubator (
  incubator_id SERIAL  NOT NULL ,
  incubator_name VARCHAR(255)   NOT NULL ,
  incubator_description VARCHAR(1200)    ,
  incubator_url VARCHAR(255)    ,
  incubator_phone VARCHAR(255)    ,
  incubator_state VARCHAR(2)    ,
  incubator_city VARCHAR(255)    ,
  created_at TIMESTAMP   NOT NULL ,
  updated_at TIMESTAMP    ,
  is_deleted BOOL      ,
PRIMARY KEY(incubator_id));


INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('CELTA', 'O Centro Empresarial para Labora��o de Tecnologias Avan�adas (CELTA) � a incubadora da Funda��o CERTI situada em Florian�polis (SC). Foi criado em 1986, como resposta aos anseios de desenvolvimento da capital catarinense e com o objetivo de viabilizar um promissor setor econ�mico, aproveitando os talentos e o conhecimento gerados pela UFSC. ', 'http://www.celta.org.br/', '048 3239-2222', 'SC', 'Florian�polis', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('MIDI Tecnol�gico', 'A incubadora MIDI Tecnol�gico, criada no dia 14 de agosto de 1998, tem o Servi�o de Apoio �s Micro e Pequenas Empresas de Santa Catarina (SEBRAE/SC) como entidade mantenedora e a Associa��o Catarinense de Empresas de Tecnologia (ACATE) como entidade gestora. Localizada em Florian�polis, abriga empresas incubadas cujos produtos, processos ou servi�os s�o gerados a partir de resultados de pesquisas cient�ficas aplicadas, nos quais a tecnologia e a inova��o representam alto valor agregado. O MIDI Tecnol�gico tem como objetivo prestar servi�os de Incuba��o, para o desenvolvimento de empreendimentos nascentes de base tecnol�gica, visando a cria��o de empresas inovadoras e sustent�veis.', 'http://miditecnologico.com.br/', '048 2107-2737', 'SC', 'Florian�polis', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('CRIE', 'A incubadora do Centro Regional de Inova��o e Empreendedorismo (Crie) atua desde 2005 para viabilizar projetos de micro e pequenas empresas. � uma organiza��o civil sem fins lucrativos, com personalidade jur�dica de direito privado, com autonomia administrativa e financeira. A partir de suporte t�cnico, gerencial e infraestrutura, a incubadora Crie contribui para o desenvolvimento regional sustent�vel oferecendo �s empresas nascentes, por baixo custo, espa�o e servi�os b�sicos, al�m de um conjunto de orienta��es t�cnicas e gerenciais. O espa�o promove ainda a sinergia entre empresas incubadas com institui��es de ensino e pesquisa, empresas, �rg�os governamentais, associa��es de classe, agentes e mercado consumidor.', 'http://www.unisul.br/wps/portal/home/pesquisa-e-inovacao/agetec/incubadora-crie', '048 3621-3406', 'SC', 'Florian�polis', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('LNCC', '', 'http://www.incubadora.lncc.br/', '024 2233-6232', 'RJ', '', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('Santos Dumont', 'A Incubadora Santos Dumont � um espa�o que oferece suporte gerencial, facilitando a intera��o com o meio empresarial, cient�fico, tecnol�gico e financeiro, visando a sua inser��o, crescimento e consolida��o no mercado.', 'http://www.pti.org.br/incubadorasantosdumont', '045 3576-7073', 'PR', 'Foz do Igua�u', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('ITSM', 'As institui��es de ensino e de pesquisa tecnol�gica t�m como obriga��o primeira acompanhar o processo de inova��o e de mudan�a de paradigmas. A empresa inovadora, forte dependente de novas tecnologias e novos conhecimentos para o sucesso de seus neg�cios, de certa forma, tamb�m � dependente dos esfor�os despendidos pelo corpo de pesquisadores das institui��es, para ver suas aspira��es contempladas.', 'http://coral.ufsm.br/itsm/', '055 3220-8836', 'RS', 'Santa Maria', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('Instituto GENE', 'O Instituto Gene � uma associa��o civil sem fins lucrativos que tem como objetivo promover o desenvolvimento multissetorial por meio do est�mulo e suporte � inova��o e ao empreendedorismo. Atualmente, vem atuando diretamente no apoio a gera��o de empresas inovadoras, por meio da Incubadora de Empresas e, subsequentemente, capta��o de recursos por meio de projetos.', 'http://www.institutogene.org.br/', '047 3321-7870', 'SC', 'Blumenau', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('RAIAR', 'A RAIAR � Incubadora de Empresas da PUCRS tem como prop�sito estimular e operacionalizar a vis�o empreendedora da comunidade PUCRS. Por meio do Programa de Incuba��o e do Startup Garagem, a Raiar apoia projetos de neg�cio, dando suporte em assessorias e infraestrutura, transformando-os em empreendimentos competitivos e prontos para atuarem no mercado. Saiba mais sobre a Raiar', 'http://www3.pucrs.br/portal/page/portal/inovapucrs/Capa/raiar', '051 3320-3673', 'RS', 'Porto Alegre', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('Softville', '� uma Funda��o de car�ter t�cnico cient�fico, com personalidade jur�dica de direito privado, sem fins lucrativos. Miss�o: Proporcionar o apoio necess�rio para o desenvolvimento de empresas de Base Tecnol�gica, contribuindo para o seu amadurecimento e consequente sucesso rumo ao mercado globalizado.', 'http://www.softville.org.br/', '047 3431-7300', 'SC', 'Joinville', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('EDUCERE', 'A Funda��o Educere � um Centro de Pesquisas e Desenvolvimento na �rea de biotecnologia, cujo foco principal � a incuba��o de empresas a partir de um projeto social inovador que atua na forma��o de jovens com potencial empreendedor.', 'http://www.educere.org.br/', '', 'PR', 'Campo Mour�o', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('CIETEC', 'Cietec � uma associa��o civil sem fins lucrativos de direito privado estabelecida com a miss�o de promover o Empreendedorismo Inovador, incentivando a transforma��o do conhecimento em produtos e servi�os de valor agregado para o mercado.', 'http://www.cietec.org.br/', '011 3039-8300', 'SP', 'Cidade Universit�ria de S�o Paulo', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('Mackenzie', 'A incubadora de empresas do Mackenzie � um ambiente de fomento e apoio ao desenvolvimento de novas empresas inovadoras - de presta��o de servi�os, de base tecnol�gica ou de manufaturas leves - oferecendo suporte t�cnico, gerencial e forma��o complementar ao empreendedor.', 'http://www.mackenzie.br/', '011 2114-8074', 'SP', 'Vila Buarque', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('CIATEC', 'A CIATEC participa ativamente no planejamento e na execu��o da pol�tica de ci�ncia e tecnologia da administra��o p�blica das diversas esferas governamentais especialmente a municipal. Atrav�s de sua Incubadora de Empresas de Base Tecnol�gica, auxilia no surgimento e na evolu��o de empreendimentos geradores de novas tecnologias, ajudando a consolidar Campinas como uma das refer�ncias no mundo.', 'http://www.ciatec.org.br/', '019 3756-5433', 'SP', 'Campinas', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('INCAMP', 'A Incubadora de Empresas de Base Tecnol�gica da Unicamp (INCAMP), fundada em 2001 e administrada pela Ag�ncia de Inova��o Inova Unicamp, � o ambiente ideal para que projetos tecnol�gicos virem verdadeiros neg�cios. Al�m do espa�o f�sico, proporciona todo o suporte necess�rio para que essas empresas cheguem ao mercado e se tornem empreendimentos de sucesso, por meio de reuni�es e mentorias com especialistas e profissionais do ecossistema de empreendedorismo e inova��o, eventos, palestras e encontros com investidores.', 'http://www.inova.unicamp.br/', '019 3521-5203', 'SP', 'Campinas', now());

INSERT INTO tb_incubator (incubator_name, incubator_description, incubator_url, incubator_phone, incubator_state, incubator_city, created_at)
VALUES ('CIDE', 'O Centro de Incuba��o e Desenvolvimento Empresarial � CIDE, tem a miss�o de estruturar a cria��o e o desenvolvimento de empresas inovadoras de base tecnol�gica com �nfase nos setores de biotecnologia, tecnologia da informa��o e eletr�nica, atrav�s de a��es que contribuam para incentivar o empreendedor e o desenvolvimento socioecon�mico do Estado. Para atingir sua finalidades o CIDE utiliza o sistema de incuba��o de empresas, fazendo �ponte� entre o mercado e o desenvolvimento tecnol�gico, respeitando as caracter�sticas pr�prias da regi�o.', 'http://cide.org.br/', '', 'AM', 'Manaus', now());

commit;




CREATE TABLE tb_user (
  user_id SERIAL  NOT NULL ,
  job_id INTEGER   NOT NULL ,
  type_id INTEGER   NOT NULL ,
  user_email VARCHAR(255)   NOT NULL ,
  user_password VARCHAR(45)   NOT NULL ,
  user_name VARCHAR(45)   NOT NULL ,
  user_document INTEGER    ,
  user_resume VARCHAR(500)    ,
  is_deleted BOOL    ,
  created_at TIMESTAMP   NOT NULL ,
  updated_at TIMESTAMP      ,
PRIMARY KEY(user_id)    ,
  FOREIGN KEY(type_id)
    REFERENCES tb_user_type(type_id),
  FOREIGN KEY(job_id)
    REFERENCES tb_job(job_id));


CREATE INDEX tb_user_FKIndex1 ON tb_user (type_id);
CREATE INDEX tb_user_FKIndex2 ON tb_user (job_id);


CREATE INDEX IFK_Rel_16 ON tb_user (type_id);
CREATE INDEX IFK_Rel_17 ON tb_user (job_id);


CREATE TABLE tb_challenge (
  challenge_id SERIAL  NOT NULL ,
  area_id INTEGER    ,
  user_id INTEGER   NOT NULL ,
  challenge_title VARCHAR(80)   NOT NULL ,
  challenge_description VARCHAR(1200)    ,
  challenge_deadline DATE    ,
  created_at VARCHAR(255)   NOT NULL ,
  updated_at TIMESTAMP    ,
  is_deleted BOOL    ,
  challenge_attachment VARCHAR(255)      ,
PRIMARY KEY(challenge_id)    ,
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id),
  FOREIGN KEY(area_id)
    REFERENCES tb_innovation_area(innovation_area_id));


CREATE INDEX tb_challenge_FKIndex1 ON tb_challenge (user_id);
CREATE INDEX tb_challenge_FKIndex2 ON tb_challenge (area_id);


CREATE INDEX IFK_Rel_18 ON tb_challenge (user_id);
CREATE INDEX IFK_Rel_21 ON tb_challenge (area_id);


CREATE TABLE tb_idea (
  idea_id SERIAL  NOT NULL ,
  area_id INTEGER   NOT NULL ,
  challenge_id INTEGER    ,
  user_id INTEGER   NOT NULL ,
  idea_is_public BOOL    ,
  idea_title VARCHAR(80)   NOT NULL ,
  idea_description VARCHAR(1200)   NOT NULL ,
  idea_solution VARCHAR(1200)    ,
  idea_differential VARCHAR(1200)    ,
  idea_necessary_skills VARCHAR(500)    ,
  idea_target_group VARCHAR(80)    ,
  created_at TIMESTAMP    ,
  updated_at TIMESTAMP    ,
  is_deleted BOOL    ,
  idea_attachment VARCHAR(255)      ,
PRIMARY KEY(idea_id)      ,
  FOREIGN KEY(area_id)
    REFERENCES tb_innovation_area(innovation_area_id),
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id),
  FOREIGN KEY(challenge_id)
    REFERENCES tb_challenge(challenge_id));


CREATE INDEX tb_idea_FKIndex1 ON tb_idea (area_id);
CREATE INDEX tb_idea_FKIndex2 ON tb_idea (user_id);
CREATE INDEX tb_idea_FKIndex3 ON tb_idea (challenge_id);


CREATE INDEX IFK_Rel_02 ON tb_idea (area_id);
CREATE INDEX IFK_Rel_03 ON tb_idea (user_id);
CREATE INDEX IFK_Rel_11 ON tb_idea (challenge_id);


CREATE TABLE tb_comment (
  comment_id SERIAL  NOT NULL ,
  challenge_id INTEGER    ,
  user_id INTEGER   NOT NULL ,
  idea_id INTEGER    ,
  comment_description INTEGER    ,
  created_at TIMESTAMP    ,
  updated_at TIMESTAMP      ,
PRIMARY KEY(comment_id)      ,
  FOREIGN KEY(idea_id)
    REFERENCES tb_idea(idea_id),
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id),
  FOREIGN KEY(challenge_id)
    REFERENCES tb_challenge(challenge_id));


CREATE INDEX tb_comment_FKIndex1 ON tb_comment (idea_id);
CREATE INDEX tb_comment_FKIndex2 ON tb_comment (user_id);
CREATE INDEX tb_comment_FKIndex3 ON tb_comment (challenge_id);


CREATE INDEX IFK_Rel_09 ON tb_comment (idea_id);
CREATE INDEX IFK_Rel_10 ON tb_comment (user_id);
CREATE INDEX IFK_Rel_19 ON tb_comment (challenge_id);


CREATE TABLE tb_like (
  like_idea_id SERIAL  NOT NULL ,
  challenge_id INTEGER    ,
  user_id INTEGER   NOT NULL ,
  idea_id INTEGER    ,
  created_at TIMESTAMP   NOT NULL   ,
PRIMARY KEY(like_idea_id)      ,
  FOREIGN KEY(idea_id)
    REFERENCES tb_idea(idea_id),
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id),
  FOREIGN KEY(challenge_id)
    REFERENCES tb_challenge(challenge_id));


CREATE INDEX tb_like_idea_FKIndex1 ON tb_like (idea_id);
CREATE INDEX tb_like_idea_FKIndex2 ON tb_like (user_id);
CREATE INDEX tb_like_FKIndex3 ON tb_like (challenge_id);


CREATE INDEX IFK_Rel_01 ON tb_like (idea_id);
CREATE INDEX IFK_Rel_07 ON tb_like (user_id);
CREATE INDEX IFK_Rel_20 ON tb_like (challenge_id);


CREATE TABLE tb_notification (
  notification_id SERIAL  NOT NULL ,
  user_id INTEGER   NOT NULL ,
  notification_message VARCHAR(255)    ,
  notification_is_read BOOL    ,
  created_at TIMESTAMP   NOT NULL   ,
PRIMARY KEY(notification_id)  ,
  FOREIGN KEY(user_id)
    REFERENCES tb_user(user_id));


CREATE INDEX tb_notification_FKIndex1 ON tb_notification (user_id);


CREATE INDEX IFK_Rel_08 ON tb_notification (user_id);



