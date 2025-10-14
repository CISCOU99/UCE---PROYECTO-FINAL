<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/LOGORESTAURANTE.png">
    <LINK REL=StyleSheet HREF="reserformes.css" TYPE="text/css" MEDIA=screen>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

    </style>
    <center>
        <table width="100%" align="center" border="0">
            <tr>
                <td rowspan="2">
                    <center><b><img id="imgredes" src="img/horario.png" width=40 height=40></b></center>
                </td>
                <td>
                    <center><b><i>
                                <font color=red>Lunes - Sabados</font>
                            </i></b></center>
                </td>
                <td rowspan="2">
                    <center><b><img id="imgredes" src="img/contacto.png" width=40 height=40></b></center>
                </td>
                <td>
                    <center><b><i>
                                <font color=red>Contactos</font>
                            </i></b></center>
                </td>
                <td rowspan="2">
                    <center><b><img id="imgredes" src="img/Direccion.png" width=40 height=40></b></center>
                </td>
                <td>
                    <center><b><i>
                                <font color=red>Direccion</font>
                            </i></b></center>
                </td>
                <td rowspan="2">
                    <center><b><img id="imgredes" src="img/correo.png" width=40 height=40></b></center>
                </td>
                <td>
                    <center><b><i>
                                <font color=red>Correo electronico</font>
                            </i></b></center>
                </td>
            </tr>
            <td>
                <center><b><a title="" target="_red">09:30 a 17:30</a></b></center>
            </td>
            <td>
                <center><b><a href="https://wa.link/7gku5h" title="Hacer Clic" target="_red">0983532280</b></a></center>
            </td>
            <td>
                <center><b><a
                            href="https://www.google.com/maps/place/Cuero+y+Caicedo+%26+Versalles,+Quito+170129/@-0.1908223,-78.4976846,17z/data=!3m1!4b1!4m6!3m5!1s0x91d59a664cc084b3:0xdb23738d35fc892d!8m2!3d-0.1908277!4d-78.4951097!16s%2Fg%2F11gf37ntcv"
                            title="Hacer Clic" target="_red">Cuero y Caicedo y Versalles</b></a></center>
            </td>
            <td>
                <center><b>
                        <address><a href="#contacto">ramontoala63@gmail.com</address>
                    </b></a></center>
            </td>
            </tr>
        </table>
    </center>
    <br>
    <center>
        <a href="inicio.html"><img id="imgredes" src="img/LOGORESTAURANTE.png" width=150 height=150></a><br><br>
        <b>
            <hr width=20% color=black>
        </b>
        <p><b>
                <font color=white>Mezcla de Costa y Sierra</font>
            </b></p>

    </center>

    <title>RESERVACIÓN - LA HUECA MANABA</title>
</head>

<body style="background-color: aqua;">
    <main>
        <header style="color:#03702d; text-align: center;">
            <center>
                <H1 id="titulo">LA HUECA MANABA - RESERVACIÓN</H1>
            </center>
            </hearder>
    </main>

    <center>
        <H1>Datos de la reservación</H1>
    </center>

    <fieldset style="background-color:#64636380">
	<legend><strong>INFORMACIÓN PERSONAL</strong></legend>

<?php
header('Content-Type: text/html; charset=UTF-8;');

if (!empty($_POST["apellidos"])) {
    $apell = $_POST["apellidos"];

    if (!empty($_POST["nombres"])) {
        $nomb = $_POST["nombres"];

        if (!empty($_POST["cedula"])) {
            $ced = $_POST["cedula"];

        if (!empty($_POST["edad"])) {
            $eda = $_POST["edad"];

            if (!empty($_POST["celular"])) {
                $celu = $_POST["celular"];

                if (!empty($_POST["correo"])) {
                    $corr = $_POST["correo"];

            $menapell="APELLIDOS: ";
            $mennom="NOMBRES: ";
            $menced="CÉDULA: ";
            $menedad="EDAD: ";
            $mencelu="CELULAR: ";
            $mencorr="CORREO: ";

            print $menapell . $apell . "<br>";
            print $mennom . $nomb . "<br>";
            print $menced . $ced . "<br>";
            print $menedad . $eda . "<br>";
            print $mencelu . $celu . "<br>";
            print $mencorr . $corr . "<br>";

            if (!empty($_POST["genero"])) {
                $gene = $_POST["genero"];

                if ($gene == "masculino") {
                    $sex = "GÉNERO: ";
                    $mas = "MASCULINO";
                    $fem = "FEMENINO";
                    $otro = "OTRO";
                    print $sex . $mas;
                } else {
                    if ($gene == "femenino") {
                        $sex = "GÉNERO: ";
                        $fem = "FEMENINO";
                        print $sex . $fem;
                    } else {
                        if ($gene == "otro") {
                            $sex = "GÉNERO: ";
                            $otro = "OTRO";
                            print $sex . $otro;
                        }

                        }
                    }
                }
            }

        }
    }

        }
    }
}
?>
</fieldset><br>

<fieldset style="background-color:#64636380">
	<legend><strong>ELECCIÓN DE MESA</strong></legend>

<?php
header('Content-Type: text/html; charset=UTF-8;');

if (!empty($_POST["selectmesa"])) {
    $selmesa = $_POST["selectmesa"];

    if ($selmesa == "Mesa 1") {
        $mesa = "Mesa 1";
        print ("Mesa seleccionada: ") . $mesa . "<br>";
    } else {

        if ($selmesa == "Mesa 2") {
            $mesa = "Mesa 2";
            print ("Mesa seleccionada: ") . $mesa . "<br>";
        } else {
            if ($selmesa == "Mesa 3") {
                $mesa = "Mesa 3";
                print ("Mesa seleccionada: ") . $mesa . "<br>";
            } else {

                if ($selmesa == "Mesa 4") {
                    $mesa = "Mesa 4";
                    print ("Mesa seleccionada: ") . $mesa . "<br>";
                } else {

                    if ($selmesa == "Mesa 5") {
                        $mesa = "Mesa 5";
                        print ("Mesa seleccionada: ") . $mesa . "<br>";
                    } else {
                        if ($selmesa == "") {
                            $mesa = "No ha seleccionado una mesa";
                            print $mesa . "<br>";
                        }
                    }
                }
            }
        }
    }
}

if (!empty($_POST["fecha"])) {
    $fech = $_POST["fecha"];

    $menfech = "Fecha de reservación: ";

			print $menfech . $fech . "<br>";
		}

        if (!empty($_POST["hora"])) {
            $hora = $_POST["hora"];
        
            $menhora = "Hora de reservación: ";
        
                    print $menhora . $hora . "<br>";
                }
?>
</fieldset><br>

<fieldset style="background-color:#64636380">
	<legend><strong>DATOS DEL ACOMPAÑANTE</strong></legend>
<?php

if (!empty($_POST["nacom"])) {
    $nacomp = $_POST["nacom"];

    if (!empty($_POST["apellidoaco"])) {
        $apellaco = $_POST["apellidoaco"];

        if (!empty($_POST["nombreaco"])) {
            $nombaco = $_POST["nombreaco"];

        if (!empty($_POST["cedulaaco"])) {
            $cedaco = $_POST["cedulaaco"];

            $mennacom="ACOMPAÑANTE/S: ";
            $menapellaco="APELLIDOS: ";
            $mennombaco="NOMBRES: ";
            $mencedaco="CÉDULA: ";

            print $mennacom . $nacomp . "<br>";
            print $menapellaco . $apellaco . "<br>";
            print $mennombaco . $nombaco . "<br>";
            print $mencedaco . $cedaco . "<br>";

                        }

                        }
                    }
                }
?>
</fieldset><br>

<center>
    <table class="tablaagendar" width="14%" align="center" border="0">
        <tr>
            <td><center>
            <a href="reserform.html" class="agendarnuevo">RESERVAR OTRA CENA</a>
            </td></center>
        </tr>
    </table>
</center>

    </body>
<br>
<footer>
    <ul>
        <h2>
            <right>Siguenos</right>
        </h2>
    </ul>
    <b>
        <hr width=100% color=black>
    </b>
    <p>
    <ul>Disfruta cada plato diferente cada dia.</p>
    </ul>
    <h3>
        <ul>
            <right>Redes Sociales</right>
        </ul>
    </h3>

    <ul>
        <table width="0%" align="left" border="0">
            <tr>
                <td>
                    <center><a href="https://www.facebook.com/" target="_blank"><img id="imgredes"
                                src="img/facebook.png" width=50 height=50></a>
                </td>
                <td>
                    <center><a href="https://web.whatsapp.com/" target="_blank"><img id="imgredes"
                                src="img/whatsapp.png" width=50 height=50></a>
                </td>
            </tr>
        </table>
    </ul>
    <br><br><br>
    <ul>Comentarios</ul>
    <ul><br><textarea rows="2" cols="100" name="Comentarios">
        Escriba aquí si existe algún inconveniente o duda.
        </textarea>
        </form>
    </ul>

    <ul>
        <pre><b><left><font size=2 color=black>By: Francisco Toala. Todos los derechos reservados.2023</font></pre></b>
        </left>
    </ul>
</footer>

</html>