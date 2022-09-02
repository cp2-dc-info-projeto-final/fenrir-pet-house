# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Login
 - [CDU 02](#CDU-02): Cadatro de Usuário
 - [CDU 03](#CDU-03): Reserva de Horário
 - [CDU 04](#CDU-04): Cadastro de Cachorro

## Lista dos Atores

 - Administrador
 - Usuário Comum
 - Cachorro

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagrama-exemplo.png)

## Descrição dos Casos de Uso

### CDU 01

Usuário e administrador fazem login.

**Fluxo Principal**

1. Usuário insere o email corretamente
2. Usuário insere a senha corretamente
3. Usuário pressiona o botão "Entrar"
4. Usuário é redirecionado ao menu principal.

**Fluxo Alternativo A**

1. Usuário insere o email incorretamente
2. Usuário insere a senha corretamente
3. Usuário pressiona o botão "Entrar"
4. Um pop-up aparece com a mensagem "Senha e/ou Email incorreto(s)"
5. A página atualiza com os campos de email e senha em branco.

**Fluxo Alternativo B**

1. Usuário insere o email corretamente
2. Usuário insere a senha incorretamente
3. Usuário pressiona o botão "Entrar"
4. Um pop-up aparece com a mensagem "Senha e/ou Email incorreto(s)"
5. A página atualiza com os campos de email e senha em branco.


### CDU 02

Usuário se cadastra no site

**Fluxo Principal**

1. Usuário pressiona o botão "Registrar-se"
2. O usuário preenche o campo "E-mail" com um e-mail não presente no banco de dados do programa
3. O programa verifica a presença do e-mail no banco de dados
4. O programa retorna a mensagem "E-mail disponível"
5. Usuário preenche o campo "Senha" com um texto com pelo menos 8 caracteres e símbolos especiais presentes no charset "UTF-8"
6. O programa verifica se a senha possui pelo menos 8 caracteres e não possui símbolos especiais inválidos
7. O programa retorna a mensagem "Senha válida"
8. Usuário preenche o campo "Nome" com seu nome completo
9. Usuário preenche o campo "Data de Nascimento" com sua data de nascimento na formatação DD/MM/YY
10. Usuário pressiona botão "Registrar"
11. As informações inseridas pelo usuário são enviadas ao banco de dados
12. Usuário é redirecionado à página de login.

**Fluxo Alternativo A**

1. Usuário pressiona o botão "Registrar-se"
2. O usuário preenche o campo "E-mail" com um e-mail presente no banco de dados do programa
3. O programa verifica a presença do e-mail no banco de dados
4. O programa retorna a mensagem "E-mail já em uso"
5. A página é atualizada com o campo "E-mail" em branco.

**Fluxo Alternativo B**

1. Usuário pressiona o botão "Registrar-se"
2. O usuário preenche o campo "E-mail" com um e-mail não presente no banco de dados do programa
3. O programa verifica a presença do e-mail no banco de dados
4. O programa retorna a mensagem "E-mail disponível"
5. Usuário preenche o campo "Senha" com um texto com menos de 8 caracteres
6. O programa verifica se a senha possui pelo menos 8 caracteres e não possui símbolos especiais inválidos
7. O programa retorna a mensagem "Senha inválida"
8. A página é atualizada com o campo "Senha" em branco.

**Fluxo Alternativo C**

1. Usuário pressiona o botão "Registrar-se"
2. O usuário preenche o campo "E-mail" com um e-mail não presente no banco de dados do programa
3. O programa verifica a presença do e-mail no banco de dados
4. O programa retorna a mensagem "E-mail disponível"
5. Usuário preenche o campo "Senha" com um texto com menos de 8 caracteres e com símbolos especiais não presentes no charset "UTF-8"
6. O programa verifica se a senha possui pelo menos 8 caracteres e não possui símbolos especiais inválidos
7. O programa retorna a mensagem "Senha inválida"
8. A página é atualizada com o campo "Senha" em branco.

### CDU 03

Usuário reserva um horário para levar seu cachorro ao hotel

**Fluxo Principal**

1. Usuário pressiona o botão "Reservar"
2. Usuário é redirecionado a um calendário onde escolhe os dias que pretende reservar
3. O programa verifica os dias selecionados
4. O programa retorna os quartos da hotelaria, onde os quartos com horários disponíveis coloridos em verde e os quartos sem horários disponíveis coloridos em vermelho
5. Usuário seleciona um dos quartos com horários disponíveis no dia selecionado
6. O programa retorna os horários disponíveis no quarto selecionado
7. Usuário seleciona um dos horários disponíveis
8. Usuário seleciona um dos cachorros cadastrados por ele para a reserva
9. Usuário seleciona os serviços para o cachorro
10. Usuário pressiona o botão "Confirmar Reserva" 
11. Um pop-up aparece com a mensagem "Tem certeza que deseja confirmar a reserva?"
12. Usuário pressiona o botão "Sim"
13. Usuário é redirecionado ao menu principal
14. Um pop-up aparece com a mensagem "Reserva confirmada com sucesso.".

**Fluxo Alternativo A**

1. Usuário pressiona o botão "Reservar"
2. Usuário é redirecionado a um calendário onde escolhe os dias que pretende reservar
3. O programa verifica os dias selecionados
4. O programa retorna os quartos da hotelaria, onde os quartos com horários disponíveis coloridos em verde e os quartos sem horários disponíveis coloridos em vermelho
5. Usuário seleciona um dos quartos sem horários disponíveis no dia selecionado
6. Um pop-up aparece com a mensagem "Esse quarto não está disponível".

**Fluxo Alternativo B**

1. Usuário pressiona o botão "Reservar"
2. Usuário é redirecionado a um calendário onde escolhe os dias que pretende reservar
3. O programa verifica os dias selecionados
4. O programa retorna os quartos da hotelaria, onde os quartos com horários disponíveis coloridos em verde e os quartos sem horários disponíveis coloridos em vermelho
5. Usuário seleciona um dos quartos com horários disponíveis no dia selecionado
6. O programa retorna os horários disponíveis no quarto selecionado
7. Usuário seleciona um dos horários indisponíveis
8. Um pop-up  aparece com a mensagem "Esse horário não está disponível"

### CDU 04

Usuário cadastra seu cachorro para fazer uma futura reserva

**Fluxo Principal**

1. No menu principal, usuário pressiona o botão "Registrar Cachorro"
2. O usuário preenche o campo "Nome do Dog" com um texto com pelo menos 3 caracteres e sem caracteres especiais
3. O programa verifica se o texto possui 3 caracteres ou mais e não possui caracteres especiais
4. O programa retorna a mensagem "Nome válido"
5. Usuário preenche o campo "Raça do Dog" com um texto com pelo menos 4 caracteres e sem caracteres especiais
6. O programa verifica se o texto possui 4 caracteres ou mais e não possui caracteres especiais
7. O programa retorna a mensagem "Raça válida"
8. Usuário preenche o campo "Idade do Dog" com um numeral
9. O programa verifica se o texto só possui numerais 
10. Usuário pressiona botão "Registrar"
11. As informações inseridas pelo usuário são enviadas ao banco de dados
12. Usuário é redirecionado ao menu principal.
