<?php

namespace App\Controller;

use App\Util\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class CalculatorController extends AbstractController
{
    private Calculator $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @param int $a
     * @param int $b
     * @return JsonResponse
     */
    public function sum(int $a, int $b): JsonResponse
    {
        $response = $this->calculator->getSum($a, $b);
        return $this->json(['result' => $response]);
    }
}