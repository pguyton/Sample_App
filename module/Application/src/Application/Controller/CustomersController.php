<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Repository\CustomerRepository;

/**
 * Class CustomersController
 * @package Application\Controller
 */
class CustomersController extends AbstractActionController
{
    /**
     * @var CustomerRepository
     */
    protected $customerRepository;

    /**
     * @param CustomerRepository $repo
     */
    public function __construct(CustomerRepository $repo)
    {
        $this->customerRepository = $repo;
    }

    /**
     * Display all the customers in the system.
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        $customers = $this->customerRepository->getAll();

        return new ViewModel(
            array(
                'customers' => $customers
            )
        );
    }
}
