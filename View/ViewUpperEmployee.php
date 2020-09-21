<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Formulario de Ingreso de Empleado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Assets/main.css">
    </head>
    <body>
        <div id="form">
            <table id="table">
                <thead>
                </thead>
                <tbody>
                <form action="./Controller/ControlerUpperEmployee.php">
                    <tr><td colspan="2"><h2 class="listHead">Alta Empleados</h2></td><td></td></tr>
                    <tr><th style="border-top:solid 1px">Código</th><td><input type="text" maxlenght="5" name="code" value=""></td></tr>
                    <tr><th>NIF</th><td><input type="text" name="nif" maxlenght="9" value=""></td></tr>
                    <tr><th>Apellidos</th><td><input type="text" name="surnames" value=""></td></tr>
                    <tr><th>Nombre</th><td><input type="text" name="name" value=""></td></tr>
                    <tr><th>Profesión</th><td><input type="text" name="profession" value=""></td></tr>
                    <tr><th>Salario</th><td><input type="number" name="salary" value=""></td></tr>
                    <tr><th>Fecha Nacimiento</th><td><input type="date" name="dateNac" value=""></td></tr>
                    <tr><th>Fecha Ingreso</th><td><input type="date" name="dateEntry" value=""></td></tr>
                    <tr><th>Código Departamento</th><td><input type="number" name="dptr" value=""></td></tr>
                    <tr><th>Dar Alta</th><td><button method="POST" type="submit"> Dar de Alta </button></td></tr>
                </form>    
                </tbody>
            </table>
        </div>
    </body>
</html>
