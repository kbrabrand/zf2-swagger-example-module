<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'SwaggerExample\Controller\Message' => 'SwaggerExample\Controller\MessageController',
        ),
    ),
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
            )
        )
    )
);