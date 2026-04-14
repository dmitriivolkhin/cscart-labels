<?php

namespace Tygh\Addons\Labels\Product\Labels;

class LabelMaterial
{
    /** @var int */
    private $labels_material_id;

    /** @var string */
    private $labels_material_name;

    protected function __construt(int $id = 0, string $name = '')
    {
        $this->labels_material_id = $id;
        $this->labels_material_name = $name;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->labels_material_id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->labels_material_id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->labels_material_name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->labels_material_name = $name;
    }

    /**
     * Converts instance to array
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'label_material_id' => $this->getId(),
            'label_material_name' => $this->getName()
        ];
    }
}