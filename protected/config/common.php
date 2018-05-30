<?php

return [
    'components' => [
        'authClientCollection' => [
            'clients' => [
                'facebook' => [
                    'class' => 'humhub\modules\user\authclient\Facebook',
                    'clientId' => '362118814277216',
                    'clientSecret' => '16c3674bef393db6762ad772420ea07f',
                ],

                'linkedin' => [
                    'class' => 'humhub\modules\user\authclient\LinkedIn',
                    'clientId' => '777rtac7ie6swe',
                    'clientSecret' => 'qPiTdiABtjhAAIMp',
                ],
                
                'twitter' => [
                'class' => 'yii\authclient\clients\Twitter',
                   'attributeParams' => [
                      'include_email' => 'true'
                      
                   ],
                    'consumerKey' => 'zzM8OvLRJTPMCd0gAbWl6rNha',
                    'consumerSecret' => 'Xjj3AUDTBitvAsGM9WcsXZu8ZcAIsZjk9k6esefSyxjJH6HbRV',
                ],
            ],
        ],
    ],
];