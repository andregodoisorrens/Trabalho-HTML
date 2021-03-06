<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Club Pet</title>

    <!--Linkagem de css e icone-->
    <link rel="stylesheet" href="./index.css">
    <link rel="icon" href="./imagens/PataAndré.png">

    <!--linkagem de fontes do Google-->
    <link rel="stylesheet" href="https://use.typekit.net/bdk2nle.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body >

    <!--Menu-->
    <section class="Martigem">        
            <a href="">
                <img src="./imagens/OLHA.png" id="logo" title="MENU" width="140px" height="140px">
            </a>   
        
            <img src="./imagens/CLUB POha.png" id="club" width="400px" height="400px">
            
        <div id="divBusca">
            <a href="">
                <img src="./imagens/lupa.png" id="btnBusca" alt="Buscar" title="PESQUISAR" width="100px" height="100px"/>
            </a>
        </div>
        
    </section>


         <!--Sub-Menu-->
            <section class="Menus">
                    <a href="./Home.html"> <img src="./imagens/inicio.png" id="ini" width="120px" height="70px" color="white" align="left" title="INICIO"> </a>

                    <a href="./produtos.html"> <img src="./imagens/PRODUTOS.png" id="pro" width="120px" height="70px" title="PRODUTOS"margin-right="59px" align="right" margi"10px" vspace="10px" hspace="10px"></a>
                
    
                        <a href="" title="CADASTRO" >
                            <img src="./imagens/Pata André1.png" id="logo" width="180px" height="180px" align="left" vspace="10px" hspace="10px">
                        </a>
                  

                        <a href="" > <img src="./imagens/SERVIÇOS.png" id="ser" width="120px" height="70px" title="SERVIÇOS" align="left" vspace="10px" hspace="10px"> </a>

                        <a href=""> <img src="./imagens/CONTATO.png" id="con" width="110px" height="60px" title="CONTATO" align="right" vspace="10px" hspace="10px"></a>
                        
            
            </section>
        
             
    
            <!--Formulario Parte 1-->
            <tr>
                                                      
                <td>
                    <div class="margem">
                     
                        <form id="CadastroPet">
                            <font color="#494949" font-family: 'Roboto', sans-serif; size="4rem"></font>
                                <table width="100%"><p id="palavras"> <font align="center" id="clubpet" color="#fe6749" size="50rem">Cadastro Pet</font></p> 

                                    <tr>
                                        <td width="20%" position="left"><h3> Nome do Animal </h3> </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" COLOR=Black name="Apelido" size="30" color="white" required></td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><h3> Raça do Animal</h3></td>
                                    </tr>
                                    <tr> 
                                        <td><input type="text" name="Raça do animal"  size="30" required>  </td>   
                                    </tr>          
                                    <tr>  
                                        <td><h3 width="20%"> Cor da pelagem </h3> </td>
                                    </tr>
                                    </tr>
                                        <td><input type="text" name="Cor" size="30" required> </td> 
                                    </tr>
                                    <tr>
                                        <td><h3 width="20%"> Especie do Animal </h3></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="Cor" size="30" required></td>
                                    </tr>
                                </table>

                                <!--Formulario parte 2-->
                                <div class="pn">
                                    <table style=" margin-left: 00px;">
                                    
                                        <tr>
                                            <td> <h3>Porte</h3> </td>
                                        </tr>
                                        <tr>
                                            <td><select name="Porte" width="30px" required>
                                                <option value="1" size="30"> Grande Porte </option>
                                                <option value="2" size="30"> Médio Porte </option>
                                                <option value="3" size="30"> Pequeno Porte </option>
                                            </select> 
                                        </tr>
                                        <tr>
                                            <td> <h3 width="20%"> Microchip </h3></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Microchip" size="30" required></td>
                                        </tr>  
                                        <tr>
                                            <td> <h3 width="20%"> Data de Aplicação </h3></td>
                                        </tr>    
                                        <tr>
                                            <td><input type="date" name="Data de Aplicação" size="40" required></td>
                                        </tr>    
                                        <tr>
                                            <td> <h3 width="20%"> Data de Cadastro </h3></td>
                                        </tr>   
                                        <tr>
                                            <td><input type="date" name="Data de Cadastro" size="40" required></td>
                                        </tr>                                   
                                        </table>
                                                                                
                                </div>
                                <!--Formulario parte 3-->

                                <p></p><br>
                                <p></p><br>

                                    <div class="soft">
                                        <table style="margin-left:00px;"> 
                                            <tr>
                                                <td> <h3 width="20%"> Sexo </h3></td>
                                            </tr>   
                                            <tr>
                                                <TD><input type="radio" name="Sexo" size="30" value="macho"> Macho
                                                <input type="radio" name="Fêmea" size="30" value="Fêmea">Fêmea</TD> 
                                            </tr> 
                                            <tr>
                                                <td> <h3 width="20%"> Observções </h3></td>
                                            </tr> 
                                            <tr>
                                                <td> <textarea name="Observações" cols="40" rows="5" required> </textarea>
                                            </tr>   
                                                <td> <h3 width="20%"> Foto do Animal </h3></td> 
                                            </tr>
                                            <tr>
                                                <td> <input type="file" name="Foto do Animal" size="25" required> 
                                            </tr>
                                        </table>
                                    </div>    

                                        <!--Formulario parte 4-->

                                    <p></p><br>
                                    <p></p><br>
                                    
                                    <div class="ponto">
                                        <IMG  src="./imagens/OLHA.png" width="300px" height="300px">
                                    </div>
                           
                                        <table> <p> <font align="center" style="color:#fe6749" size="50rem">Dados Pessoais</font></p>
                                            </center>
                                            <tr>
                                                <td width="20%"><h3> Nome</h3></td>
                                            </tr>
                                            <tr> 
                                                <td><input type="text" name="Nome"  size="25" required>  </td>   
                                            </tr>         
                                            <tr>
                                                <td width="20%"><h3> CPF</h3></td>
                                            </tr>
                                            <tr> 
                                                <td><input type="text" name="CPF"  size="25" required>  </td>   
                                            </tr> 
                                            <tr>
                                                <td width="20%"><h3> Numero de Telefone</h3></td>
                                            </tr>
                                            <tr> 
                                                <td><input type="tel" name="Numero do telefone"  size="25" placeholder="(99) 99 99999-9999" pattern="([0-2]{2} [0-9]{2} [0-9]{5}-[0-9]{4}" required>  </td> 
                                            </tr>
                                            <tr>
                                                <td width="20%"><h3> Forma de Pagamento</h3></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="Forma de Pagamento" required>
                                                        <option required>                                             
                                                            <option value="1" size="25"> Débito </option>
                                                            <option value="2" size="25"> Crédito </option>
                                                            <option value="3" size="25"> Boleto </option>
                                                            <option value="4" size="25"> Dinheiro </option>
                                                        </option>
                                                    </select> 
                                                </td>    
                                            </tr>

                                            <tr>
                                                <td width="20%"><h3> </h3>
                                                </td>
                                            </tr>  
                                        </table>

                                        <!--Formulario Parte 5-->
                                        <p></p><br>
                                        <p></p><br>

                                        caso de escolha de pagemento a vista se torna preciso levar o animal até a loja e pagar na loja <font color="red">(pode mudar a foma de pagamento a qualquer hora)</font>

                                    
                                    <div class="canen">
                                        <a href="./index.html">
                                            <button type="reset" class="button1"><img src="./imagens/Cancelar.png" title="CANCELAR" position="right" width="60px" height="40PX"></button>
                                        </a>
                                        <a href="./index.php">
                                            <button type="submit" class="button2"><img src="./imagens/ENVIAR.png" title="ENVIAR" POSITION="right" width="60px" height="40PX"></button>
                                        </a>
                                    </div>
                                    <!--Parte de PHP-->
                                    <?php
                                    session_name(dados)
                                    session_start();
                                    $_SESSION['Nome'] ='Name';
                                    $_SESSION['CPF']='CPF';
                                    ?>
                    </div>                
                </td>                    
            </tr>                
        </form>
    </body>  
</html>