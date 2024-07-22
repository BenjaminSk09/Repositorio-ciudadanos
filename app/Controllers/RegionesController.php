<?php
    namespace App\Controllers;
    use App\Models\RegionesModel;

        class RegionesController extends BaseController
        {
                public function index(): string
            {
                $region= new RegionesModel();
                $datos['datos']=$region->findAll();
                return view('regiones',$datos);
            }
        }