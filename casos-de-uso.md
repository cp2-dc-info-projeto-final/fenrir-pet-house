# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Login
 - [CDU 02](#CDU-02): Cadatro de Usuário
 - [CDU 03](#CDU-03): Duis nec orci quis velit faucibus hendrerit tempus vel libero.


## Lista dos Atores

 - Administrador
 - Usuário Comum

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

Duis nec orci quis velit faucibus hendrerit tempus vel libero.

**Fluxo Principal**

1. Praesent interdum lectus sit amet augue tincidunt imperdiet.
2. Duis ac dolor vel nisi imperdiet vehicula et non sem.
3. Nunc imperdiet tortor consequat, lobortis purus non, interdum risus.

**Fluxo Alternativo A**

1. Aliquam efficitur arcu ac fermentum egestas.
2. Pellentesque ac diam vitae erat bibendum hendrerit.
3. Mauris sed purus sit amet lectus efficitur placerat et eu diam.
4. Aenean ullamcorper tellus quis nibh porttitor congue.
5. Phasellus laoreet erat eget condimentum dictum.
