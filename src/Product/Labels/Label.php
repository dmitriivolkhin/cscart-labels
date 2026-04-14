<?php

namespace Tygh\Addons\Labels\Product\Labels;

class Label
{
    /** @var int */
    private $label_id;

    /** @var string */
    private $label_name;

    /** @var string */
    private $label_desc;

    /** @var int */
    private $label_length;

    /** @var int */
    private $label_width;

    /** @var LabelMaterial */
    private $label_material_id;

    /** @var LabelForm */
    private $label_form_id;

    protected function __construt(
        int $id = 0, 
        string $name = '',
        string $desc = '',
        int $length = 0,
        int $width = 0,
        LabelMaterial $material = null,
        LabelForm $form = null
    )
    {
        $this->label_id = $id;
        $this->label_name = $name;
        $this->label_desc = $desc;
        $this->label_length = $length;
        $this->label_width = $width;
        $this->label_material_id = $material;
        $this->label_form_id = $form;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->label_id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->label_id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->label_name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->label_name = $name;
    }

    /**
     * @return string
     */
    public function getDesc()
    {
        return $this->label_desc;
    }

    /**
     * @param string $desc
     */
    public function setDesc($desc)
    {
        $this->label_desc = $desc;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->label_length;
    }

    /**
     * @param int $length
     */
    public function setLength($length)
    {
        $this->label_length = $length;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->label_width;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->label_width = $width;
    }

    /**
     * @return LabelMaterial
     */
    public function getMaterial()
    {
        return $this->label_material_id;
    }

    /**
     * @param LabelMaterial $material
     */
    public function setMaterialId($material)
    {
        $this->label_material_id = $material;
    }

    /**
     * @return LabelForm
     */
    public function getForm()
    {
        return $this->label_form_id;
    }

    /**
     * @param LabelForm $form
     */
    public function setForm($form)
    {
        $this->label_form_id = $form;
    }

    /**
     * Converts instance to array
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'label_id' => $this->getId(),
            'label_name' => $this->getName(),
            'label_desc' => $this->getDesc(),
            'label_length' => $this->getLength(),
            'label_width' => $this->getWidth(),
            'label_material_id' => $this->getMaterial()->getId(),
            'label_form_id' => $this->getForm()->getId()
        ];
    }
}