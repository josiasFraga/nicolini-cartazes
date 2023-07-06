<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Promocoes Model
 *
 * @method \App\Model\Entity\Promocao newEmptyEntity()
 * @method \App\Model\Entity\Promocao newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Promocao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Promocao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Promocao findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Promocao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Promocao[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Promocao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Promocao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Promocao[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Promocao[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Promocao[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Promocao[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PromocoesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('v_es_promocoes');
        $this->setPrimaryKey('idprom');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('loja')
            ->maxLength('loja', 3)
            ->allowEmptyString('loja');

        $validator
            ->integer('CodPromocao')
            ->notEmptyString('CodPromocao');

        $validator
            ->scalar('CODIGOINT')
            ->maxLength('CODIGOINT', 7)
            ->notEmptyString('CODIGOINT');

        $validator
            ->scalar('descricaomidia')
            ->maxLength('descricaomidia', 40)
            ->allowEmptyString('descricaomidia');

        $validator
            ->numeric('VlrVenda')
            ->allowEmptyString('VlrVenda');

        $validator
            ->numeric('VlrVendaNormal')
            ->allowEmptyString('VlrVendaNormal');

        $validator
            ->numeric('precoclube')
            ->allowEmptyString('precoclube');

        $validator
            ->numeric('limite')
            ->allowEmptyString('limite');

        $validator
            ->scalar('local')
            ->maxLength('local', 1)
            ->allowEmptyString('local');

        $validator
            ->scalar('proddesconto')
            ->maxLength('proddesconto', 40)
            ->allowEmptyString('proddesconto');

        $validator
            ->integer('qtdgatilho')
            ->allowEmptyString('qtdgatilho');

        $validator
            ->numeric('PrFinalDesconto')
            ->allowEmptyString('PrFinalDesconto');

        $validator
            ->scalar('finalidade')
            ->maxLength('finalidade', 1)
            ->allowEmptyString('finalidade');

        $validator
            ->integer('tppromocao')
            ->allowEmptyString('tppromocao');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 60)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('codproddesconto')
            ->maxLength('codproddesconto', 7)
            ->allowEmptyString('codproddesconto');

        return $validator;
    }
}
