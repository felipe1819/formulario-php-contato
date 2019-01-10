<b><h1>#Formulário em PHP com PHINX</h1></b>

<b><h3>Montando o ambiente de trabalho.</h3></b>
<p>Será necessario ter php instalado.<br />
E no caso o composer.<br /></p>

<p>Crie uma pasta para o projeto</p>

<p>Acesse a pasta do projeto pelo terminal e execute o comando de instalação phinx pelo composer.<br />
"<i>composer require robmorgan/phinx</i>"<br /></p>

<p>Será necessario a criaçao de um arquivo chamado "phinx.yml".<br />
Esse é o arquivo de configuração do phinx.<br />
(Tambem e possivel dar o comando phinx init para criar o arquivo)<br /></p>

<p>Crie uma pasta chamada db dentro da pasta do projeto.<br /></p>

<p>Agora e preciso instalar o sqlite para esse caso, digite:<br />
"<i>sudo apt install php-sqlite3</i>"<br /></p>

<p>E com isso temos tudo o necessario pra começar a desenvolver</p><br />

<b><h3>Fazendo Migration</h3></b>
<p>o Phinx é uma ferramenta via linha de comando para gerenciamento de migrações de banco de dados. Com ele você poderá escrever scripts PHP para efetuar as alterações que você necessita no seu banco de dados e gerenciar isso via linha de comando.<br /></p>

<p>Para fazer uma Migration e necessário criar uma antes, com o comando:<br />
"<i>vendor\bin\phinx create MinhaMigration</i>"<br />
Ele cria um arquivo que já vem com um template definido, mas e necessario edita-lo.<br /></p>

<p>Após configurar a tabela do formulário no arquivo de migration criado, digite o seguinte comando para executar a migracion<br />
<i>vendor/bin/phinx migrate</i><br /></p>

<p>Com isso a tabela foi criada.</p><br />


<b><h3>Acessar a aplicação</h3></b>
<p>Para acessar o formulário basta ligar o servidor com o comando:<br />
"<i>php -S localhost:8000</i>"<br />
E abrir localhost:8000 no navegador.<br /></p>

<p>Para acessar o banco de dados e necessario usar um programa que trabalhe com sqlite.</p><br />

<b><h4></h4><p>E uma aplicação basica com formulário php em uma pagina simples "index.php" onde se pode cadastrar nome, telefone e uma mensagem em um banco de dados sqlite.
Tambem e possivel acessar a lista de cadastrados pelo arquivo "listagem.php", onde se pode editar e apagar cadastros.</p></h4></b><br />
