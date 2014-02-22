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
                'type' => 'Segment',
                'options' => array(
                    'route' => '/api/messages[/:id]',
                    'defaults' => array(
                        'controller' => 'SwaggerExample\Controller\Message'
                    )
                )
            )
        )
    )
);