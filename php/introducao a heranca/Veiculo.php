<?php
declare(strict_types=1);

class Veiculo {

    public function __construct(
        protected string $especie,
        protected string $placa,
        protected string $marca,
        protected string $modelo,
        protected int $anoModelo,
        protected int $anoFabricacao,
        protected string $chassi,
        protected string $renavam,
        protected string $procedencia,
        protected string $corExterna,
        protected string $corInterna,
        protected string $combustivel,
        protected string $motor,
        protected float $quilometragem,
        protected float $consumoMedio,
        protected int $numPortas,
        protected string  $opcionais
    ) {}

    public function exibirDados() {
        return "Espécie: {$this->especie} <br>
                Placa: {$this->placa} <br>
                Marca: {$this->marca} <br>
                Modelo: {$this->modelo} <br>
                Ano Modelo: {$this->anoModelo} <br>
                Ano Fabricação: {$this->anoFabricacao} <br>
                Chassi: {$this->chassi} <br>
                Renavam: {$this->renavam} <br>
                Procedência: {$this->procedencia} <br>
                Cor Externa: {$this->corExterna} <br>
                Cor Interna: {$this->corInterna} <br>
                Combustível: {$this->combustivel} <br>
                Motor: {$this->motor} <br>
                Quilometragem: {$this->quilometragem} km <br>
                Consumo Médio: {$this->consumoMedio} km/l <br>
                Número de Portas: {$this->numPortas} <br>
                Opcionais:  {$this->opcionais} <br>";


    }
}


class VeiculoPasseio extends Veiculo {

    public function __construct(
        protected int $numPassageiros,

        string $especie,
        string $placa,
        string $marca,
        string $modelo,
        int $anoModelo,
        int $anoFabricacao,
        string $chassi,
        string $renavam,
        string $procedencia,
        string $corExterna,
        string $corInterna,
        string $combustivel,
        string $motor,
        float $quilometragem,
        float $consumoMedio,
        int $numPortas,
        string $opcionais
    ) {
        parent::__construct(
            $especie,
            $placa, $marca, $modelo, $anoModelo, $anoFabricacao,
            $chassi, $renavam, $procedencia,
            $corExterna, $corInterna, $combustivel, $motor,
            $quilometragem, $consumoMedio, $numPortas, $opcionais
        );
    }

    public function exibirDados() {
        return parent::exibirDados() .
               "Número de Passageiros: {$this->numPassageiros} <br>";
    }
}


class VeiculoCarga extends Veiculo {

    public function __construct(
        protected float $capacidadeCarga,
        protected float $altura,
        protected float $largura,
        protected float $profundidade,

        string $especie,
        string $placa,
        string $marca,
        string $modelo,
        int $anoModelo,
        int $anoFabricacao,
        string $chassi,
        string $renavam,
        string $procedencia,
        string $corExterna,
        string $corInterna,
        string $combustivel,
        string $motor,
        float $quilometragem,
        float $consumoMedio,
        int $numPortas,
        string $opcionais
    ) {
        parent::__construct(
            $especie,
            $placa, $marca, $modelo, $anoModelo, $anoFabricacao,
            $chassi, $renavam, $procedencia,
            $corExterna, $corInterna, $combustivel, $motor,
            $quilometragem, $consumoMedio, $numPortas, $opcionais
        );
    }

    public function exibirDados() {
        return parent::exibirDados() .
               "Capacidade de Carga: {$this->capacidadeCarga} kg <br>
                Altura: {$this->altura} m <br>
                Largura: {$this->largura} m <br>
                Profundidade: {$this->profundidade} m <br>";
    }
}


$carro = new VeiculoPasseio(
    5,
    "Passeio",
    "KXM2205", "Toyota", "Corolla", 2023, 2022,
    "123456", "7891011", "Nacional",
    "Cinza", "Grafite", "Flex", "2.0",
    34000, 12.0, 4, "Ar-condicionado, multimídia"
);


$caminhao = new VeiculoCarga(
    10000, 3.5, 2.5, 8,
    "Carga",
    "LOP566", "Mercedes", "FH", 2025, 2024,
    "654321", "112233", "Importado",
    "Verde", "Cinza", "Diesel", "5.0",
    200000, 6.5, 2, "Ar-condicionado, cabine leito"
);


echo "<h2>Veículo de Passeio</h2>";
echo $carro->exibirDados();

echo "<hr>";

echo "<h2>Veículo de Carga</h2>";
echo $caminhao->exibirDados();