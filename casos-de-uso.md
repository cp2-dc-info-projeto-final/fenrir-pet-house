# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Fazer Login ✔️ 
 - [CDU 02](#CDU-02): Fazer Logout ✔️ 
 - [CDU 03](#CDU-03): Cadastro de usuário ✔️ 
 - [CDU 04](#CDU-04): Reserva de Horário ✔️
 - [CDU 05](#CDU-05): Cadastro de Cachorro 
 - [CDU 06](#CDU-06): Consulta do usuário nos horários reservados ✔️
 - [CDU 07](#CDU-07): Recuperação de senha por cliente
 - [CDU 08](#CDU-08): Visualizar pacotes
 - [CDU 09](#CDU-09): Usuário visualiza seus dados
 - [CDU 10](#CDU-10): Usuário edita sua senha ✔️ 
 - [CDU 11](#CDU-11):Usuário edita seu email
 - [CDU 12](#CDU-12):Usuário exclui sua conta ✔️ 
 - [CDU 13](#CDU-13) Administrador edita a reserva ✔️ 

## Lista dos Atores

 - Administrador
 - Funcionário
 - Usuário

## Diagrama de Casos de Uso

![Diagrama de casos de uso](/diagramas/diagrama-cdu.png)


## Descrição dos Casos de Uso

### CDU 01

Cliente, funcionário e administrador fazem login.
![Diagrama de CDU-01](Csos_2.png)
![Diagrama de CDU-01](CASOS-USO-ALTERNATIVO-1_1.png)


**Fluxo Principal**

1. Usuário pressiona o botão Login.
2. Um Pop-up aparece com a mensagem "O que você é para nós?".
3. Usuário seleciona uma das opções: cliente, funcionário ou administrador.
4. Usuário pressiona o botão "Enviar".
5. Um Pop-up aparece com os campos a serem preenchidos.
6. Usuário insere o email corretamente.
7. Usuário insere a senha corretamente.
8. Usuário pressiona o botão "Enviar".
9. Usuário é redirecionado ao menu principal.

**Fluxo Alternativo A**

1. Usuário pressiona o botão Login.
2. Um Pop-up aparece com a mensagem "O que você é para nós?".
3. Usuário seleciona uma das opções: cliente, funcionário ou administrador.
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

Usuário faz logout

**Fluxo Principal**

1. Usuário pressiona o botão "Logout".
2. O programa desconecta a conta.

### CDU 03

Usuário se cadastra no site

![Diagrama de CDU-02](Csos_4.png)
![Diagrama de CDU-02](CASOS-USO-ALTERNATIVO-1_2.png)

**Fluxo Principal**

1. Usuário pressiona a mensagem "Ainda não tem conta?".
2. Um Pop-up aparece com o formulário de cadastro a ser preenchido".
3. O usuário preenche o campo "E-mail" com um e-mail não presente no banco de dados do programa.
4. O programa verifica a presença do e-mail no banco de dados.
5. Usuário preenche o campo "Senha".
6. Usuário preenche o campo "Nome" com seu nome completo.
7. Usuário preenche o campo "Data de Nascimento" com sua data de nascimento na formatação DD/MM/YY
8. Usuário pressiona botão "Enviar"
9. As informações inseridas pelo usuário são enviadas ao banco de dados
10. Usuário é redirecionado à página de login. 

**Fluxo Alternativo A**

1. Usuário pressiona a mensagem "Ainda não tem conta?".
2. Um Pop-up aparece com o formulário de cadastro a ser preenchido".
3. O usuário preenche o campo "E-mail" com um e-mail presente no banco de dados do programa.
4. O programa verifica a presença do e-mail no banco de dados.
5. A página é atualizada com os campos em branco.

**Fluxo Alternativo B**

1. Usuário pressiona a mensagem "Ainda não tem conta?".
2. Um Pop-up aparece com o formulário de cadastro a ser preenchido".
3. O usuário preenche o campo "E-mail" com um e-mail não presente no banco de dados do programa.
4. O programa verifica a presença do e-mail no banco de dados.
5. Usuário preenche o campo "Senha".
6. Usuário preenche o campo "Nome" com seu nome incompleto.
7. O programa verifica a presença de mais de um nome.
8. A página é atualizada com os campos em branco.

### CDU 04

Usuário reserva um horário para levar seu cachorro ao hotel.

![Diagrama de CDU-03](Csos_6.png)
![Diagrama de CDU-03](CASOS-USO-ALTERNATIVO-1_3.png)

**Fluxo Principal**

1. No menu principal, usuário pressiona o botão "Reservas".
2. O programa retorna tres pop-ups com os pacotes disponíveis e contendo abaixo os formulários do cadastro do cachorro.
3. Se o usuário já tiver seu cachorro cadastrado ele deve escolher o pacote desejado.
4. O usuário é redirecionado a os horários e datas disponíveis onde ele escolhe os dias em que pretende reservar.
5. O programa verifica os dias e os horários selecionados.
6. O usuário seleciona um dos cachorros cadastrados por ele para a reserva.
7. O usuário pressiona o botão "Confirmar Reserva" 
8. Um pop-up aparece com a mensagem "Tem certeza que deseja confirmar a reserva?"
9. Usuário pressiona o botão "Sim"
10. Usuário é redirecionado ao menu principal
11. Um pop-up aparece com a mensagem "Reserva confirmada com sucesso.".

**Fluxo Alternativo A**

1. Usuário pressiona o botão "Reservas".
2. Usuário é redirecionado a um calendário onde escolhe os dias que pretende reservar.
3. O programa verifica os dias selecionados.
5. O usuário seleciona uma das datas sem horários disponíveis.
6. Um pop-up aparece com a mensagem "Esse quarto não está disponível".

**Fluxo Alternativo B**

1. Usuário pressiona o botão "Reservas".
2. Usuário é redirecionado a um calendário onde escolhe os dias que pretende reservar.
3. O programa verifica os dias selecionados.
5. Usuário seleciona um dos dias com horários disponíveis.
6. O programa retorna os horários disponíveis e indisponíveis.
7. O usuário seleciona um dos horários indisponíveis.
8. Um pop-up aparece com a mensagem "Esse horário não está disponível".

### CDU 05

Usuário cadastra seu cachorro para fazer uma futura reserva

![Diagrama de CDU-04](Csos_7.png)
![Diagrama de CDU-04](CASOS-USO-ALTERNATIVO-1_4.png)

**Fluxo Principal**

1. No menu principal, usuário pressiona o botão "Reservas".
2. O programa retorna tres pop-ups com os pacotes disponíveis e contendo abaixo os formulários do cadastro do cachorro.
3. O usuário preenche o campo "Digite seu email" com um texto de pelo menos 3 caracteres e com caracteres especiais.
4. O programa verifica se o texto possui 3 caracteres ou mais e se possui caracteres especiais. 
5. O usuário preenche o campo "Nome" com um texto de pelo menos 3 caracteres e sem caracteres especiais.
6. O programa verifica se o texto possui 3 caracteres ou mais e não possui caracteres especiais.
7. O programa retorna a mensagem "Nome válido".
8. Usuário preenche o campo "Raça" com um texto com pelo menos 4 caracteres e sem caracteres especiais.
9. O programa verifica se o texto possui 4 caracteres ou mais e não possui caracteres especiais.
10. O programa retorna a mensagem "Raça válida".
11. Usuário preenche o campo "Idade" com um numeral.
12. O programa verifica se o texto só possui numerais. 
13. Usuário pressiona botão "Enviar".
14. As informações inseridas pelo usuário são enviadas ao banco de dados.
15. Usuário é redirecionado ao menu principal.

**Fluxo Alternativo A**

1. No menu principal, usuário pressiona o botão "Reservas". 
2. O usuário preenche o campo "Digite seu email" com um texto com caracteres especiais. 
3. O programa verifica se o texto possui 3 caracteres ou mais e se possui caracteres especiais. 
4. O programa verifica se o email já esta registrado no banco de dados, caso sim o programa imprime uma mensagem. 
5. O programa retorna a mensagem "Email inválido." 

**Fluxo Alternativo B**

1. No menu principal, usuário pressiona o botão "Reservas". 
2. O usuário preenche o campo "Nome" com um texto com menos de 3 caracteres e sem caracteres especiais. 
3. O programa verifica se o texto possui 3 caracteres ou mais e não possui caracteres especiais. 
4. O programa retorna a mensagem "Nome inválido"

**Fluxo Alternativo C**

1. No menu principal, usuário pressiona o botão "Reservas". 
2. O usuário preenche o campo "Raça" com um texto com menos de 4 e caracteres com caracteres especiais. 
3. O programa verifica se o texto possui 4 caracteres ou mais e não possui caracteres especiais. 
4. O programa retorna a mensagem "Raça inválida." 

**Fluxo Alternativo D**

1. No menu principal, usuário pressiona o botão "Reservas". 
2. O usuário preenche o campo "Idade" com um texto com caracteres especiais. 
3. O programa verifica se o conteúdo é em formato de numeral, caso nao o programa imprime uma mensagem. 
4. O programa retorna a mensagem "Raça inválida." 



### CDU 06

Cliente consulta os horários reservados

![Diagrama de CDU-06](Csos_7.png)
![Diagrama de CDU-06](CASOS-USO-ALTERNATIVO-1_6.png)

**Fluxo principal**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Mostrar Reservas".
4. O programa irá imprimir uma mensagem com os dados referentes a reserva feita naquela conta. 

### CDU 07 

Funcionário e cliente recuperaram a senha.

**Fluxo Principal**

1. O usuário seleciona a opção "Recuperar a senha "
2. O sistema requisita um email de recuperaçao.
3. O usuário digita o email de recuperação e seleciona "Recuperar".
4. O sistema envia uma senha provisória que deve ser usada para login".
5. O usuário é redirecionado à página de login.

### CDU 08

Usuário visualiza pacotes.

**Fluxo Principal**

1. O usuário pressiona o botão "Reservas".
2. Os pacotes da hotelaria são exibidos automaticamente.
3. O usuário deve preencher o cadastro do cachorro afim de escolher um pacote desejado.

**Fluxo Alternativo A**

1. O usuário pressiona o botão "Reservas".
2. Os pacotes da hotelaria são exibidos automaticamente.
3. O usuário não preenche o cadastro do cachorro.
4. O sistema retorna com a não identificação do cachorro assim impossibilitando a seleção do pacote.


### CDU 09

Cliente visualiza seus dados da conta.

**Fluxo Principal**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Mostrar Dados".
4. O programa irá imprimir uma mensagem com os dados referentes aos dados do usuário. 


### CDU 10

Cliente altera sua senha.

**Fluxo Principal**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Editar senha".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre a nova senha.
5. O programa imprime o campo "email" afim do usuário preencher com seu email já cadastrado.
6. O programa imprime o campo "Antiga senha" afim do usuário preencher com sua antiga senha já cadastrada.
7. O programa imprime o campo "Senha " afim do usuário preencher uma nova senha não cadastrada.
8. O programa imprime o campo "Confirme a senha" afim do usuário preencher com a mesma nova senha que ele preencheu no campo acima.
9. O usuário deve pressionar o botão "enviar" afim de ter o formulário concluído.

**Fluxo Alternativo A**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Editar senha".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre a nova senha.
5. O programa imprime o campo "email".
6. O usuário preenche com um email  não cadastrado.
7. O programa imprime o campo "Antiga senha" afim do usuário preencher com sua antiga senha já cadastrada.
8. O programa imprime o campo "Senha " afim do usuário preencher uma nova senha não cadastrada.
9. O programa imprime o campo "Confirme a senha" afim do usuário preencher com a mesma nova senha que ele preencheu no campo acima.
10.O usuário deve pressionar o botão "enviar" afim de ter o formulário concluído. 
11. O programa não reconhce o email não cadastrado no banco de dados.
12. O formulário não poderá ser concluído com sucesso.

**Fluxo Alternativo B**

1. O usuário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Editar senha".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre a nova senha.
5. O programa imprime o campo "email" afim do usuário preencher com seu email já cadastrado.
6. O programa imprime o campo "Antiga senha" afim do usuário preencher com sua antiga senha já cadastrada.
7. O usuário preenche o campo " Antiga senha" com a senha digitada errada.
8. O programa imprime o campo "Senha " afim do usuário preencher uma nova senha não cadastrada.
9. O programa imprime o campo "Confirme a senha" afim do usuário preencher com a mesma nova senha que ele preencheu no campo acima.
10. O usuário deve pressionar o botão "enviar" afim de ter o formulário concluído.
11.O programa não reconhce a antiga senha e imprime uma mensagem escrito " Antiga senha incorreta".
12. O formulário não poderá ser concluído com sucesso.

**Fluxo Alternativo C**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Editar senha".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre a nova senha.
5. O programa imprime o campo "email" afim do usuário preencher com seu email já cadastrado.
6. O programa imprime o campo "Antiga senha" afim do usuário preencher com sua antiga senha já cadastrada.
7. O programa imprime o campo "Senha " afim do usuário preencher uma nova senha não cadastrada.
8. O programa imprime o campo "Confirme a senha" afim do usuário preencher com a mesma nova senha que ele preencheu no campo acima.
9. O usuário erra ao digitar a senha novamente no campo "Confirme a senha".
10. O usuário deve pressionar o botão "enviar" afim de ter o formulário concluído.
11.O programa não reconhce a nova senha e imprime uma mensagem escrito " Antiga senha incorreta".
12. O formulário não poderá ser concluídom com sucesso.
13. O programa não reconhce a nova senha e imprime uma mensagem escrito " Antiga senha incorreta".
12. O formulário não poderá ser concluído com sucesso.

### CDU 13

Usuário altera seu email

**Fluxo Principal**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Editar email".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre um novo email.
5. O programa imprime o campo "email atual" afim do usuário preencher com seu email já cadastrado.
6. O programa imprime o campo "novo email" afim do usuário preencher com seu novo email.
7. O programa imprime o campo "Digite sua Senha " afim do usuário preencher com sua senha já cadastrada.
8. O usuário deve pressionar o botão "enviar" afim de ter o formulário concluído.

**Fluxo Alternativo A**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Editar email".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre um novo email.
5. O programa imprime o campo "email atual" afim do usuário preencher com seu email já cadastrado.
6. O usuário o preenche o campo com o email antigo errado.
7. O programa imprime o campo "novo email" afim do usuário preencher com seu novo email.
8. O programa imprime o campo "Digite sua Senha " afim do usuário preencher com sua senha já cadastrada.
9. O usuário deve pressionar o botão "enviar" afim de ter o formulário concluído.
10.O programa não reconhce o antigo email e imprime uma mensagem escrito " Email antigo incorreto".
11. O formulário não poderá ser concluído com sucesso. 

**Fluxo Alternativo B**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Editar email".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre um novo email.
5. O programa imprime o campo "email atual" afim do usuário preencher com seu email já cadastrado.
6. O programa imprime o campo "novo email" afim do usuário preencher com seu novo email.
7. O programa imprime o campo "Digite sua Senha " afim do usuário preencher com sua senha já cadastrada.
8. O usuário preenche o campo "Digite a senha" com uma senha não cadastrada no campo de dados.
9. O usuário deve pressionar o botão "enviar" afim de ter o formulário concluído.
10.O programa não reconhce a antiga senha e imprime uma mensagem escrito " Senha antiga incorreta".
11. O formulário não poderá ser concluído com sucesso.  

### CDU 12

Usuário deseja deletar a conta

**Fluxo Principal**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Excluir conta".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre a exclusão da conta.
5. O programa imprime o campo "Digite seu email" afim do usuário preencher com seu email já cadastrado.
6. O programa imprime o campo "Digite sua Senha " afim do usuário preencher com sua senha já cadastrada.
7. O usuário deve pressionar o botão "excluir" afim de ter o formulário concluído e a conta excluída.
8. Já com a conta excluída o usuário retorna para o menu principal.

**Fluxo Alternativo A**

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Excluir conta".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre a exclusão da conta.
5. O programa imprime o campo "Digite seu email" afim do usuário preencher com seu email já cadastrado.
6. O usuário preenche o campo "Digite seu email" com um email errado.
7. O programa imprime o campo "Digite sua Senha " afim do usuário preencher com sua senha já cadastrada.
8. O usuário deve pressionar o botão "excluir" afim de ter o formulário concluído e a conta excluída.
9.O programa não reconhce o email e imprime uma mensagem escrito " Email incorreto".
11. O formulário não poderá ser concluído com sucesso e nem a conta excluída.

**Fluxo Alternativo B** 

1. O usário pressiona o botão "conta".
2. O programa retornará com um pop-up com os seguintes tópicos:Editar senha, Mostrar dados, Mostrar Reserva, Editar email e Excluir conta.
3. O usuário deve pressionar o tópico "Excluir conta".
4. O programa irá imprimir um formulário com campos a serem preenchidos sobre a exclusão da conta.
5. O programa imprime o campo "Digite seu email" afim do usuário preencher com seu email já cadastrado.
7. O programa imprime o campo "Digite sua Senha " afim do usuário preencher com sua senha já cadastrada.
8. O usuário preenche o campo "Digite sua Senha" com a senha errada.
9. O usuário deve pressionar o botão "excluir" afim de ter o formulário concluído e a conta excluída.
10.O programa não reconhce o email e imprime uma mensagem escrito "Senha incorreta".
11. O formulário não poderá ser concluído com sucesso e nem a conta excluída.

### CDU 13

Administrador pode editar a reserva

**Fluxo Principal**

1. O administrador após logar no site deve pressionar o botão conta.
2. Um pop-up aparecerá com os seguintes tópicos: Funcionários, clientes e serviços.
3. O administrador deve pressionar o botão "serviços".
4. No pop-up "serviços" o administrador poderá alterar a reserva e a descrição dos serviços.
5. O administrador deve pressionar o botão "Alterar Descrição".


















