# Hotel Elysian Waves 🏨

Projeto desenvolvido para a disciplina de **Programação de Sistemas para a Internet** do professor **Romerito Campos**.

## Equipe 
- **Flaubert Cauê Dantas**  
- **Paulo Victor de Moura Adelino**  
- **Sávio Sáron Câmara de Araújo**  

## Instruções

Siga as etapas abaixo após baixar o nosso projeto para configurar e executar em sua máquina

1. Instale as dependências do composer
   ```bash
   composer install
   ```

2. Gere a chave da aplicação
   ```bash
   php artisan key:generate
   ```

3. Renomeie o arquivo `env.example` para `.env` e configure as variáveis de ambiente conforme necessário.

4. Execute as migrações e os seeders para configurar o banco de dados:
   ```bash
   php artisan migrate:fresh --seed
   ```

5. Inicie o servidor local:
   ```bash
   php artisan serve
   ```

## Considerações Finais


Almejamos atingir **60** pontos e correr pro **abraço**! 🤪


