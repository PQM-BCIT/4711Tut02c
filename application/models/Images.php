<?php

class Images extends CI_Model {

  /**
   *  Constructor.
   */
  function __construct() {
    parent::__construct();
  }

  /**
   *  Returns all iamges, descending order by post date.
   */
  function all() {
    $this->db->order_by("id", "desc");
    $query = $this->db->get('images');

    return $query->result_array();
  }

  // Return just the 3 newest images.
  function newest() {
    $this->db->order_by("id", "desc");
    $this->db->limit(3);
    $query = $this->db->get('images');

    return $query->result_array();
  }

}

