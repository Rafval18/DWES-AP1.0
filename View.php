<?php
class View{
    private $datos;

    function __construct($datos){
        $this->datos=$datos;
    }

    function getDatos(){
        return $this->datos;
    }

    function drawHTML5(){
        $draw=<<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <table>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCIÓN</th>
                    <th>PRECIO</th>
                    <th>STOCK</th>
                </tr>
                <tr>
                    {$this->createHTMLRowContent($this->getDatos())};
                </tr>
            </table>  
        </body>
        </html>
HTML;
    return $draw;
    }

    function createHTMLRowContent($data){
        $acumulador='';
        foreach ($data as $key => $value) {
            $acumulador .= "<td>$value</td>";
        }
        return $acumulador;
    }
}
?>