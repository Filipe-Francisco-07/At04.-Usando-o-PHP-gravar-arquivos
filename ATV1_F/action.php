
<?php
    $username = $_POST['username'];
    $data = $_POST['nascimento'];
    $separa = str_split($data , 4);
    $int_separa = (int)$separa[0];
    $email = $_POST['email'];
    $insta = $_POST['insta'];
    $number = $_POST['number'];
    $recado = $_POST['recado'];
    $idade = (2022 - $int_separa); 

    if(isset($username) and strlen($username) > 3){
        echo('Olá '.$username.', você foi cadastrado com sucesso.'.'<br>');
    }else{
        header('location: FORM_CADASTRO.html');
    }
         
    if(isset($data)){
        echo ('Data: '.$data.'<br>');
    }else{
        header('location: FORM_CADASTRO.html');
    }  

    if(isset($idade)){
        echo ('Idade: '.$idade.'<br>');
    }else{
        header('location: FORM_CADASTRO.html');
    }    
    
    if(isset($email)and strlen($email) > 5){
        echo ('Email: '.$email.'<br>');
    }else{
        header('location: FORM_CADASTRO.html');
    }  

    if(isset($insta)and strlen($insta) > 3){
        echo ('Instagram: '.$insta.'<br>');
    }else{
        header('location: FORM_CADASTRO.html');
    } 
    
    if(isset($number) and strlen($number) >= 8){
        echo ('Número: '.$number.'<br>');
    }else{
        header('location: FORM_CADASTRO.html');
    }       
    
    if(isset($recado)and strlen($recado) > 3){
        echo ('Recado: '.$recado.'<br>');
    }else{
        header('location: FORM_CADASTRO.html');
    }

    if(isset($username) and isset($data) and isset($idade) and isset($email) and isset($insta) and isset($number) and isset($recado)){
        $vet = array ('Nome: '=>$username,'Data de Nascimento: '=>$data, 'Idade: '=>$idade,'Numero: '=>$number, 'Email: '=>$email,'Instagram: '=>$insta, 'Recado: '=>$recado);
        $cad = fopen('cadastros.txt', "a+", "\n");
        fwrite($cad, json_encode($vet)."\n");
        fclose($cad);
    }
?>



