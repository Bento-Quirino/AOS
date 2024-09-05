
# Guia: Instalando o Ubuntu no Windows e Configurando Docker para Laravel

## 1. Ativar a Virtualização na BIOS
- Reinicie o computador e entre na BIOS (geralmente, pressionando teclas como **Delete**, **F2** ou **Esc** durante o boot, dependendo da sua placa-mãe).
- Procure pela opção de **Virtualização** ou **Intel VT-x** e habilite-a.
- Salve as mudanças e reinicie o computador.

## 2. Instalar o Ubuntu no Windows
- Abra a **Microsoft Store** e procure por **Ubuntu**.
- Clique em **Obter** para instalar a distribuição do Ubuntu.
- Após a instalação, abra o Ubuntu e siga as instruções para configurar um usuário e senha.

## 3. Instalar e Configurar o Docker no Ubuntu

### 3.1. Configurar o Repositório do Docker
1. Abra o terminal do Ubuntu e atualize a lista de pacotes:
   ```bash
   sudo apt-get update
   ```

2. Instale as dependências necessárias:
   ```bash
   sudo apt-get install ca-certificates curl
   ```

3. Crie o diretório de armazenamento para a chave GPG do Docker:
   ```bash
   sudo install -m 0755 -d /etc/apt/keyrings
   ```

4. Baixe e adicione a chave GPG oficial do Docker:
   ```bash
   sudo curl -fsSL https://download.docker.com/linux/ubuntu/gpg -o /etc/apt/keyrings/docker.asc
   sudo chmod a+r /etc/apt/keyrings/docker.asc
   ```

5. Adicione o repositório do Docker ao Apt:
   ```bash
   echo      "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.asc] https://download.docker.com/linux/ubuntu      $(. /etc/os-release && echo "$VERSION_CODENAME") stable" |      sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
   ```

6. Atualize a lista de pacotes novamente:
   ```bash
   sudo apt-get update
   ```

### 3.2. Instalar os Pacotes do Docker
1. Execute o seguinte comando para instalar o Docker e seus componentes:
   ```bash
   sudo apt-get install docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin
   ```

### 3.3. Verificar a Instalação do Docker
1. Para verificar se o Docker foi instalado corretamente, execute o comando:
   ```bash
   docker ps
   ```

2. Se o Docker não estiver rodando, inicie-o manualmente:
   ```bash
   sudo service docker start
   ```

## 4. Criar e Configurar um Projeto Laravel com Docker

### 4.1. Criar o Projeto Laravel
1. Certifique-se de que o Docker está usando o contexto padrão:
   ```bash
   docker context use default
   ```

2. Crie o projeto Laravel utilizando o Docker:
   ```bash
   curl -s https://laravel.build/example-app | bash
   ```

### 4.2. Iniciar o Projeto Laravel
1. Entre no diretório do projeto recém-criado:
   ```bash
   cd example-app
   ```

2. Inicie o ambiente Docker do Laravel usando o Sail:
   ```bash
   ./vendor/bin/sail up
   ```

### 4.3. Configurar o Banco de Dados
1. Após iniciar o ambiente, crie as tabelas padrão do Laravel no banco de dados MySQL:
   ```bash
   ./vendor/bin/sail artisan migrate
   ```

---

Esse guia cobre a instalação do Ubuntu no Windows, a configuração do Docker no Ubuntu, a criação de um projeto Laravel, e a configuração do banco de dados.
