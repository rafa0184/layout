<?php


//Constantes para configuração de banco de dados
define('HOST',  '');
define('DB',    '');
define('USER',  '');
define('PASS',  '');

class Ramais{
 
        private static $pdo;
     
        public function connect(){
            if(self::$pdo == null){
                try{
                    self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch(PDOException $e){
                    echo "Falha ao se conectar ao banco de dados";
                }
            }
            return self::$pdo;
        }
    

    public function getRamais()
    {
        $sql = "SELECT ramal_numero, ramal_usuario, cidade_nome, setor_descricao 
            FROM ramal 
            INNER JOIN cidade   ON  ramal_cidade_id = cidade_id
            INNER JOIN setor    ON  ramal_setor_id  = setor_id
            ORDER BY cidade_nome, ramal_usuario, setor_descricao  ";

    $sql = Ramais::connect()->query($sql);
    $sql-> execute();
    
    $result = $sql->fetchAll();

    return $result;
    
    }
    
}
?>
