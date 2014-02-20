<?php

return array(
    'router' => array(
        'routes' => array(
            'swagger-example-message' => array(
                'type' => 'method',
                'options' => array(
                    'route' => '/api/messages',
                    'defaults' => array(
                        'controller' => 'SwaggerExample\Controller\Message'
                    )
                )
            ),
            'swagger-example-user' => array(
                'type' => 'method',
                'options' => array(
                    'route' => '/api/users',
                    'defaults' => array(
                        'controller' => 'SwaggerExample\Controller\Message'
                    )
                )
            )
        )
    )
);