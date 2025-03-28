<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class GetCategoriesListController extends Controller
{
    public function __invoke(): JsonResponse
    {
        return $this->successResponse(Category::query()->select(['name'])->get());
    }
}
