<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TemasCartaze Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $inicio
 * @property \Cake\I18n\FrozenTime $fim
 * @property string $nome
 * @property string $diretorio
 */
class TemasCartaze extends Entity
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
        'inicio' => true,
        'fim' => true,
        'nome' => true,
        'diretorio' => true,
    ];
}
