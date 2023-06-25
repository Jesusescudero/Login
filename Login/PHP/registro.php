<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Página Principal</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='./Estilo.css'>


</head>
<body>
    <?php
        $nombre=$_POST['Nombre'];
        $usuario = $_POST['Usuario1'];
        $correo = $_POST['correo'];
        $DateBirth = $_POST['fecha'];
        $Number = $_POST['Numero'];
        $contra = $_POST['psswd'];
        

    ?>
       <br><br><br><br>
    <div class="d1">
    <H2>Tu registro ha sido existoso. Acontinuación tus datos.</H2>
        <br><br>
        <table border="1">
            <tr>
                <td> Nombre Completo </td>
                <td> <?php echo($nombre); ?> </td>
            <tr>
                <td> Usuario </td>
                <td> <?php echo($usuario); ?> </td>
            <tr>
                <td> E-mail </td>
                <td> <?php echo($correo); ?> </td>
            <tr>
                <td> Fecha de Nacimiento </td>
                <td> <?php echo($DateBirth); ?> </td>
            <tr>                
                <td> Número Telefónico </td>
                <td> <?php echo($Number); ?> </td>
            <tr>                
                <td> Contraseña </td>
                <td> <?php echo($contra); ?> </td>
        </table>
    </div>
</body>
</html>