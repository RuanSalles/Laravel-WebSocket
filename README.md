# Laravel - WebSocket

## Iniciativa

<p align="justify"> A iniciativa do projeto é realizar a configuração de um WebSocket funcional com o Framework PHP - Laravel. Abaixo seguirá a forma de utilização para instalação e build do projeto. </p>


### Buildando o projeto

#### Requisitos
+ PHP 7.4+
+ Composer
+ MySQL
+ Redis
+ Node

Inicie com o download ou clone do projeto via github.

```bash
https://github.com/RuanSalles/Laravel-WebSocket.git
```
Em seguida você deve atualizar e instalar o composer para build inicial da aplicação.

```bash
composer install && composer update
```

Ao finalizar o download você deverá configurar as variáveis de ambiente no seu .Env

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seubanco
DB_USERNAME=seuuser
DB_PASSWORD=suasenha(se tiver)

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

BROADCAST_DRIVER=pusher

PUSHER_APP_ID=myappid
PUSHER_APP_KEY=myappkey
PUSHER_APP_SECRET=myappsecret
PUSHER_APP_CLUSTER=mt1
```

OBS: As Pushers ID, KEY e Secret você pode alterar da maneira que quiser, criptografar em MD5, HASH etc.


Agora vamos criar nossas tabelas rodando o comando 

```bash
php artisan migrate
```

Finalizada a migração execute o comando abaixo para baixar as dependências do Node e a pasta node_modules:

```bash
npm install && npm run dev
```

Obs: Caso falhe na primeira vez, execute o comando novamente e irá funcionar.

Agora nós podemos testar a aplicação subindo nossos servidores com os comandos: 

```bash
php artisan serve

php artisan websockets:serve
```
Estando de pés ambos os serviços acesse o endereço:

http://localhost:8000/laravel-websockets

Se tudo estiver correto ate aqui, você verá uma página com o Localhost sendo Laravel e a porta 6001, clique apenas no Connect, neste momento você estará no monitoramento do seu websocket.

Após subir ambos os serviços abra 2 navegadores acessando as seguinte rotas:

Navegador 1: http://localhost:8000/index
Navegador 2: http://localhost:8000/create

De preferência abra as 2 janelas ao mesmo tempo com tela dividida, execute o cadastro através do navegador 2, se estiver tudo certo, você verá a atualização em tempo real, sem precisar recarregar página.

E em seu monitorador você verá as atualizações chegando em tempo real também sendo enviadas para seu Front-End.


### Agradecimento

Realizar este trabalho foi bem complicado, porém, tenho que agradecer imensamente meu amigo [William Correa](https://github.com/wilcorrea), pela imensa paciência em me explicar alguns conceitos até que pudesse entender e replicar de maneira prática vindo a finalizar o projeto.
