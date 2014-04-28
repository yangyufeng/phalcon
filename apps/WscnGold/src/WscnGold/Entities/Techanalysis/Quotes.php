<?php

namespace WscnGold\Entities\Techanalysis;

class Quotes extends \Eva\EvaEngine\Mvc\Model
{
    protected $tableName = 'techanalysis_quotes';

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var string
     */
    public $symbol;
     
    /**
     *
     * @var integer
     */
    public $updateTime;
     
    /**
     *
     * @var string
     */
    public $status;
     
    /**
     *
     * @var string
     */
    public $title;
     
    /**
     *
     * @var string
     */
    public $type;
     
    /**
     *
     * @var string
     */
    public $tag;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'symbol' => 'symbol', 
            'updateTime' => 'updateTime', 
            'status' => 'status', 
            'title' => 'title', 
            'type' => 'type', 
            'tag' => 'tag'
        );
    }

}
