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
     * @param ErpnetAuthService $erpnetAuthService
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
     * @return \Illuminate\Contracts\View\View | \Illuminate\Http\Response
     */
    public function login($provider, $id)
    {
        $allData = $this->service->checkUser($provider, $id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $allData,
            ]);
        }

        return view('welcome')->with(['data'=>$allData]);
    }
}
