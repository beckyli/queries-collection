<?php
/**
 * Created by PhpStorm.
 * User: Tintin
 * Date: 21/05/2015
 * Time: 15:58
 */

class Recommendation {

    /**
     * @var will going contain database connection
     */
    protected $_con;
    /**
     * it will initalize DBclass
     */
    public function _construct()
    {
        $db = new C1_DBclass();
        $this->_con = $db->con;
    }
    /**
     *  it is for ...
     */

    public function video_recommendation()
    {

        $query = "SELECT * FROM video_recommendation";

        $result = mysqli_query($this->_con, $query);

        $row = mysqli_fetch_array($result);

        return $row;

    }

}