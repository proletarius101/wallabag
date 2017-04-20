<?php

namespace Wallabag\CoreBundle\Operator\PHP;

/**
 * Provides a "notmatches" operator used for tagging rules.
 *
 * It asserts that a given pattern is not contained in a subject, in a
 * case-insensitive way.
 *
 * This operator will be used to compile tagging rules in PHP, usable
 * directly on Entry objects for instance.
 * It's registered in RulerZ using a service (wallabag.operator.array.matches);
 */
class NotMatches
{
    public function __invoke($subject, $pattern)
    {
        return stripos($subject, $pattern) === false;
    }
}
