<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TemasCartazes Model
 *
 * @method \App\Model\Entity\TemasCartaze newEmptyEntity()
 * @method \App\Model\Entity\TemasCartaze newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TemasCartaze[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TemasCartaze get($primaryKey, $options = [])
 * @method \App\Model\Entity\TemasCartaze findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TemasCartaze patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TemasCartaze[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TemasCartaze|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TemasCartaze saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TemasCartaze[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TemasCartaze[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TemasCartaze[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TemasCartaze[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TemasCartazesTable extends Table
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

        $this->setTable('temas_cartazes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->dateTime('inicio')
            ->requirePresence('inicio', 'create')
            ->notEmptyDateTime('inicio');

        $validator
            ->dateTime('fim')
            ->requirePresence('fim', 'create')
            ->notEmptyDateTime('fim');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 80)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->scalar('diretorio')
            ->maxLength('diretorio', 120)
            ->requirePresence('diretorio', 'create')
            ->notEmptyString('diretorio');

        return $validator;
    }
}
