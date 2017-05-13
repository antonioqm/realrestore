<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CitiesMatoGrossoSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cities')->insert([
        	['name' => 'Acorizal', 'state_id' => 11],
            ['name' => 'Água Boa', 'state_id' => 11],
            ['name' => 'Alta Floresta', 'state_id' => 11],
            ['name' => 'Alto Araguaia', 'state_id' => 11],
            ['name' => 'Alto Boa Vista', 'state_id' => 11],
            ['name' => 'Alto Garças', 'state_id' => 11],
            ['name' => 'Alto Paraguai', 'state_id' => 11],
            ['name' => 'Alto Taquari', 'state_id' => 11],
            ['name' => 'Apiacás', 'state_id' => 11],
            ['name' => 'Araguaiana', 'state_id' => 11],
            ['name' => 'Araguainha', 'state_id' => 11],
            ['name' => 'Araputanga', 'state_id' => 11],
            ['name' => 'Arenápolis', 'state_id' => 11],
            ['name' => 'Aripuanã', 'state_id' => 11],
            ['name' => 'Barão de Melgaço', 'state_id' => 11],
            ['name' => 'Barra do Bugres', 'state_id' => 11],
            ['name' => 'Barra do Garças', 'state_id' => 11],
            ['name' => 'Bom Jesus do Araguaia', 'state_id' => 11],
            ['name' => 'Brasnorte', 'state_id' => 11],
            ['name' => 'Cáceres', 'state_id' => 11],
            ['name' => 'Campinápolis', 'state_id' => 11],
            ['name' => 'Campo Novo do Parecis', 'state_id' => 11],
            ['name' => 'Campo Verde', 'state_id' => 11],
            ['name' => 'Campos de Júlio', 'state_id' => 11],
            ['name' => 'Canabrava do Norte', 'state_id' => 11],
            ['name' => 'Canarana', 'state_id' => 11],
            ['name' => 'Carlinda', 'state_id' => 11],
            ['name' => 'Castanheira', 'state_id' => 11],
            ['name' => 'Chapada dos Guimarães', 'state_id' => 11],
            ['name' => 'Cláudia', 'state_id' => 11],
            ['name' => 'Cocalinho', 'state_id' => 11],
            ['name' => 'Colíder', 'state_id' => 11],
            ['name' => 'Colniza', 'state_id' => 11],
            ['name' => 'Comodoro', 'state_id' => 11],
            ['name' => 'Confresa', 'state_id' => 11],
            ['name' => 'Conquista d`Oeste', 'state_id' => 11],
            ['name' => 'Cotriguaçu', 'state_id' => 11],
            ['name' => 'Cuiabá', 'state_id' => 11],
            ['name' => 'Curvelândia', 'state_id' => 11],
            ['name' => 'Curvelândia', 'state_id' => 11],
            ['name' => 'Denise', 'state_id' => 11],
            ['name' => 'Diamantino', 'state_id' => 11],
            ['name' => 'Dom Aquino', 'state_id' => 11],
            ['name' => 'Feliz Natal', 'state_id' => 11],
            ['name' => 'Figueirópolis d`Oeste', 'state_id' => 11],
            ['name' => 'Gaúcha do Norte', 'state_id' => 11],
            ['name' => 'General Carneiro', 'state_id' => 11],
            ['name' => 'Glória d`Oeste', 'state_id' => 11],
            ['name' => 'Guarantã do Norte', 'state_id' => 11],
            ['name' => 'Guiratinga', 'state_id' => 11],
            ['name' => 'Indiavaí', 'state_id' => 11],
            ['name' => 'Ipiranga do Norte', 'state_id' => 11],
            ['name' => 'Itanhangá', 'state_id' => 11],
            ['name' => 'Itaúba', 'state_id' => 11],
            ['name' => 'Itiquira', 'state_id' => 11],
            ['name' => 'Jaciara', 'state_id' => 11],
            ['name' => 'Jangada', 'state_id' => 11],
            ['name' => 'Jauru', 'state_id' => 11],
            ['name' => 'Juara', 'state_id' => 11],
            ['name' => 'Juína', 'state_id' => 11],
            ['name' => 'Juruena', 'state_id' => 11],
            ['name' => 'Juscimeira', 'state_id' => 11],
            ['name' => 'Lambari d`Oeste', 'state_id' => 11],
            ['name' => 'Lucas do Rio Verde', 'state_id' => 11],
            ['name' => 'Luciára', 'state_id' => 11],
            ['name' => 'Marcelândia', 'state_id' => 11],
            ['name' => 'Matupá', 'state_id' => 11],
            ['name' => 'Mirassol d`Oeste', 'state_id' => 11],
            ['name' => 'Nobres', 'state_id' => 11],
            ['name' => 'Nortelândia', 'state_id' => 11],
            ['name' => 'Nossa Senhora do Livramento', 'state_id' => 11],
            ['name' => 'Nova Bandeirantes', 'state_id' => 11],
            ['name' => 'Nova Brasilândia', 'state_id' => 11],
            ['name' => 'Nova Canaã do Norte', 'state_id' => 11],
            ['name' => 'Nova Guarita', 'state_id' => 11],
            ['name' => 'Nova Lacerda', 'state_id' => 11],
            ['name' => 'Nova Marilândia', 'state_id' => 11],
            ['name' => 'Nova Maringá', 'state_id' => 11],
            ['name' => 'Nova Monte verde', 'state_id' => 11],
            ['name' => 'Nova Mutum', 'state_id' => 11],
            ['name' => 'Nova Olímpia', 'state_id' => 11],
            ['name' => 'Nova Santa Helena', 'state_id' => 11],
            ['name' => 'Nova Ubiratã', 'state_id' => 11],
            ['name' => 'Nova Xavantina', 'state_id' => 11],
            ['name' => 'Novo Horizonte do Norte', 'state_id' => 11],
            ['name' => 'Novo Mundo', 'state_id' => 11],
            ['name' => 'Novo Santo Antônio', 'state_id' => 11],
            ['name' => 'Novo São Joaquim', 'state_id' => 11],
            ['name' => 'Paranaíta', 'state_id' => 11],
            ['name' => 'Paranatinga', 'state_id' => 11],
            ['name' => 'Pedra Preta', 'state_id' => 11],
            ['name' => 'Peixoto de Azevedo', 'state_id' => 11],
            ['name' => 'Planalto da Serra', 'state_id' => 11],
            ['name' => 'Poconé', 'state_id' => 11],
            ['name' => 'Pontal do Araguaia', 'state_id' => 11],
            ['name' => 'Ponte Branca', 'state_id' => 11],
            ['name' => 'Pontes e Lacerda', 'state_id' => 11],
            ['name' => 'Porto Alegre do Norte', 'state_id' => 11],
            ['name' => 'Porto dos Gaúchos', 'state_id' => 11],
            ['name' => 'Porto Esperidião', 'state_id' => 11],
            ['name' => 'Porto Estrela', 'state_id' => 11],
            ['name' => 'Poxoréo', 'state_id' => 11],
            ['name' => 'Primavera do Leste', 'state_id' => 11],
            ['name' => 'Querência', 'state_id' => 11],
            ['name' => 'Reserva do Cabaçal', 'state_id' => 11],
            ['name' => 'Ribeirão Cascalheira', 'state_id' => 11],
            ['name' => 'Ribeirãozinho', 'state_id' => 11],
            ['name' => 'Rio Branco', 'state_id' => 11],
            ['name' => 'Rondolândia', 'state_id' => 11],
            ['name' => 'Rondonópolis', 'state_id' => 11],
            ['name' => 'Rosário Oeste', 'state_id' => 11],
            ['name' => 'Salto do Céu', 'state_id' => 11],
            ['name' => 'Santa Carmem', 'state_id' => 11],
            ['name' => 'Santa Cruz do Xingu', 'state_id' => 11],
            ['name' => 'Santa Rita do Trivelato', 'state_id' => 11],
            ['name' => 'Santa Terezinha', 'state_id' => 11],
            ['name' => 'Santo Afonso', 'state_id' => 11],
            ['name' => 'Santo Antônio do Leste', 'state_id' => 11],
            ['name' => 'Santo Antônio do Leverger', 'state_id' => 11],
            ['name' => 'São Félix do Araguaia', 'state_id' => 11],
            ['name' => 'São José do Povo', 'state_id' => 11],
            ['name' => 'São José do Rio Claro', 'state_id' => 11],
            ['name' => 'São José do Xingu', 'state_id' => 11],
            ['name' => 'São José dos Quatro Marcos', 'state_id' => 11],
            ['name' => 'São Pedro da Cipa', 'state_id' => 11],
            ['name' => 'Sapezal', 'state_id' => 11],
            ['name' => 'Serra Nova Dourada', 'state_id' => 11],
            ['name' => 'Sinop', 'state_id' => 11],
            ['name' => 'Sorriso', 'state_id' => 11],
            ['name' => 'Tabaporã', 'state_id' => 11],
            ['name' => 'Tangará da Serra', 'state_id' => 11],
            ['name' => 'Tapurah', 'state_id' => 11],
            ['name' => 'Terra Nova do Norte', 'state_id' => 11],
            ['name' => 'Tesouro', 'state_id' => 11],
            ['name' => 'Torixoréu', 'state_id' => 11],
            ['name' => 'União do Sul', 'state_id' => 11],
            ['name' => 'Vale de São Domingos', 'state_id' => 11],
            ['name' => 'Várzea Grande', 'state_id' => 11],
            ['name' => 'Vera', 'state_id' => 11],
            ['name' => 'Vila Bela da Santíssima Trindade', 'state_id' => 11],
            ['name' => 'Vila Rica', 'state_id' => 11]
        ]);

        $this->command->info('names do Mato Grosso importadas com sucesso!');
    }
}