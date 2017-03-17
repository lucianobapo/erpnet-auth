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

    /**
     * @param string $provider
     * @param string $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function login($provider, $id)
    {
        return $this->service->checkUser($provider, $id);
    }
}
