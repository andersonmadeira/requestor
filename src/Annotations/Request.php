<?php

namespace AndersonMadeira\Requestor\Annotations;

use Doctrine\Common\Annotations\Annotation\Target;

/**
 * Request Annotation
 *
 * @Annotation
 * @Target("METHOD")
 * @package AndersonMadeira\Requestor\Annotations
 */
final class Request
{
    /**
     * @var string the endpoint for this request
     */
    public $endpoint;

    /**
     * @Enum({"GET", "POST", "PUT", "DELETE"})
     */
    public $method;
}
