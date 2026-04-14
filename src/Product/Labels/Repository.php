<?php

namespace Tygh\Addons\Labels\Product\Labels;

use Tygh\Addons\ProductVariations\Tools\QueryFactory;

class Repository
{
    const TABLE_LABELS = 'labels';

    /** @var \Tygh\Addons\ProductVariations\Tools\QueryFactory */
    protected $query_factory;

    /** @var string */
    protected $lang_code;

    /**
     * Repository constructor.
     *
     * @param \Tygh\Addons\ProductVariations\Tools\QueryFactory $query_factory
     * @param string                                            $lang_code
     */
    public function __construct(QueryFactory $query_factory, $lang_code)
    {
        $this->query_factory = $query_factory;
        $this->lang_code = $lang_code;
    }

    /**
     * @param string|array $table_id
     * @param array        $conditions
     * @param array        $fields
     * @param string       $table_alias
     *
     * @return \Tygh\Addons\ProductVariations\Tools\Query
     */
    protected function createQuery($table_id, array $conditions = [], array $fields = [], $table_alias = null)
    {
        return $this->query_factory->createQuery($table_id, $conditions, $fields, $table_alias);
    }

    public function create(Label $label): bool
    {
        if ($label->getId()){
            return false;
        }

        $id = $this->createQuery(self::TABLE_LABELS)->insert($label->toArray());
        $label->setId($id);

        return true;
    }

    public function delete(Label $label): bool
    {
        if (!$label->getId()) {
            return false;
        }

        $this->createQuery(self::TABLE_LABELS, ['id' => $label->getId()])->delete();

        return true;
    }
}