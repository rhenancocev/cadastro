<!DOCTYPE html>
    <html>
        <head>
            <title> Cadastro </title>
            <meta charset="UTF-8">
        </head>	
            <body>
                <?php
                    echo "Seu nome:".$_POST['nome']."<br/>";
                    echo "Seu email:".$_POST['email']."<br/>";
                    echo "Sua data de nascimento :".$_POST['datanascimento']."<br/>";
                    echo "Seu sexo:".$_POST['sexo']."<br/>";
                    echo "Sua profissão:".$_POST['profissao']."<br/>";
                    echo "Seu telefone:".$_POST['telefone']."<br/>";
                    echo "Seu endereço:".$_POST['endereco']."<br/>";
                    echo "Sua cidade:".$_POST['cidade']."<br/>";
                    echo "Seu estado:".$_POST['estado']."<br/>";
                    echo "Seu cep:".$_POST['cep']."<br/>";
                ?>
            </body>
</html>