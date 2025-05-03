<?php 

class Fornecedor extends Model
{

    public function getFornecedores($s = '') 
    {
        $array = array();

        if (! empty($s)) {

            $sql = 'SELECT * FROM manufacturers WHERE name LIKE :s OR url LIKE :s';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':s', '%'.$s.'%');

            $sql->execute();

        } else {
            $sql = 'SELECT * FROM manufacturers';
            $sql = $this->db->query($sql);
        }

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;


    }

    public function addFornecedor($name, $url)
    {
        $sql = 'INSERT INTO manufacturers (name, url) VALUES (:name, :url)';

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':url', $url);

        $sql->execute();

        return true;

    }

    public function delete($id)
    {
        $sql = "DELETE FROM manufacturers WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        return $sql->execute();
    }
}
