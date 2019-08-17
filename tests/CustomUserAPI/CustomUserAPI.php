<?php

namespace AndersonMadeira\Requestor\Tests\CustomUserAPI;

use AndersonMadeira\Requestor\Annotations\Request;
use AndersonMadeira\Requestor\Annotations\Rest;
use AndersonMadeira\Requestor\Entities\HttpResponse;
use AndersonMadeira\Requestor\Tests\CustomUserAPI\Entities\CustomUser;

/**
 * Class CustomUserAPI
 * @Rest(baseUrl="https://my.api/users")
 */
interface CustomUserAPI
{
    /**
     * @Request(method="GET", endpoint="/")
     * @return HttpResponse
     */
    public function getAll(): HttpResponse;

    /**
     * @Request(method="GET", endpoint="/{id}")
     * @param int $id Id of an existing user
     * @return HttpResponse
     */
    public function getById(int $id): HttpResponse;

    /**
     * @Request(method="POST", endpoint="/")
     * @param CustomUser $user
     * @return HttpResponse
     */
    public function create(CustomUser $user): HttpResponse;

    /**
     * @Request(method="PUT", endpoint="/")
     * @param CustomUser $user
     * @return HttpResponse
     */
    public function update(CustomUser $user): HttpResponse;

    /**
     * @Request(method="DELETE", endpoint="/{id}")
     * @param int $id Id of an existing user
     * @return HttpResponse
     */
    public function remove(int $id): HttpResponse;
}
