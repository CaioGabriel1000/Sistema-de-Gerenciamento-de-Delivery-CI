# Sistema-de-Gerenciamento-de-Delivery

<p>Sistema para gerenciar os processos de delivery de um estabelecimento de fast-food.</p>
<p>Desenvolvido para a ASPITEC 2018 ADS3 da Faculdade de Ciências Sociais Aplicadas de Belo Horizonte (FACISABH).</p>
<p><b>Atenção! Esse software é um protótipo, portanto está incompleto e descontinuado.</b> A evolução desse software é o Sistema Gerenciador de Solicitações de Entrega, acesse o repositório:</p>
<p>https://github.com/CaioGabriel1000/Sistema-Gerenciador-de-Solicitacoes-de-Entrega</p>

<h2>Processo de instalação</h2>

<ol>
  <li>
    Baixe o sistema e faça a extração na pasta que contém os sites do seu servidor web ("htdocs" no xampp ou "/var/www/html" no lamp).
  </li>
  <li>
    Importe o banco de dados que está na pasta "sql" do sistema.
  </li>
  <li>
    No arquivo "/application/config/config.php" faça a alteração do "$config['base_url']" adicionando o domínio do seu site ou o ip correspondente (exemplo caso o servidor seja local: "$config['base_url'] = 'http://localhost/NOME_DA_PASTA_ONDE_ESTÁ_O_SISTEMA/';").
  </li>
  <li>
    No arquivo "/application/config/database.php" faça a alteração dos dados do seu banco de dados (principalmente o nome do usário do SGBD 'username', a senha desse usuário 'password' e o nome do banco de dados 'database').
  </li>
  <li>
    O usuário padrão do lojista, que tem acesso ao módulo de gerenciamento é "admin@admin" e senha "admin".
  </li>
</ol>

<h2>Recomendações</h2>

<ol>
  <li>
    Utilize um servidor lamp atualizado, com Apache2, PHP 5.6 ou mais recente e MySQL.
  </li>
</ol>
