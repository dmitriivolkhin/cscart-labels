<?php

namespace Tygh\Addons\Labels\Product\Labels;

class LabelForm
{
    /** @var int */
    private $labels_form_id;

    /** @var string */
    private $labels_form_name;

    protected function __construt(int $id = 0, string $name = '')
    {
        $this->labels_form_id = $id;
        $this->labels_form_name = $name;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->labels_form_id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->labels_form_id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->labels_form_name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->labels_form_name = $name;
    }

    /**
     * Converts instance to array
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'label_form_id' => $this->getId(),
            'label_form_name' => $this->getName()
        ];
    }
}