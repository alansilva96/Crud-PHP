# Crud-PHP

### Procedimento para executar o crud ###

1. Instalar o xampp https://www.apachefriends.org/pt_br/index.html
2. baixar projeto do git https://github.com/alansilvacrf/Crud-PHP
3. Descompactar projeto e mover para caminho padrão do xampp C:\xampp\htdocs
4. Abrir painel de controle do xampp e iniciar os serviços mysql e apache
5. No navegador você vai digitar http://localhost/dashboard e identificar no canto superior direito a opção my php admin, clicar nela
6. Ir em novo para criar um novo banco, seu nome deverá ser crud para que não seja necessário mudar o arquivo de configuração com o banco
7. Dentro do projeto há um arquivo .sql nele contem script para criar as tabelas no banco
8. Após criar o banco, execute o script citado acima
9. Após criar as tabelas volte no painel de controle do xampp e reinicie o serviço do apache.
10. Para chamar a tela inicial do crud use o link: http://localhost/CrudPHP/index.php
