<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Auth;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Exceptions\AuthenticationException;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use Joselfonseca\LighthouseGraphQLPassport\GraphQL\Mutations\BaseAuthResolver as BaseAuthResolver;

class Logout extends BaseAuthResolver
{
    /**
     * @param $rootValue
     * @param array $args
     * @param \Nuwave\Lighthouse\Support\Contracts\GraphQLContext|null $context
     * @param \GraphQL\Type\Definition\ResolveInfo $resolveInfo
     * @return array
     * @throws \Exception
     */
    public function resolve($rootValue, array $args, GraphQLContext $context = null, ResolveInfo $resolveInfo)
    {
        if (!Auth::guard('api')->check()) {
            return [
                'status' => 'TOKEN_FAIL'
            ];
        }
        // revoke user's token
        Auth::guard('api')->user()->token()->revoke();
        return [
            'status' => 'TOKEN_REVOKED',
            'message' => 'Your session has been terminated'
        ];
    }

}
