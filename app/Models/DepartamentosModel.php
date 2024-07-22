<?php
    namespace App\Modelsl;
        use CodeIgniter\Model;

            class DepartamentosModel extends Model
            {
                protected $table = 'departamentos';
                protected $allowedFields = [
                    'cod_depto', 'nombre_depto', 'cod_region',
                ];
            }