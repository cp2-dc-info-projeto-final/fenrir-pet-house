# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Fazer Login 
 - [CDU 02](#CDU-02): Fazer Logout  
 - [CDU 03](#CDU-03): Cadastro de cliente
 - [CDU 04](#CDU-04): Reserva de Horário
 - [CDU 05](#CDU-05): Cadastro de Cachorro 
 - [CDU 06](#CDU-06): Consulta do usuário nos horários reservados 
 - [CDU 07](#CDU-07): Recuperação de senha por cliente
 - [CDU 08](#CDU-08): Visualizar pacotes
 - [CDU 09](#CDU-09): Usuário visualiza seus dados
 - [CDU 10](#CDU-10): Cliente. administrador e funcionário editam sua senha  
 - [CDU 11](#CDU-11): Cliente. administrador e funcionário editam seu email
 - [CDU 12](#CDU-12): Cliente. administrador e funcionário excluem sua conta 
 - [CDU 13](#CDU-13): Administrador edita a reserva
 - [CDU 14](#CDU-14): Administrador cadastra reserva
 - [CDU 13](#CDU-13): Administrador excluir a reserva  
 - [CDU 15](#CDU-15): Cadastro do Administrador e do funcionário

## Lista dos Atores

 - Administrador
 - Funcionário
 - Usuário

## Diagrama de Casos de Uso

![Diagrama de casos de uso](/diagramas/diagrama-cdu.png)


## Descrição dos Casos de Uso

### CDU 01

Cliente, administrador e funcionário fazem login.
![Diagrama de CDU-01](Csos_2.png)
![Diagrama de CDU-01](CASOS-USO-ALTERNATIVO-1_1.png)


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

### CDU 03

Cliente se cadastra no site

![Diagrama de CDU-02](Csos_4.png)
![Diagrama de CDU-02](CASOS-USO-ALTERNATIVO-1_2.png)

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

**Fluxo Alternativo A**

1. Usuário pressiona a mensagem "Ainda não tem conta?".
2. Um Pop-up aparece com o formulário de cadastro a ser preenchido".
3. O usuário preenche o campo "E-mail" com um e-mail presente no banco de dados do programa.
4. O programa verifica a presença do e-mail no banco de dados.
5. O programa exibe uma mensagem de "email já cadastrado".
6. A página é atualizada com os campos em branco.

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

![Diagrama de CDU-03](Csos_6.png)
![Diagrama de CDU-03](CASOS-USO-ALTERNATIVO-1_3.png)

**Fluxo Principal**

1. No menu principal, usuário pressiona o botão "Reservas".
2. O programa retorna tres pop-ups com os pacotes disponíveis
3. O usuário já logado pode visualizar os horários para reserva clicando em "reservas" no menu.
4. Se o usuário já tiver seu cachorro cadastrado ele deve escolher o pacote desejado.
5. O usuário é redirecionado a os horários e datas disponíveis onde ele escolhe os dias em que pretende reservar.
6. O programa verifica os dias e os horários selecionados.
7. O usuário seleciona um dos cachorros cadastrados por ele para a reserva.
8. O usuário pressiona o botão "Reserva" 
9. Usuário é redirecionado ao menu principal
10. Um pop-up aparece com a mensagem "Reserva confirmada com sucesso.".

**Fluxo Alternativo A**

1. Usuário pressiona o botão "Reserva".
2. Usuário é redirecionado a os horários onde escolhe os dias que pretende reservar.
3. O programa verifica os dias selecionados.
5. Usuário seleciona um dos dias com horários disponíveis.
6. O programa retorna com os pacotes e cães cadastrados para serem selecionados.
7. O usuário não seleciona um dos pacotes.
8. Um pop-up aparece com a mensagem "Selecione uma das opções".

**Fluxo Alternativo B**

1. Usuário pressiona o botão "Reserva".
2. Usuário é redirecionado a os horários onde escolhe os dias que pretende reservar.
3. O programa verifica os dias selecionados.
5. Usuário seleciona um dos dias com horários disponíveis.
6. O programa retorna com os pacotes e caes cadastrados para serem selecionados.
7. O usuário não seleciona um dos cães cadastrados.
8. Um pop-up aparece com a mensagem "Selecione uma das opções".


### CDU 05

Usuário cadastra seu cachorro para fazer uma futura reserva

![Diagrama de CDU-04](Csos_7.png)
![Diagrama de CDU-04](CASOS-USO-ALTERNATIVO-1_4.png)

**Fluxo Principal**

1. No menu principal, usuário pressiona o botão "Reservas".
2. O programa retorna tres pop-ups com o formulário do cadastro do cachorro.
5. O usuário preenche o campo "Nome" com um texto de pelo menos 3 caracteres e sem caracteres especiais.
6. O programa verifica se o texto possui 3 caracteres ou mais e não possui caracteres especiais.
7. Usuário preenche o campo "Raça" com um texto com pelo menos 4 caracteres e sem caracteres especiais.
9. O programa verifica se o texto possui 4 caracteres ou mais e não possui caracteres especiais.
8. Usuário preenche o campo "Idade". 
9. Usuário pressiona botão "Enviar".
10. As informações inseridas pelo usuário são enviadas ao banco de dados.
11. Usuário é redirecionado aos horários disponíveis.

**Fluxo Alternativo A**

1. No menu principal, usuário pressiona o botão "Reserva". 
2. O usuário  não  preenche o campo "Nome" ou qualquer outro campo requisitado. 
3. O programa retorna com uma mensagem de "Preencha todos os campos" 

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

![Diagrama de CDU-06](Csos_7.png)
![Diagrama de CDU-06](CASOS-USO-ALTERNATIVO-1_6.png)

**Fluxo principal**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Exibir Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Exibir Reservas".
4. O programa irá imprimir uma mensagem com os dados referentes a reserva feita naquela conta. 

### CDU 07 

Funcionário,cliente e administrador recuperaram a senha.

**Fluxo Principal**

1. O usuário seleciona a opção "Recuperar a senha "
2. O sistema requisita um email de recuperaçao.
3. O usuário digita o email de recuperação e seleciona "Recuperar".
4. O sistema envia uma senha provisória que deve ser usada para login".
5. O usuário é redirecionado para o pop-up de Recuperar Senha agora com os campos em branco.

**Fluxo Alternativo A**

1. O usuário seleciona a opção "Recuperar a senha "
2. O sistema requisita um email de recuperaçao.
3. O usuário digita um email que não consta no banco de dados para a recuperação e seleciona "Recuperar".
4. O sistema indentifica que não consta aquele email e imprime na tela "Email Inválido".
5. O usuário é redirecionado para o pop-up de Recuperar Senha agora com os campos em branco.


### CDU 08

Usuário visualiza pacotes.

**Fluxo Principal**

1. O usuário pressiona o botão "Pacotes".
2. Os pacotes da hotelaria são exibidos automaticamente.
3. Se o usuário desejar reserva-lo ele deve clicar em "Reservas " para assim fazer o cadastrado do cachorro e logo após reservar um horário. 

### CDU 09

Cliente visualiza seus dados da conta.

**Fluxo Principal**

1. O usuário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Mostrar Dados".
4. O programa irá imprimir uma mensagem com os dados referentes a conta do usuário. 


### CDU 10

Cliente altera sua senha.

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

Usuário deletar a conta

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

1. 



###  CDU  14

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














