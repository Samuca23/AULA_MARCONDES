<?php

class conexaoBanco {
    public function __construct($sHost, $iPort, $sDbName, $sUser, $sPassword)
    {
        $this->getConnection($sHost, $iPort, $sDbName, $sUser, $sPassword);
    }

    public function getConnection($sHost, $iPort, $sDbName, $sUser, $sPassword) {
        try {
            $oConexao = new PDO("pgsql:host={$sHost};port={$iPort};dbname={$sDbName}", $sUser, $sPassword, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
            return $oConexao;
        }
        catch (PDOException $e){
            echo 'Erro: ' . $e->getMessage();
        }
    }

    public function execute($sSql) {
        $oPrepare = $this->getConnection('localhost', '5432', 'sistema_gado', 'postgres', '2304')->prepare($sSql);
        $oPrepare->execute();
        return $oPrepare->fetchAll(PDO::FETCH_ASSOC);
    }
}