<?php

    namespace App\Controllers;
    use App\Models\NivelesAcademicosModel;

        class NivelesacAdemicosController extends BaseController
            {
                public function index(): string
                    {
                        $niveles= new NivelesAcademicosModel();
                        $datos['datos']=$niveles->findAll();
                        return view('nivelesacademicos',$datos);
                    }
            }