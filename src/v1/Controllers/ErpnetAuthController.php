<?php

namespace ErpNET\Auth\v1\Controllers;

use ErpNET\Auth\v1\Services\ErpnetAuthService;

/**
 *  Resource representation.
 *
 * @Resource("erpnetAuth", uri="/erpnetAuth")
 */
class ErpnetAuthController extends Controller
{

    protected $service;

    /**
     * Controller constructor.
     */
    public function __construct(ErpnetAuthService $erpnetAuthService)
    {
        if (!request()->wantsJson()) {

            $this->middleware('web');
        }
        $this->service = $erpnetAuthService;
    }

    public function login($provider, $id)
    {
        $this->service->checkUser($provider, $id);
    }
}
