<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CitiesPernambucoSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cities')->insert([
        	['name' => 'Abreu e Lima', 'state_id' => 17],
            ['name' => 'Afogados da Ingazeira', 'state_id' => 17],
            ['name' => 'Afrânio', 'state_id' => 17],
            ['name' => 'Agrestina', 'state_id' => 17],
            ['name' => 'Água Preta', 'state_id' => 17],
            ['name' => 'Águas Belas', 'state_id' => 17],
            ['name' => 'Alagoinha', 'state_id' => 17],
            ['name' => 'Aliança', 'state_id' => 17],
            ['name' => 'Altinho', 'state_id' => 17],
            ['name' => 'Amaraji', 'state_id' => 17],
            ['name' => 'Angelim', 'state_id' => 17],
            ['name' => 'Araçoiaba', 'state_id' => 17],
            ['name' => 'Araripina', 'state_id' => 17],
            ['name' => 'Arcoverde', 'state_id' => 17],
            ['name' => 'Barra de Guabiraba', 'state_id' => 17],
            ['name' => 'Barreiros', 'state_id' => 17],
            ['name' => 'Belém de Maria', 'state_id' => 17],
            ['name' => 'Belém de São Francisco', 'state_id' => 17],
            ['name' => 'Belo Jardim', 'state_id' => 17],
            ['name' => 'Betânia', 'state_id' => 17],
            ['name' => 'Bezerros', 'state_id' => 17],
            ['name' => 'Bodocó', 'state_id' => 17],
            ['name' => 'Bom Conselho', 'state_id' => 17],
            ['name' => 'Bom Jardim', 'state_id' => 17],
            ['name' => 'Bonito', 'state_id' => 17],
            ['name' => 'Brejão', 'state_id' => 17],
            ['name' => 'Brejinho', 'state_id' => 17],
            ['name' => 'Brejo da Madre de Deus', 'state_id' => 17],
            ['name' => 'Buenos Aires', 'state_id' => 17],
            ['name' => 'Buíque', 'state_id' => 17],
            ['name' => 'Cabo de Santo Agostinho', 'state_id' => 17],
            ['name' => 'Cabrobó', 'state_id' => 17],
            ['name' => 'Cachoeirinha', 'state_id' => 17],
            ['name' => 'Caetés', 'state_id' => 17],
            ['name' => 'Calçado', 'state_id' => 17],
            ['name' => 'Calumbi', 'state_id' => 17],
            ['name' => 'Camaragibe', 'state_id' => 17],
            ['name' => 'Camocim de São Félix', 'state_id' => 17],
            ['name' => 'Camutanga', 'state_id' => 17],
            ['name' => 'Canhotinho', 'state_id' => 17],
            ['name' => 'Capoeiras', 'state_id' => 17],
            ['name' => 'Carnaíba', 'state_id' => 17],
            ['name' => 'Carnaubeira da Penha', 'state_id' => 17],
            ['name' => 'Carpina', 'state_id' => 17],
            ['name' => 'Caruaru', 'state_id' => 17],
            ['name' => 'Casinhas', 'state_id' => 17],
            ['name' => 'Catende', 'state_id' => 17],
            ['name' => 'Cedro', 'state_id' => 17],
            ['name' => 'Chã de Alegria', 'state_id' => 17],
            ['name' => 'Chã Grande', 'state_id' => 17],
            ['name' => 'Condado', 'state_id' => 17],
            ['name' => 'Correntes', 'state_id' => 17],
            ['name' => 'Cortês', 'state_id' => 17],
            ['name' => 'Cumaru', 'state_id' => 17],
            ['name' => 'Cupira', 'state_id' => 17],
            ['name' => 'Custódia', 'state_id' => 17],
            ['name' => 'Dormentes', 'state_id' => 17],
            ['name' => 'Escada', 'state_id' => 17],
            ['name' => 'Exu', 'state_id' => 17],
            ['name' => 'Feira Nova', 'state_id' => 17],
            ['name' => 'Fernando de Noronha', 'state_id' => 17],
            ['name' => 'Ferreiros', 'state_id' => 17],
            ['name' => 'Flores', 'state_id' => 17],
            ['name' => 'Floresta', 'state_id' => 17],
            ['name' => 'Frei Miguelinho', 'state_id' => 17],
            ['name' => 'Gameleira', 'state_id' => 17],
            ['name' => 'Garanhuns', 'state_id' => 17],
            ['name' => 'Glória do Goitá', 'state_id' => 17],
            ['name' => 'Goiana', 'state_id' => 17],
            ['name' => 'Granito', 'state_id' => 17],
            ['name' => 'Gravatá', 'state_id' => 17],
            ['name' => 'Iati', 'state_id' => 17],
            ['name' => 'Ibimirim', 'state_id' => 17],
            ['name' => 'Ibirajuba', 'state_id' => 17],
            ['name' => 'Igarassu', 'state_id' => 17],
            ['name' => 'Iguaraci', 'state_id' => 17],
            ['name' => 'Ilha de Itamaracá', 'state_id' => 17],
            ['name' => 'Inajá', 'state_id' => 17],
            ['name' => 'Ingazeira', 'state_id' => 17],
            ['name' => 'Ipojuca', 'state_id' => 17],
            ['name' => 'Ipubi', 'state_id' => 17],
            ['name' => 'Itacuruba', 'state_id' => 17],
            ['name' => 'Itaíba', 'state_id' => 17],
            ['name' => 'Itambé', 'state_id' => 17],
            ['name' => 'Itapetim', 'state_id' => 17],
            ['name' => 'Itapissuma', 'state_id' => 17],
            ['name' => 'Itaquitinga', 'state_id' => 17],
            ['name' => 'Jaboatão dos Guararapes', 'state_id' => 17],
            ['name' => 'Jaqueira', 'state_id' => 17],
            ['name' => 'Jataúba', 'state_id' => 17],
            ['name' => 'Jatobá', 'state_id' => 17],
            ['name' => 'João Alfredo', 'state_id' => 17],
            ['name' => 'Joaquim Nabuco', 'state_id' => 17],
            ['name' => 'Jucati', 'state_id' => 17],
            ['name' => 'Jupi', 'state_id' => 17],
            ['name' => 'Jurema', 'state_id' => 17],
            ['name' => 'Lagoa do Carro', 'state_id' => 17],
            ['name' => 'Lagoa do Itaenga', 'state_id' => 17],
            ['name' => 'Lagoa do Ouro', 'state_id' => 17],
            ['name' => 'Lagoa dos Gatos', 'state_id' => 17],
            ['name' => 'Lagoa Grande', 'state_id' => 17],
            ['name' => 'Lajedo', 'state_id' => 17],
            ['name' => 'Limoeiro', 'state_id' => 17],
            ['name' => 'Macaparana', 'state_id' => 17],
            ['name' => 'Machados', 'state_id' => 17],
            ['name' => 'Manari', 'state_id' => 17],
            ['name' => 'Maraial', 'state_id' => 17],
            ['name' => 'Mirandiba', 'state_id' => 17],
            ['name' => 'Moreilândia', 'state_id' => 17],
            ['name' => 'Moreno', 'state_id' => 17],
            ['name' => 'Nazaré da Mata', 'state_id' => 17],
            ['name' => 'Olinda', 'state_id' => 17],
            ['name' => 'Orobó', 'state_id' => 17],
            ['name' => 'Orocó', 'state_id' => 17],
            ['name' => 'Ouricuri', 'state_id' => 17],
            ['name' => 'Palmares', 'state_id' => 17],
            ['name' => 'Palmeirina', 'state_id' => 17],
            ['name' => 'Panelas', 'state_id' => 17],
            ['name' => 'Paranatama', 'state_id' => 17],
            ['name' => 'Parnamirim', 'state_id' => 17],
            ['name' => 'Passira', 'state_id' => 17],
            ['name' => 'Paudalho', 'state_id' => 17],
            ['name' => 'Paulista', 'state_id' => 17],
            ['name' => 'Pedra', 'state_id' => 17],
            ['name' => 'Pesqueira', 'state_id' => 17],
            ['name' => 'Petrolândia', 'state_id' => 17],
            ['name' => 'Petrolina', 'state_id' => 17],
            ['name' => 'Poção', 'state_id' => 17],
            ['name' => 'Pombos', 'state_id' => 17],
            ['name' => 'Primavera', 'state_id' => 17],
            ['name' => 'Quipapá', 'state_id' => 17],
            ['name' => 'Quixaba', 'state_id' => 17],
            ['name' => 'Recife', 'state_id' => 17],
            ['name' => 'Riacho das Almas', 'state_id' => 17],
            ['name' => 'Ribeirão', 'state_id' => 17],
            ['name' => 'Rio Formoso', 'state_id' => 17],
            ['name' => 'Sairé', 'state_id' => 17],
            ['name' => 'Salgadinho', 'state_id' => 17],
            ['name' => 'Salgueiro', 'state_id' => 17],
            ['name' => 'Saloá', 'state_id' => 17],
            ['name' => 'Sanharó', 'state_id' => 17],
            ['name' => 'Santa Cruz', 'state_id' => 17],
            ['name' => 'Santa Cruz da Baixa Verde', 'state_id' => 17],
            ['name' => 'Santa Cruz do Capibaribe', 'state_id' => 17],
            ['name' => 'Santa Filomena', 'state_id' => 17],
            ['name' => 'Santa Maria da Boa Vista', 'state_id' => 17],
            ['name' => 'Santa Maria do Cambucá', 'state_id' => 17],
            ['name' => 'Santa Terezinha', 'state_id' => 17],
            ['name' => 'São Benedito do Sul', 'state_id' => 17],
            ['name' => 'São Bento do Una', 'state_id' => 17],
            ['name' => 'São Caitano', 'state_id' => 17],
            ['name' => 'São João', 'state_id' => 17],
            ['name' => 'São Joaquim do Monte', 'state_id' => 17],
            ['name' => 'São José da Coroa Grande', 'state_id' => 17],
            ['name' => 'São José do Belmonte', 'state_id' => 17],
            ['name' => 'São José do Egito', 'state_id' => 17],
            ['name' => 'São Lourenço da Mata', 'state_id' => 17],
            ['name' => 'São Vicente Ferrer', 'state_id' => 17],
            ['name' => 'Serra Talhada', 'state_id' => 17],
            ['name' => 'Serrita', 'state_id' => 17],
            ['name' => 'Sertânia', 'state_id' => 17],
            ['name' => 'Sirinhaém', 'state_id' => 17],
            ['name' => 'Solidão', 'state_id' => 17],
            ['name' => 'Surubim', 'state_id' => 17],
            ['name' => 'Tabira', 'state_id' => 17],
            ['name' => 'Tacaimbó', 'state_id' => 17],
            ['name' => 'Tacaratu', 'state_id' => 17],
            ['name' => 'Tamandaré', 'state_id' => 17],
            ['name' => 'Taquaritinga do Norte', 'state_id' => 17],
            ['name' => 'Terezinha', 'state_id' => 17],
            ['name' => 'Terra Nova', 'state_id' => 17],
            ['name' => 'Timbaúba', 'state_id' => 17],
            ['name' => 'Toritama', 'state_id' => 17],
            ['name' => 'Tracunhaém', 'state_id' => 17],
            ['name' => 'Trindade', 'state_id' => 17],
            ['name' => 'Triunfo', 'state_id' => 17],
            ['name' => 'Tupanatinga', 'state_id' => 17],
            ['name' => 'Tuparetama', 'state_id' => 17],
            ['name' => 'Venturosa', 'state_id' => 17],
            ['name' => 'Verdejante', 'state_id' => 17],
            ['name' => 'Vertente do Lério', 'state_id' => 17],
            ['name' => 'Vertentes', 'state_id' => 17],
            ['name' => 'Vicência', 'state_id' => 17],
            ['name' => 'Vitória de Santo Antão', 'state_id' => 17],
            ['name' => 'Xexéu', 'state_id' => 17]
        ]);

        $this->command->info('names do Pernambuco importadas com sucesso!');
    }
}