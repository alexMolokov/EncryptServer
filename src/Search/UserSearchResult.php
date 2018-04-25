<?php
/**
 * Created by PhpStorm.
 * User: Анастасия
 * Date: 09.04.2018
 * Time: 15:16
 */

namespace EncryptServer\Search;

/**
 * Class UserSearchResult
 *
 */
class UserSearchResult implements \Countable, \SeekableIterator
{
    private $data = [];
    private $page = 0;
    private $total = 0;
    private $position = 0;
    private $pageSize = 0;

    /**
     * @brief UserSearchResult constructor.
     * @param $params
     *
     * @details UserSearchResult constructor. Allowed params "data", "page", "total"
     */
    public function __construct($params)
    {
        $this->data = $params["data"];
        $this->page = $params["page"];
        $this->total = $params["total"];
        $this->pageSize = count($this->data);
    }

    /**
     * @brief Count total records in Search result
     * @return int
     *
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * @brief Get current page
     * @return int
     *
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @brief Check if UserSearch Result has next record
     * @return bool
     */
    public function valid() {
        return ($this->position < $this->pageSize);

    }

    /**
     * @brief Get current record
     * @return mixed
     */
    public function current() {
        return $this->data[$this->position];
    }

    /**
     * @return int
     * Get current position
     */
    public function key() {
        return $this->position;
    }

    /**
     * @brief Set position to 0
     */
    public function rewind() {
        $this->position = 0;
    }

    /**
     * Set position to next
     */
    public function next() {
        ++$this->position;
    }

    /**
     * @brief count records
     * @return int
     */
    public function count()
    {
        return $this->pageSize;
    }

    /**
     * @param int $position
     * @brief Set to position
     */
    public function seek($position)
    {
        $this->position = $position;
    }
    /**
     * @brief Get first record
     */
    public function first(){
        $this->rewind();
        return $this->valid() ? $this->current() : null;
    }


}