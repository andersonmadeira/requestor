<?php

namespace AndersonMadeira\Requestor\Annotations;

/**
 * Rest Annotation
 *
 * @Annotation
 * @Target("CLASS")
 * @package AndersonMadeira\Requestor\Annotations
 */
class Rest
{
    /**
     * @var string The Base Url for this REST API
     */
    var $baseUrl;
}