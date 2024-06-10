<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //Segui la guia de la clase para realizar la practica y la comprendi por completo y la intente llevar acabo con
        // todos los pasos dados, pero me encontre con problemas para conectar la base de datos por cosas de mi laptop
        // intente solucionarlo de todos los modos posibles hasta tener que desintalar postgre y reinstalarlo, pero eso
        //causo que ahora no puedo si quiera entrar al postgre 16 con la contraseña. Cambie la contrasela y aun asi no 
        //me la acepta. Siento mucho no haber podido hacer el trabajo tal como se pedia, pero me gusto intentarlo hasta
        // que fallo la conexion de postgre.

        // $this->bd=\Config\Database::connect();
        // $query=$this->bd->query('SELECT id, nombre, apellido, edad FROM persona');
        // $persona=$query->getResult();

        // $query=$this->bd->query('SELECT idp, id, hobbie, ocupacion FROM hobbie');
        // $hobbie=$query->getResult();

        // $resultado=[
        //     'persona'=> $persona,
        //     'hobbie'=> $hobbie
        // ];
        // return $this->response->setJSON($resultado);
        $persona=[
            [
                'id'=> 1,
                'Nombre'=> 'Exer',
                'Apellido'=> 'Loor',
                'Edad'=> 21
            ],
            [
                'id'=> 2,
                'Nombre'=> 'Juan',
                'Apellido'=> 'Perez',
                'Edad'=> 29
            ],
            [
                'id'=> 3,
                'Nombre'=> 'Samuel',
                'Apellido'=> 'Solorzano',
                'Edad'=> 20
            ],
            [
                'id'=> 4,
                'Nombre'=> 'Tita',
                'Apellido'=> 'Pita',
                'Edad'=> 25
            ]
        ];
        $hobbie=[
            [
                'idp'=> 3,
                'id'=> 1,
                'hobbie'=> 'football',
                'ocupacion'=> 'mecanico'
            ],
            [
                'idp'=> 2,
                'id'=> 2,
                'hobbie'=> 'cine',
                'ocupacion'=> 'telecomunicaciones'
            ],
            [
                'idp'=> 1,
                'id'=> 3,
                'hobbie'=> 'musica',
                'ocupacion'=> 'ingeniero'
            ],
            [
                'idp'=> 4,
                'id'=> 4,
                'hobbie'=> 'videojuego',
                'ocupacion'=> 'medico'
            ]
        ];

        $data = [
            'personas' => $persona,
            'hobbies' => $hobbie];

        return $this->response->setJSON($data);
        
    }

}
