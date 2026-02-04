# ✈️ SeuDestino - Landing Page (Teste Front-End - Ellos Design)

Bem-vindo(a) ao repositório da SeuDestino, uma landing page desenvolvida como parte de um teste técnico Front-End, com foco em experiência do usuário e design responsivo.

## Sobre o Projeto

A landing page **SeuDestino** foi criada para apresentar uma consultoria de viagens personalizada.  

![Print Landing Page SeuDestino]("seuDestino.jpeg")

O projeto destaca:

- Destinos incríveis para explorar
- Benefícios de contratar uma consultoria de viagens
- Perguntas frequentes (FAQ)
- Formulário funcional **Viaje Agora Mesmo**, com gravação dos dados no banco de dados
- Design responsivo para dispositivos móveis
- Animações em CSS e efeitos de interação

## 🛠️ Tecnologias Utilizadas

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL

## 💻 Como Executar Localmente
Siga os passos abaixo para rodar o projeto no seu computador:

### 1. Clonar o repositório

```bash
git clone https://github.com/emillymoitinho/teste-frontend-developer.git
```

### 2. Configurar servidor local
- Instale o **XAMPP**
- Coloque a pasta do projeto dentro da pasta:
  ```bash
  htdocs/
  ```

### 3. Criar o banco de dados
- Acesse o **phpMyAdmin**
- Crie um banco de dados chamado:
  
  ``` bash
      CREATE DATABASE contatoviagem;
  ```

- Crie a tabela contatos:
  
  ```bash
  CREATE TABLE contatos (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    mensagem TEXT NOT NULL,
    data_envio TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    );
  ```

### 4. Abrir no navegador
  - Abra o navegador e acesse:
    
    ``` bash
    http://localhost/teste-frontend-developer/
    ```
- Preencha o formulário **Viaje Agora Mesmo**
- Os dados enviados serão gravados corretamente no banco de dados.

## 👩‍💻 Autora
  **Emilly Soares Moitinho**  
  [Linkedin](https://www.linkedin.com/in/emillymoitinho/)
  [GitHub](https://github.com/emillymoitinho)

  Agradeço a oportunidade de participar deste teste.  
  Este projeto foi desenvolvido com muita dedicação, espero que gostem do resultado. ❤️✨

  
  

  

