<?php

namespace App\Models;

use CodeIgniter\Model;

class AktivitasModel extends Model
{
    protected $table            = 'tb_aktivitas';
    protected $primaryKey       = 'id_aktivitas';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['img_navbar', 'img_slider', 'img_footer', 'img_1', 'title_img1', 'deskripsi_img1', 'img_2', 'title_img2', 'deskripsi_img2', 'img_3', 'title_img3', 'deskripsi_img3', 'img_4', 'title_img4', 'deskripsi_img4',  ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
