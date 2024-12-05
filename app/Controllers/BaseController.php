<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class BaseController extends Controller
{
    protected $helpers = [];
    protected $lang;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        // Atur bahasa berdasarkan URL atau session
        $this->lang = $this->request->getLocale() ?? 'id';
        service('language')->setLocale($this->lang);
    }
}
