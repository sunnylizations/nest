         <?php 

class Func extends CI_Model{
 

    //////for get all data from table
    function get_all($table){
        $result=$this->db->get($table);
        return $result->result();
    }
    //////for get all data descending from table
    function get_all_id_desc($table){
       $this->db->order_by("id","DESC");
        $result=$this->db->get($table);
        return $result->result();
    }

    //////for insert data from table
    function insert_data($table,$data){
        $result=$this->db->insert($table,$data);
        return $result;
    }


    ////////for update data password 
    function update_data($table,$data,$where){
       $this->db->where("id",$where);
       $result=$this->db->update($table,$data);
       return $result;
    }


    ////////for delete data password 
    function delete_data($table,$where){
       $this->db->where("id",$where);
       $result=$this->db->delete($table);
       return $result;
    }


    ////////for get with id  
    function get_where($table,$where){
       $this->db->where("id",$where);
       $result=$this->db->get($table);
       return $result->result();
    }

    /////////where match multiple 
    function where_multi($table,$where){
       $this->db->where($where);
       $result=$this->db->get($table);
       return $result->result();
    }

    ///where match multiple descending order by array
    function where_desc($table,$where){
       $this->db->where($where);
       $this->db->order_by("id","DESC");
       $result=$this->db->get($table);
       return $result->result();
    }

    ///where match multiple descending order by added date
    function where_multi_desc($table,$where){
       $this->db->where($where);
       $this->db->order_by("added","DESC");
       $result=$this->db->get($table);
       return $result->result();
    }
    ///pagination simple
    function pagination($table,$start,$limit){
       $this->db->limit($start,$limit);
       $result=$this->db->get($table);
       return $result->result();
    }
    ///pagination where
    function pagination_where($table,$where,$start,$limit){
       $this->db->where($where);
       $this->db->limit($start,$limit);
       $result=$this->db->get($table);
       return $result->result();
    }






    ////////for chek user and password 
    function check_user($table,$email,$password){
       $this->db->where("username",$email);
       $this->db->where("password",$password);
       $result=$this->db->get($table);
       return $result->result();
    }



}



?>
