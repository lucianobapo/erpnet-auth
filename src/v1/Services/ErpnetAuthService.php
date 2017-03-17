<?php

/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 01/01/17
 * Time: 20:36
 */

namespace ErpNET\Auth\v1\Services;

use ErpNET\Models\v1\Criteria\OpenItemOrdersCriteria;
use ErpNET\Models\v1\Criteria\ProductActiveCriteria;
use ErpNET\Models\v1\Criteria\ProductGroupActivatedCriteria;
use ErpNET\Models\v1\Criteria\ProductGroupCategoriesCriteria;
use ErpNET\Models\v1\Interfaces\UserRepository;
use ErpNET\Models\v1\Interfaces\AddressRepository;
use ErpNET\Models\v1\Interfaces\ItemOrderRepository;
use ErpNET\Models\v1\Interfaces\OrderRepository;
use ErpNET\Models\v1\Interfaces\PartnerRepository;
use ErpNET\Models\v1\Interfaces\ContactRepository;
use ErpNET\Models\v1\Interfaces\ProductRepository;
use ErpNET\Models\v1\Interfaces\ProductGroupRepository;
use ErpNET\Models\v1\Interfaces\SharedOrderTypeRepository;
use ErpNET\Models\v1\Interfaces\SharedOrderPaymentRepository;
use ErpNET\Models\v1\Interfaces\SharedCurrencyRepository;
use ErpNET\Models\v1\Interfaces\OrderService;
use ErpNET\Models\v1\Interfaces\PartnerService;
use Illuminate\Support\Facades\DB;

class ErpnetAuthService
{
    protected $userRepository;
//    protected $contactRepository;
//    protected $productRepository;
//    protected $productGroupRepository;
//    protected $orderRepository;
//    protected $itemOrderRepository;
//    protected $addressRepository;
//    protected $partnerRepository;
//    protected $sharedOrderTypeRepository;
//    protected $sharedOrderPaymentRepository;
//    protected $sharedCurrencyRepository;

//    protected $orderService;
//    protected $partnerService;

    /**
     * Service constructor.
     *
     * @param ProductRepository $productRepository
     * @param ProductGroupRepository $productGroupRepository
     * @param OrderRepository $orderRepository
     * @param AddressRepository $addressRepository
     * @param PartnerRepository $partnerRepository
     * @param SharedOrderTypeRepository $sharedOrderTypeRepository
     * @param SharedOrderPaymentRepository $sharedOrderPaymentRepository
     * @param SharedCurrencyRepository $sharedCurrencyRepository
     * @param OrderService $orderService
     * @param PartnerService $partnerService
     */
    public function __construct(
                                UserRepository $userRepository
//                                ContactRepository $contactRepository,
//                                ProductRepository $productRepository,
//                                ProductGroupRepository $productGroupRepository,
//                                OrderRepository $orderRepository,
//                                ItemOrderRepository $itemOrderRepository,
//                                AddressRepository $addressRepository,
//                                PartnerRepository $partnerRepository,
//                                SharedOrderTypeRepository $sharedOrderTypeRepository,
//                                SharedOrderPaymentRepository $sharedOrderPaymentRepository,
//                                SharedCurrencyRepository $sharedCurrencyRepository,
    
//                                OrderService $orderService,
//                                PartnerService $partnerService
    )
    {
        $this->userRepository = $userRepository;
//        $this->contactRepository = $contactRepository;
//        $this->productRepository = $productRepository;
//        $this->productGroupRepository = $productGroupRepository;
//        $this->orderRepository = $orderRepository;
//        $this->itemOrderRepository = $itemOrderRepository;
//        $this->addressRepository = $addressRepository;
//        $this->partnerRepository = $partnerRepository;
//        $this->sharedOrderTypeRepository = $sharedOrderTypeRepository;
//        $this->sharedOrderPaymentRepository = $sharedOrderPaymentRepository;
//        $this->sharedCurrencyRepository = $sharedCurrencyRepository;

//        $this->orderService = $orderService;
//        $this->partnerService = $partnerService;
    }

    public function checkUser($provider, $id)
    {
        $foundUser = $this->userRepository->findWhere([
            'provider' => $provider,
            'provider_id' => $id,
        ]);
        dd($foundUser);
    }
}