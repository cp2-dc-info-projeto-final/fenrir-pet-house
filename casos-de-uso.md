# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Usuário faz Login ✔️
 - [CDU 02](#CDU-02): Usuário faz Logout  ✔️
 - [CDU 03](#CDU-03): Cadastro de cliente ✔️
 - [CDU 04](#CDU-04): Reserva de Horário ✔️
 - [CDU 05](#CDU-05): Cadastro de Cachorro ✔️
 - [CDU 06](#CDU-06): Consulta do cliente nos horários reservados ✔️
 - [CDU 07](#CDU-07): Recuperação de senha
 - [CDU 08](#CDU-08): Visualizar pacotes ✔️
 - [CDU 09](#CDU-09): Usuário visualiza seus dados ✔️
 - [CDU 10](#CDU-10): Usuário edita sua senha  
 - [CDU 11](#CDU-11): Usuário edita seu email
 - [CDU 12](#CDU-12): Usuário exclui sua conta ✔️
 - [CDU 13](#CDU-13): Administrador edita uma reserva ✔️
 - [CDU 14](#CDU-14): Administrador cadastra reserva ✔️
 - [CDU 15](#CDU-15): Administrador exclui uma reserva ✔️
 - [CDU 16](#CDU-16): Administrador e funcionário editam um pacote
 - [CDU 17](#CDU-17): Administrador edita funcionário e cliente
 - [CDU 18](#CDU-18): Cadastro do Administrador e do funcionário

## Lista dos Atores

 - Administrador
 - Funcionário
 - Usuário

## Diagrama de Casos de Uso

![Diagrama de casos de uso](/diagramas/diagrama-cdu.png)


## Descrição dos Casos de Uso

### CDU 01

Cliente, administrador e funcionário fazem login.


**Fluxo Principal**

1. Usuário pressiona o botão Login.
2. Um Pop-up aparece com a mensagem "O que você é para nós?".
3. Usuário seleciona uma das opções: cliente, funcionário.
4. Usuário pressiona o botão "Enviar".
5. Um Pop-up aparece com os campos a serem preenchidos.
6. Usuário insere o email corretamente.
7. Usuário insere a senha corretamente.
8. Usuário pressiona o botão "Enviar".
9. Usuário é redirecionado ao menu principal.

![image](https://user-images.githubusercontent.com/111150888/216793952-5c35ea92-6cb8-4d31-85ab-fbd9abc9d38c.png)

**Fluxo Alternativo A**

1. Usuário pressiona o botão Login.
2. Um Pop-up aparece com a mensagem "O que você é para nós?".
3. Usuário seleciona uma das opções: cliente, funcionário.
4. Usuário pressiona o botão "Enviar".
5. Um Pop-up aparece com os campos a serem preenchidos.
6. Usuário insere o email incorretamente.
7. Usuário insere a senha corretamente.
8. Usuário pressiona o botão "Enviar".
9. A página atualiza com os campos de e-mail e senha em branco.
10. Um pop-up aparece com a mensagem "Senha e/ou Email inválido(s)!".

![image](https://user-images.githubusercontent.com/111150888/216794063-543b536e-dc8b-46a6-93eb-5326952f2601.png)

**Fluxo Alternativo B**

1. Usuário pressiona o botão Login.
2. Um Pop-up aparece com a mensagem "O que você é para nós?".
3. Usuário seleciona uma das opções: cliente, funcionário ou administrador.
4. Usuário pressiona o botão "Enviar".
5. Um Pop-up aparece com os campos a serem preenchidos.
6. Usuário insere o email corretamente.
7. Usuário insere a senha incorretamente.
8. Usuário pressiona o botão "Enviar".
9. A página atualiza com os campos de e-mail e senha em branco.
10. Um pop-up aparece com a mensagem "Senha e/ou Email inválido(s)!"

### CDU 02

Cliente, funcionário e administrador fazem logout

**Fluxo Principal**

1. Usuário pressiona o botão "Logout".
2. O programa desconecta a conta.

![image](https://user-images.githubusercontent.com/111150888/216794327-7f018572-acc1-439f-ac43-8dd54f259085.png)


### CDU 03

Cliente se cadastra no site

**Fluxo Principal**

1. Usuário pressiona a mensagem "Ainda não tem conta?".
2. Um Pop-up aparece com o formulário de cadastro a ser preenchido".
3. O usuário preenche o campo "E-mail" com um e-mail não presente no banco de dados do programa.
4. O programa verifica a presença do e-mail no banco de dados.
5. Usuário preenche o campo "Senha".
6. Usuário preenche o campo "Confirme a senha"
7. Usuário preenche o campo "Nome" com seu nome completo.
8. Usuário preenche o campo "Data de Nascimento" com sua data de nascimento na formatação DD/MM/YY
9. Usuário pressiona botão "Enviar"
10. As informações inseridas pelo usuário são enviadas ao banco de dados
11. Usuário é redirecionado à página de login. 

![image](https://user-images.githubusercontent.com/111150888/216794404-4c0cbb0a-bccb-4883-9d76-355426be07b6.png)


**Fluxo Alternativo A**

1. Usuário pressiona a mensagem "Ainda não tem conta?".
2. Um Pop-up aparece com o formulário de cadastro a ser preenchido".
3. O usuário preenche o campo "E-mail" com um e-mail presente no banco de dados do programa.
4. O programa verifica a presença do e-mail no banco de dados.
5. O programa exibe uma mensagem de "email já cadastrado".
6. A página é atualizada com os campos em branco.

![image](https://user-images.githubusercontent.com/111150888/216794447-7f0ca590-30f3-4324-b508-164f90ab2804.png)


**Fluxo Alternativo B**

1. Usuário pressiona a mensagem "Ainda não tem conta?".
2. Um Pop-up aparece com o formulário de cadastro a ser preenchido".
3. O usuário preenche o campo "E-mail" com um e-mail não presente no banco de dados do programa.
4. O programa verifica a presença do e-mail no banco de dados.
5. Usuário preenche o campo "Senha".
6. Usuário preenche o campo "Nome" com seu nome incompleto.
7. O programa verifica a presença de um nome único.
8. o programa exibe uma mensagem de "complete o nome".
9. A página é atualizada com os campos em branco.

### CDU 04

Usuário reserva um horário para levar seu cachorro ao hotel.

**Fluxo Principal**

1. Ao clicar em "Reservas" e cadastrar o cachorro, o programa irá exibir as reservas disponíveis.
2. O cliente seleciona uma reserva.
3. O programa retorna um pop-up com os pacotes e cachorros cadastrados.
4. O usuário seleciona o pacote e o cachorro.
5. O usuário pressiona o botão "Reserva".
6. Reserva é armazenada no banco de dados.
7. O cliente é redirecionado as reservas feitas.

![image](https://user-images.githubusercontent.com/111150888/216797240-3fd27d1c-2467-4aac-8f01-8ce6759684e8.png)


**Fluxo Alternativo A**

1. Ao clicar em "Reservas" e cadastrar o cachorro, o programa irá exibir as reservas disponíveis.
2. O cliente seleciona uma reserva.
3. O programa retorna um pop-up com os pacotes e cachorros cadastrados.
4. O usuário não seleciona um dos pacotes.
5. 5. O usuário pressiona o botão "Reserva".
6. Um pop-up aparece com a mensagem "Selecione uma das opções".

![image](https://user-images.githubusercontent.com/111150888/216797251-f25ea0be-b3b7-4da9-8079-dda32f735be2.png)


**Fluxo Alternativo B**

1. Ao clicar em "Reservas" e cadastrar o cachorro, o programa irá exibir as reservas disponíveis.
2. O cliente seleciona uma reserva.
3. O programa retorna um pop-up com os pacotes e cachorros cadastrados.
4. O usuário não seleciona um dos cachorros.
5. 5. O usuário pressiona o botão "Reserva".
6. Um pop-up aparece com a mensagem "Selecione uma das opções"

![image](https://user-images.githubusercontent.com/111150888/216797294-9c0c053b-5755-4280-a180-13d965a0dff0.png)


### CDU 05

Usuário cadastra seu cachorro para fazer uma futura reserva

**Fluxo Principal**

1. No menu principal, usuário pressiona o botão "Reservas".
2. O programa retorna o forulário de cadastro de cachorro.
5. O usuário preenche o campo "Nome" com um texto de pelo menos 3 caracteres e sem caracteres especiais.
6. O programa verifica se o texto possui 3 caracteres ou mais e não possui caracteres especiais.
7. Usuário preenche o campo "Raça" com um texto com pelo menos 4 caracteres e sem caracteres especiais.
9. O programa verifica se o texto possui 4 caracteres ou mais e não possui caracteres especiais.
8. Usuário preenche o campo "Idade". 
9. Usuário pressiona botão "Enviar".
10. As informações inseridas pelo usuário são enviadas ao banco de dados.
11. Usuário é redirecionado aos horários disponíveis.

![image](https://user-images.githubusercontent.com/111150888/216795355-7889a134-8c7a-4e6b-9992-d7f9b1e9efb1.png)


**Fluxo Alternativo A**

1. No menu principal, usuário pressiona o botão "Reserva". 
2. O usuário  não  preenche o campo "Nome" ou qualquer outro campo requisitado. 
3. O programa retorna com uma mensagem de "Preencha todos os campos" 

![image](https://user-images.githubusercontent.com/111150888/216795369-b55791a7-646b-4748-b913-ec9daf639c7c.png)


**Fluxo Alternativo B**

1. No menu principal, usuário pressiona o botão "Reserva". 
2. O usuário  não  preenche o campo "Raça" ou qualquer outro campo requisitado. 
3. O programa retorna com uma mensagem de "Preencha todos os campos" 

**Fluxo Alternativo C**

1. No menu principal, usuário pressiona o botão "Reserva". 
2. O usuário  não  preenche o campo "Idade" ou qualquer outro campo requisitado. 
3. O programa retorna com uma mensagem de "Preencha todos os campos" 


### CDU 06

Cliente consulta os horários reservados

**Fluxo principal**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Exibir Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Exibir Reservas".
4. O programa irá imprimir uma mensagem com os dados referentes a reserva feita naquela conta.

![image](https://user-images.githubusercontent.com/111150888/216797460-03918a37-b34f-4f24-9935-0420b24f7f8e.png)


### CDU 07 

Funcionário,cliente e administrador recuperaram a senha.

**Fluxo Principal**

1. O usuário seleciona a opção "Recuperar a senha "
2. O sistema requisita um email de recuperaçao.
3. O usuário digita o email de recuperação e seleciona "Recuperar".
4. O sistema envia para o email inserido uma senha provisória que deve ser usada para login".
5. O sistema retorna uma mensagem de cconfirmação de email enviado.

**Fluxo Alternativo A**

1. O usuário seleciona a opção "Recuperar a senha "
2. O sistema requisita um email de recuperaçao.
3. O usuário digita um email que não consta no banco de dados para a recuperação e seleciona "Recuperar".
4. O sistema indentifica que não consta aquele email e imprime na tela "Email Inválido".


### CDU 08

Usuário visualiza pacotes.

**Fluxo Principal**

1. O usuário pressiona o botão "Pacotes".
2. Os pacotes da hotelaria são exibidos automaticamente.
3. Se o usuário desejar reserva-lo ele deve clicar em "Reservas " para assim fazer o cadastrado do cachorro e logo após reservar um horário. 

### CDU 09

Usuário visualiza seus dados da conta.

**Fluxo Principal**

1. O usuário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Mostrar Dados".
4. O programa irá imprimir uma mensagem com os dados referentes a conta do usuário. 


### CDU 10

Usuário altera sua senha.

**Fluxo Principal**

1. O usuário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Editar senha".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre a nova senha.
5. O programa imprime o campo "Antiga senha" afim do usuário preencher com sua antiga senha já cadastrada.
6. O programa imprime o campo " Nova Senha " afim do usuário preencher uma nova senha não cadastrada.
7. O programa imprime o campo "Confirme a senha" afim do usuário preencher com a mesma nova senha que ele preencheu no campo acima.
8. O usuário deve pressionar o botão "enviar" afim de ter o formulário concluído.

**Fluxo Alternativo A**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Editar senha".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre a nova senha.
5. O programa imprime o campo "Antiga senha" afim do usuário preencher com sua antiga senha já cadastrada.
6. O programa imprime o campo "Senha " afim do usuário preencher uma nova senha não cadastrada.
7. O programa imprime o campo "Confirme a senha",o usuário não preenche com a mesma nova senha que ele preencheu no campo acima.
8.O usuário deve pressionar o botão "enviar" afim de ter o formulário concluído. 
9. O programa não reconhce a nova senha cadastrada no banco de dados.
10. O formulário não poderá ser concluído com sucesso.

**Fluxo Alternativo B**

1. O usuário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Editar senha".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre a nova senha.
6. O programa imprime o campo "Antiga senha" afim do usuário preencher com sua antiga senha já cadastrada.
7. O usuário preenche o campo " Antiga senha" com a senha digitada errada.
8. O programa imprime o campo "Senha " afim do usuário preencher uma nova senha não cadastrada.
9. O programa imprime o campo "Confirme a senha" afim do usuário preencher com a mesma nova senha que ele preencheu no campo acima.
10. O usuário deve pressionar o botão "enviar" afim de ter o formulário concluído.
11.O programa não reconhce a antiga senha e imprime uma mensagem escrito " Antiga senha inválida".
12. O formulário não poderá ser concluído com sucesso.

### CDU 11   

Usuário altera seu email

**Fluxo Principal**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Editar email".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre um novo email.
5. O programa imprime o campo "novo email" afim do usuário preencher com seu novo email.
6. O programa imprime o campo "Digite sua Senha " afim do usuário preencher com sua senha já cadastrada.
7. O usuário deve pressionar o botão "enviar" afim de ter o formulário concluído.

**Fluxo Alternativo A**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Editar email".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre um novo email.   
5. O programa imprime o campo "email atual" afim do usuário preencher com seu novo email.
6. O programa imprime o campo "Digite sua Senha " afim do usuário preencher com sua senha já cadastrada.
7. O usuário preenche o campo senha com uma senha que não é a cadastrada de sua conta.
8. O usuário deve pressionar o botão "enviar" afim de ter o formulário concluído.
9.O programa não reconhce a senha e imprime uma mensagem escrito " Senha inválida".
10. O formulário não poderá ser concluído com sucesso. 

**Fluxo Alternativo B**

1. O usuário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Editar email".
6. O programa imprime o campo "email atual" afim do usuário preencher com seu novo email.
7. o usuário digita um email que jáestá sndo usado no site.
8. O programa imprime o campo "Digite sua Senha " afim do usuário preencher com sua senha já cadastrada.
9. O usuário deve pressionar o botão "enviar" afim de ter o formulário concluído.
10.O programa reconhce o novo email entretanto ele já não pode mais ser usado pois já está em uso, o sistema imprime uma mensagem escrito "Email inválido."".
11. O formulário não poderá ser concluído com sucesso.  

### CDU 12

Usuário deleta sua conta

**Fluxo Principal**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Excluir conta".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre a exclusão da conta.
5. O programa imprime o campo "Digite sua Senha " afim do usuário preencher com sua senha já cadastrada.
6. O usuário deve pressionar o botão "excluir" afim de ter o formulário concluído e a conta excluída.
7. Já com a conta excluída o usuário retorna para o menu principal.

**Fluxo Alternativo A** 

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Excluir conta".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre a exclusão da conta.
5. O programa imprime o campo "Digite sua Senha " afim do usuário preencher com sua senha já cadastrada.
6. O usuário preenche o campo "Digite sua Senha" com a senha errada.
7. O usuário deve pressionar o botão "excluir" afim de ter o formulário concluído e a conta excluída.
8.O programa não reconhce o email e imprime uma mensagem escrito "Senha inválida".
9. O formulário não poderá ser concluído com sucesso e nem a conta excluída.

### CDU 13

Administrador edita uma reserva

**Fluxo Principal**

1. Administrador clica em "Editar reserva".
2. O programa retorna um pop-up com o campo de alteração de horário.
3. Administrador preenche uma nova data e/ou horário e clica em "alterar".
4. Nova data e/ou horário é armazenada no banco de dados.

![image](https://user-images.githubusercontent.com/111150888/216796607-c82d449d-d3bc-45e2-b947-79a961fd78ca.png)


### CDU 14

Administrador cadastra uma reserva

**Fluxo Principal**

1. Administrador clica em "Cadastrar uma reserva".
2. O programa retorna um pop-up com os campos de cadastro.
3. Administrador preenche um ID não cadastrado no banco de dados.
4. Administrador preenche uma nova data e/ou horário e clica em "criar reserva".
5. Nova reserva é armazenada no banco de dados.

![image](https://user-images.githubusercontent.com/111150888/216797101-25ac5703-0daa-4490-ac5e-e319fb2de9f0.png)


**Fluxo Alternativo A**

1. Administrador clica em "Cadastrar uma reserva".
2. O programa retorna um pop-up com os campos de cadastro.
3. Administrador preenche um ID já cadastrado no banco de dados.
4. O programa retorna uma mensagem de alerta de ID já cadastrado.
5. Administrador clica em "ok".
6. Administrador volta para a página de cadastro.

![image](https://user-images.githubusercontent.com/111150888/216797059-31fdb10f-918f-48b5-b9a0-61198cdf2b01.png)


### CDU 15

Administrador exclui uma reserva

**Fluxo Principal**

1. Administrador clica em "excluir reserva".
2. O programa retorna um pop-up solicitando a senha do administrador.
3. Administrador insere sua senha e clica em "Excluir".
4. O programa exclui a reserva do banco de dados e redireciona o adm para "Reservas".

![image](https://user-images.githubusercontent.com/111150888/216796890-19ada627-3737-460c-b5b0-168f59abb119.png)


**Fluxo Alternativo**

1. Administrador clica em "excluir reserva".
2. O programa retorna um pop-up solicitando a senha do administrador.
3. Administrador insere uma senha incorreta e clica em "Excluir".
4. O programa retorna uma mensagem de aviso de senha incorreta.

![image](https://user-images.githubusercontent.com/111150888/216796932-f3fcf298-d4fe-4442-9d00-0b381b5960eb.png)


### CDU 16

Administrador e funcionário editam um pacote

**Fluxo Principal**

1. Usuário clica em "alterar pacote".
2. Programa retorna Um pop-up com os campos a serem alterados.
3. Usuário edita o(s) campo(s) desejado(s) e envia.
4. A alteração é armazenada no banco de dados.
5. Usuário é redirecionado a página dos pacotes.

### CDU 17

Administrador edita funcionário e cliente

**Fluxo principal**

1. Administrador clica em "Editar usuário".
2. O programa retorna um pop-up com os campos nome e email a serem editados.
3. Administrador preenche o campo desejado.
4. Administrador clica em "Enviar".
5. O programa armazena a edição no banco de dados.
6. O programa retorna uma mensagem de confirmação de edição.

**Fluxo Alternativo A**

1. Administrador clica em "Editar usuário".
2. O programa retorna um pop-up com os campos nome e email a serem editados.
3. Administrador preenche o campo desejado com dado inválido.
4. Administrador clica em "Enviar"..
6. O programa retorna uma mensagem de erro.

### CDU  18

Administrador e funcionário fazendo login

**Fluxo Principal**

1. O administrador pressiona o botão Login.
2. Um Pop-up aparece com a mensagem "O que você é para nós?".
3. Usuário seleciona uma das opções: cliente, funcionário/admin.
4. Usuário pressiona o botão "Enviar".
5. Um Pop-up aparece com os campos a serem preenchidos.
6. Usuário insere o email corretamente.
7. Usuário insere a senha corretamente.
8. Usuário insere CPF corretamente.
9. Usuário insere nome corretamente.
10.Usuário insere data de nascimento corretamente.
11.Caso o usuário queira se cadastrar como admin ele deve preencher o campo "código de amin", caso queira se cadastrar como funcionário ele não deve preencher este campo.
12.Usuário pressiona o botão "Enviar".
13.Usuário é redirecionado para o pop-up de login novamente.

**Fluxo Alternativo A**

1. O administrador pressiona o botão Login.
2. Um Pop-up aparece com a mensagem "O que você é para nós?".
3. Usuário seleciona uma das opções: cliente, funcionário/admin.
4. Usuário pressiona o botão "Enviar".
5. Um Pop-up aparece com os campos a serem preenchidos.
6. O usuário preenche algum dos campos como: CPf, nome,email,data de nascimento ou senha incorretamente.
12.Usuário pressiona o botão "Enviar".
13.Usuário é redirecionado para o pop-up de cadastrado novamente com a mensagem de erro referente ao espaço que foi diitado errado.
