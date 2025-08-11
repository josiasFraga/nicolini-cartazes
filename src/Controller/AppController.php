<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $poster_sizes = [
        'A1' => [
            //594x841mm
            'w' => 594,
            'h' => 841,
            'label' => 'A1 (59.4,84.1cm) - Usar papel tamanho A1'
        ],
        'A1H' => [
            //594x841mm
            'w' => 594,
            'h' => 841,
            'label' => 'A1 (84.1cm,59.4) - Usar papel tamanho A1',
            'class' => 'a1_horizontal'
        ],
        'A3' => [
            'w' => 420,
            'h' => 297,
            'label' => 'A3 (42x29,7cm) - Usar papel tamanho A3',
        ],
        'A4' => [
            'w' => 210,
            'h' => 297,            
            'label' => 'A4 (21x29,7cm) - Usar papel tamanho A4',
        ],
        'A5' => [
            'w' => 210,
            'h' => 297,
            'label' => 'A5 (21x29,7cm) (2 cartazes por folha)  - Usar papel tamanho A4',
        ],
        'A6' => [
            'w' => 210,
            'h' => 297,            
            'label' => 'A6 (21x29,7cm) (8 cartazes por folha) - Usar papel tamanho A4',
        ]
    ];

    public $lojas = [
        '001' => [
            'nome' => 'Atacadão',
            'logo' => 'atacadao.png',
            'class' => 'atacadao',
            'logo_style' => 'width: 40%; height: 60%; margin: 0 auto; margin-top: 0.7cm',
        ],
        '002' => [
            'nome' => 'Nicolini',
            'logo' => 'nicolini.png',
            'class' => 'nicolini',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '003' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '004' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '005' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '006' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '007' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '008' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '009' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '010' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '011' => [
            'nome' => 'Atacadão',
            'class' => 'atacadao',
            'logo' => 'atacadao.png',
            'logo_style' => 'width: 40%; height: 60%; margin: 0 auto; margin-top: 0.7cm',
        ],
        '012' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '013' => [
            'nome' => 'Atacadão',
            'class' => 'atacadao',
            'logo' => 'atacadao.png',
            'logo_style' => 'width: 40%; height: 60%; margin: 0 auto; margin-top: 0.7cm',
        ],
        '014' => [
            'nome' => 'Engenho',
            'class' => 'engenho',
            'logo' => 'engenho.png',
            'logo_style' => 'width: 40%; height: 60%; margin: 0 auto; margin-top: 0.7cm',
        ],
        '015' => [
            'nome' => 'Engenho',
            'class' => 'engenho',
            'logo' => 'engenho.png',            
            'logo_style' => 'width: 40%; height: 60%; margin: 0 auto; margin-top: 0.7cm',
        ],
        '016' => [
            'nome' => 'Engenho',
            'class' => 'engenho',
            'logo' => 'engenho.png',            
            'logo_style' => 'width: 40%; height: 60%; margin: 0 auto; margin-top: 0.7cm',
        ],
        '017' => [
            'nome' => 'Atacadaço São Gabriel',
            'logo' => 'atacadao.png',
            'class' => 'atacadao',
            'logo_style' => 'width: 40%; height: 60%; margin: 0 auto; margin-top: 0.7cm',
        ],

        
        '018' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '019' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '020' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '021' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '022' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '023' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '024' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '025' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '026' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '027' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '028' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
        '029' => [
            'nome' => 'Nicolini',
            'class' => 'nicolini',
            'logo' => 'nicolini.png',
            'logo_style' => 'height: 60%; width: 100%;',
        ],
    ];

    public $loja_selecionada_id = '001';
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');
        $this->loadComponent('Authorization.Authorization');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }
}
