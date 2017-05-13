<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CitiesRioDeJaneiroSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cities')->insert([
        	['name' => 'Angra dos Reis', 'state_id' => 19],
            ['name' => 'Aperibé', 'state_id' => 19],
            ['name' => 'Araruama', 'state_id' => 19],
            ['name' => 'Areal', 'state_id' => 19],
            ['name' => 'Armação dos Búzios', 'state_id' => 19],
            ['name' => 'Arraial do Cabo', 'state_id' => 19],
            ['name' => 'Barra do Piraí', 'state_id' => 19],
            ['name' => 'Barra Mansa', 'state_id' => 19],
            ['name' => 'Belford Roxo', 'state_id' => 19],
            ['name' => 'Bom Jardim', 'state_id' => 19],
            ['name' => 'Bom Jesus do Itabapoana', 'state_id' => 19],
            ['name' => 'Cabo Frio', 'state_id' => 19],
            ['name' => 'Cachoeiras de Macacu', 'state_id' => 19],
            ['name' => 'Cambuci', 'state_id' => 19],
            ['name' => 'Campos dos Goytacazes', 'state_id' => 19],
            ['name' => 'Cantagalo', 'state_id' => 19],
            ['name' => 'Carapebus', 'state_id' => 19],
            ['name' => 'Cardoso Moreira', 'state_id' => 19],
            ['name' => 'Carmo', 'state_id' => 19],
            ['name' => 'Casimiro de Abreu', 'state_id' => 19],
            ['name' => 'Comendador Levy Gasparian', 'state_id' => 19],
            ['name' => 'Conceição de Macabu', 'state_id' => 19],
            ['name' => 'Cordeiro', 'state_id' => 19],
            ['name' => 'Duas Barras', 'state_id' => 19],
            ['name' => 'Duque de Caxias', 'state_id' => 19],
            ['name' => 'Engenheiro Paulo de Frontin', 'state_id' => 19],
            ['name' => 'Guapimirim', 'state_id' => 19],
            ['name' => 'Iguaba Grande', 'state_id' => 19],
            ['name' => 'Itaboraí', 'state_id' => 19],
            ['name' => 'Itaguaí', 'state_id' => 19],
            ['name' => 'Italva', 'state_id' => 19],
            ['name' => 'Itaocara', 'state_id' => 19],
            ['name' => 'Itaperuna', 'state_id' => 19],
            ['name' => 'Itatiaia', 'state_id' => 19],
            ['name' => 'Japeri', 'state_id' => 19],
            ['name' => 'Laje do Muriaé', 'state_id' => 19],
            ['name' => 'Macaé', 'state_id' => 19],
            ['name' => 'Macuco', 'state_id' => 19],
            ['name' => 'Magé', 'state_id' => 19],
            ['name' => 'Mangaratiba', 'state_id' => 19],
            ['name' => 'Maricá', 'state_id' => 19],
            ['name' => 'Mendes', 'state_id' => 19],
            ['name' => 'Mesquita', 'state_id' => 19],
            ['name' => 'Miguel Pereira', 'state_id' => 19],
            ['name' => 'Miracema', 'state_id' => 19],
            ['name' => 'Natividade', 'state_id' => 19],
            ['name' => 'Nilópolis', 'state_id' => 19],
            ['name' => 'Niterói', 'state_id' => 19],
            ['name' => 'Nova Friburgo', 'state_id' => 19],
            ['name' => 'Nova Iguaçu', 'state_id' => 19],
            ['name' => 'Paracambi', 'state_id' => 19],
            ['name' => 'Paraíba do Sul', 'state_id' => 19],
            ['name' => 'Parati', 'state_id' => 19],
            ['name' => 'Paty do Alferes', 'state_id' => 19],
            ['name' => 'Petrópolis', 'state_id' => 19],
            ['name' => 'Pinheiral', 'state_id' => 19],
            ['name' => 'Piraí', 'state_id' => 19],
            ['name' => 'Porciúncula', 'state_id' => 19],
            ['name' => 'Porto Real', 'state_id' => 19],
            ['name' => 'Quatis', 'state_id' => 19],
            ['name' => 'Queimados', 'state_id' => 19],
            ['name' => 'Quissamã', 'state_id' => 19],
            ['name' => 'Resende', 'state_id' => 19],
            ['name' => 'Rio Bonito', 'state_id' => 19],
            ['name' => 'Rio Claro', 'state_id' => 19],
            ['name' => 'Rio das Flores', 'state_id' => 19],
            ['name' => 'Rio das Ostras', 'state_id' => 19],
            ['name' => 'Rio de Janeiro', 'state_id' => 19],
            ['name' => 'Santa Maria Madalena', 'state_id' => 19],
            ['name' => 'Santo Antônio de Pádua', 'state_id' => 19],
            ['name' => 'São Fidélis', 'state_id' => 19],
            ['name' => 'São Francisco de Itabapoana', 'state_id' => 19],
            ['name' => 'São Gonçalo', 'state_id' => 19],
            ['name' => 'São João da Barra', 'state_id' => 19],
            ['name' => 'São João de Meriti', 'state_id' => 19],
            ['name' => 'São José de Ubá', 'state_id' => 19],
            ['name' => 'São José do Vale do Rio Pret', 'state_id' => 19],
            ['name' => 'São Pedro da Aldeia', 'state_id' => 19],
            ['name' => 'São Sebastião do Alto', 'state_id' => 19],
            ['name' => 'Sapucaia', 'state_id' => 19],
            ['name' => 'Saquarema', 'state_id' => 19],
            ['name' => 'Seropédica', 'state_id' => 19],
            ['name' => 'Silva Jardim', 'state_id' => 19],
            ['name' => 'Sumidouro', 'state_id' => 19],
            ['name' => 'Tanguá', 'state_id' => 19],
            ['name' => 'Teresópolis', 'state_id' => 19],
            ['name' => 'Trajano de Morais', 'state_id' => 19],
            ['name' => 'Três Rios', 'state_id' => 19],
            ['name' => 'Valença', 'state_id' => 19],
            ['name' => 'Varre-Sai', 'state_id' => 19],
            ['name' => 'Vassouras', 'state_id' => 19],
            ['name' => 'Volta Redonda', 'state_id' => 19]
        ]);

        $this->command->info('cidades do Rio de Janeiro importadas com sucesso!');
    }
}