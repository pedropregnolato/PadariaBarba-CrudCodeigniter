<?php
    class ProdutoModel extends CI_Model{
        
        public function selecionarTodos(){
            $retorno = $this->db->query("SELECT * FROM `produto`");
            return $retorno->result();
        }

        public function selecionarWhere ($parametro){
            $retorno = $this->db->query("SELECT * FROM `produto` WHERE nome = '%$parametro%'");
            return $retorno->result();
        }

        public function inserir ($data){
            $this->db->insert("produto", $data);
            return true;
        }

        public function excluir($id) {
            $this->db->query("DELETE FROM produto WHERE id = " . $id);
            return true;
        }

        public function salvaralteracao ($data, $id){
            $this->db->update("produto",$data, "id = ". $id);
            return true;
        }

        public function buscarId ($id){
            $retorno = $this->db->query("SELECT * FROM produto WHERE id = " . $id);
            return $retorno->result();
        }
    }
?>