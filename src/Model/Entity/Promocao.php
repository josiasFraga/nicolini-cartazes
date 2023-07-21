<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Promocao Entity
 *
 * 
 * @property int $idprom
 * @property string|null $loja
 * @property int $CodPromocao
 * @property string $CODIGOINT
 * @property string|null $descricaomidia
 * @property float|null $VlrVenda
 * @property float|null $VlrVendaNormal
 * @property float|null $precoclube
 * @property float|null $limite
 * @property string|null $local
 * @property string|null $proddesconto
 * @property int|null $qtdgatilho
 * @property float|null $PrFinalDesconto
 * @property string|null $finalidade
 * @property int|null $tppromocao
 * @property string|null $descricao
 * @property string|null $codproddesconto
 */
class Promocao extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'idprom' => true,
        'loja' => true,
        'CodPromocao' => true,
        'CODIGOINT' => true,
        'descricaomidia' => true,
        'VlrVenda' => true,
        'VlrVendaNormal' => true,
        'precoclube' => true,
        'limite' => true,
        'local' => true,
        'proddesconto' => true,
        'qtdgatilho' => true,
        'PrFinalDesconto' => true,
        'finalidade' => true,
        'tppromocao' => true,
        'descricao' => true,
        'codproddesconto' => true,
        'vigencia' => true
    ];
}
