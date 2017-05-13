<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CitiesParaibaSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cities')->insert([
        	['name' => 'Água Branca', 'state_id' => 15],
            ['name' => 'Aguiar', 'state_id' => 15],
            ['name' => 'Alagoa Grande', 'state_id' => 15],
            ['name' => 'Alagoa Nova', 'state_id' => 15],
            ['name' => 'Alagoinha', 'state_id' => 15],
            ['name' => 'Alcantil', 'state_id' => 15],
            ['name' => 'Algodão de Jandaíra', 'state_id' => 15],
            ['name' => 'Alhandra', 'state_id' => 15],
            ['name' => 'Amparo', 'state_id' => 15],
            ['name' => 'Aparecida', 'state_id' => 15],
            ['name' => 'Araçagi', 'state_id' => 15],
            ['name' => 'Arara', 'state_id' => 15],
            ['name' => 'Araruna', 'state_id' => 15],
            ['name' => 'Areia', 'state_id' => 15],
            ['name' => 'Areia de Baraúnas', 'state_id' => 15],
            ['name' => 'Areial', 'state_id' => 15],
            ['name' => 'Aroeiras', 'state_id' => 15],
            ['name' => 'Assunção', 'state_id' => 15],
            ['name' => 'Baía da Traição', 'state_id' => 15],
            ['name' => 'Bananeiras', 'state_id' => 15],
            ['name' => 'Baraúna', 'state_id' => 15],
            ['name' => 'Barra de Santa Rosa', 'state_id' => 15],
            ['name' => 'Barra de Santana', 'state_id' => 15],
            ['name' => 'Barra de São Miguel', 'state_id' => 15],
            ['name' => 'Bayeux', 'state_id' => 15],
            ['name' => 'Belém', 'state_id' => 15],
            ['name' => 'Belém do Brejo do Cruz', 'state_id' => 15],
            ['name' => 'Bernardino Batista', 'state_id' => 15],
            ['name' => 'Boa Ventura', 'state_id' => 15],
            ['name' => 'Boa Vista', 'state_id' => 15],
            ['name' => 'Bom Jesus', 'state_id' => 15],
            ['name' => 'Bom Sucesso', 'state_id' => 15],
            ['name' => 'Bonito de Santa Fé', 'state_id' => 15],
            ['name' => 'Boqueirão', 'state_id' => 15],
            ['name' => 'Borborema', 'state_id' => 15],
            ['name' => 'Brejo do Cruz', 'state_id' => 15],
            ['name' => 'Brejo dos Santos', 'state_id' => 15],
            ['name' => 'Caaporã', 'state_id' => 15],
            ['name' => 'Cabaceiras', 'state_id' => 15],
            ['name' => 'Cabedelo', 'state_id' => 15],
            ['name' => 'Cachoeira dos Índios', 'state_id' => 15],
            ['name' => 'Cacimba de Areia', 'state_id' => 15],
            ['name' => 'Cacimba de Dentro', 'state_id' => 15],
            ['name' => 'Cacimbas', 'state_id' => 15],
            ['name' => 'Caiçara', 'state_id' => 15],
            ['name' => 'Cajazeiras', 'state_id' => 15],
            ['name' => 'Cajazeirinhas', 'state_id' => 15],
            ['name' => 'Caldas Brandão', 'state_id' => 15],
            ['name' => 'Camalaú', 'state_id' => 15],
            ['name' => 'Campina Grande', 'state_id' => 15],
            ['name' => 'Campo de Santana', 'state_id' => 15],
            ['name' => 'Capim', 'state_id' => 15],
            ['name' => 'Caraúbas', 'state_id' => 15],
            ['name' => 'Carrapateira', 'state_id' => 15],
            ['name' => 'Casserengue', 'state_id' => 15],
            ['name' => 'Catingueira', 'state_id' => 15],
            ['name' => 'Catolé do Rocha', 'state_id' => 15],
            ['name' => 'Caturité', 'state_id' => 15],
            ['name' => 'Conceição', 'state_id' => 15],
            ['name' => 'Condado', 'state_id' => 15],
            ['name' => 'Conde', 'state_id' => 15],
            ['name' => 'Congo', 'state_id' => 15],
            ['name' => 'Coremas', 'state_id' => 15],
            ['name' => 'Coxixola', 'state_id' => 15],
            ['name' => 'Cruz do Espírito Santo', 'state_id' => 15],
            ['name' => 'Cubati', 'state_id' => 15],
            ['name' => 'Cuité', 'state_id' => 15],
            ['name' => 'Cuité de Mamanguape', 'state_id' => 15],
            ['name' => 'Cuitegi', 'state_id' => 15],
            ['name' => 'Curral de Cima', 'state_id' => 15],
            ['name' => 'Curral Velho', 'state_id' => 15],
            ['name' => 'Damião', 'state_id' => 15],
            ['name' => 'Desterro', 'state_id' => 15],
            ['name' => 'Diamante', 'state_id' => 15],
            ['name' => 'Dona Inês', 'state_id' => 15],
            ['name' => 'Duas Estradas', 'state_id' => 15],
            ['name' => 'Emas', 'state_id' => 15],
            ['name' => 'Esperança', 'state_id' => 15],
            ['name' => 'Fagundes', 'state_id' => 15],
            ['name' => 'Frei Martinho', 'state_id' => 15],
            ['name' => 'Gado Bravo', 'state_id' => 15],
            ['name' => 'Guarabira', 'state_id' => 15],
            ['name' => 'Gurinhém', 'state_id' => 15],
            ['name' => 'Gurjão', 'state_id' => 15],
            ['name' => 'Ibiara', 'state_id' => 15],
            ['name' => 'Igaracy', 'state_id' => 15],
            ['name' => 'Imaculada', 'state_id' => 15],
            ['name' => 'Ingá', 'state_id' => 15],
            ['name' => 'Itabaiana', 'state_id' => 15],
            ['name' => 'Itaporanga', 'state_id' => 15],
            ['name' => 'Itapororoca', 'state_id' => 15],
            ['name' => 'Itatuba', 'state_id' => 15],
            ['name' => 'Jacaraú', 'state_id' => 15],
            ['name' => 'Jericó', 'state_id' => 15],
            ['name' => 'João Pessoa', 'state_id' => 15],
            ['name' => 'Juarez Távora', 'state_id' => 15],
            ['name' => 'Juazeirinho', 'state_id' => 15],
            ['name' => 'Junco do Seridó', 'state_id' => 15],
            ['name' => 'Juripiranga', 'state_id' => 15],
            ['name' => 'Juru', 'state_id' => 15],
            ['name' => 'Lagoa', 'state_id' => 15],
            ['name' => 'Lagoa de Dentro', 'state_id' => 15],
            ['name' => 'Lagoa Seca', 'state_id' => 15],
            ['name' => 'Lastro', 'state_id' => 15],
            ['name' => 'Livramento', 'state_id' => 15],
            ['name' => 'Logradouro', 'state_id' => 15],
            ['name' => 'Lucena', 'state_id' => 15],
            ['name' => 'Mãe d`Água', 'state_id' => 15],
            ['name' => 'Malta', 'state_id' => 15],
            ['name' => 'Mamanguape', 'state_id' => 15],
            ['name' => 'Manaíra', 'state_id' => 15],
            ['name' => 'Marcação', 'state_id' => 15],
            ['name' => 'Mari', 'state_id' => 15],
            ['name' => 'Marizópolis', 'state_id' => 15],
            ['name' => 'Massaranduba', 'state_id' => 15],
            ['name' => 'Mataraca', 'state_id' => 15],
            ['name' => 'Matinhas', 'state_id' => 15],
            ['name' => 'Mato Grosso', 'state_id' => 15],
            ['name' => 'Maturéia', 'state_id' => 15],
            ['name' => 'Mogeiro', 'state_id' => 15],
            ['name' => 'Montadas', 'state_id' => 15],
            ['name' => 'Monte Horebe', 'state_id' => 15],
            ['name' => 'Monteiro', 'state_id' => 15],
            ['name' => 'Mulungu', 'state_id' => 15],
            ['name' => 'Natuba', 'state_id' => 15],
            ['name' => 'Nazarezinho', 'state_id' => 15],
            ['name' => 'Nova Floresta', 'state_id' => 15],
            ['name' => 'Nova Olinda', 'state_id' => 15],
            ['name' => 'Nova Palmeira', 'state_id' => 15],
            ['name' => 'Olho d`Água', 'state_id' => 15],
            ['name' => 'Olivedos', 'state_id' => 15],
            ['name' => 'Ouro Velho', 'state_id' => 15],
            ['name' => 'Parari', 'state_id' => 15],
            ['name' => 'Passagem', 'state_id' => 15],
            ['name' => 'Patos', 'state_id' => 15],
            ['name' => 'Paulista', 'state_id' => 15],
            ['name' => 'Pedra Branca', 'state_id' => 15],
            ['name' => 'Pedra Lavrada', 'state_id' => 15],
            ['name' => 'Pedras de Fogo', 'state_id' => 15],
            ['name' => 'Pedro Régis', 'state_id' => 15],
            ['name' => 'Piancó', 'state_id' => 15],
            ['name' => 'Picuí', 'state_id' => 15],
            ['name' => 'Pilar', 'state_id' => 15],
            ['name' => 'Pilões', 'state_id' => 15],
            ['name' => 'Pilõezinhos', 'state_id' => 15],
            ['name' => 'Pirpirituba', 'state_id' => 15],
            ['name' => 'Pitimbu', 'state_id' => 15],
            ['name' => 'Pocinhos', 'state_id' => 15],
            ['name' => 'Poço Dantas', 'state_id' => 15],
            ['name' => 'Poço de José de Moura', 'state_id' => 15],
            ['name' => 'Pombal', 'state_id' => 15],
            ['name' => 'Prata', 'state_id' => 15],
            ['name' => 'Princesa Isabel', 'state_id' => 15],
            ['name' => 'Puxinanã', 'state_id' => 15],
            ['name' => 'Queimadas', 'state_id' => 15],
            ['name' => 'Quixabá', 'state_id' => 15],
            ['name' => 'Remígio', 'state_id' => 15],
            ['name' => 'Riachão', 'state_id' => 15],
            ['name' => 'Riachão do Bacamarte', 'state_id' => 15],
            ['name' => 'Riachão do Poço', 'state_id' => 15],
            ['name' => 'Riacho de Santo Antônio', 'state_id' => 15],
            ['name' => 'Riacho dos Cavalos', 'state_id' => 15],
            ['name' => 'Rio Tinto', 'state_id' => 15],
            ['name' => 'Salgadinho', 'state_id' => 15],
            ['name' => 'Salgado de São Félix', 'state_id' => 15],
            ['name' => 'Santa Cecília', 'state_id' => 15],
            ['name' => 'Santa Cruz', 'state_id' => 15],
            ['name' => 'Santa Helena', 'state_id' => 15],
            ['name' => 'Santa Inês', 'state_id' => 15],
            ['name' => 'Santa Luzia', 'state_id' => 15],
            ['name' => 'Santa Rita', 'state_id' => 15],
            ['name' => 'Santa Teresinha', 'state_id' => 15],
            ['name' => 'Santana de Mangueira', 'state_id' => 15],
            ['name' => 'Santana dos Garrotes', 'state_id' => 15],
            ['name' => 'Santarém', 'state_id' => 15],
            ['name' => 'Santo André', 'state_id' => 15],
            ['name' => 'São Bentinho', 'state_id' => 15],
            ['name' => 'São Bento', 'state_id' => 15],
            ['name' => 'São Domingos de Pombal', 'state_id' => 15],
            ['name' => 'São Domingos do Cariri', 'state_id' => 15],
            ['name' => 'São Francisco', 'state_id' => 15],
            ['name' => 'São João do Cariri', 'state_id' => 15],
            ['name' => 'São João do Rio do Peixe', 'state_id' => 15],
            ['name' => 'São João do Tigre', 'state_id' => 15],
            ['name' => 'São José da Lagoa Tapada', 'state_id' => 15],
            ['name' => 'São José de Caiana', 'state_id' => 15],
            ['name' => 'São José de Espinharas', 'state_id' => 15],
            ['name' => 'São José de Piranhas', 'state_id' => 15],
            ['name' => 'São José de Princesa', 'state_id' => 15],
            ['name' => 'São José do Bonfim', 'state_id' => 15],
            ['name' => 'São José do Brejo do Cruz', 'state_id' => 15],
            ['name' => 'São José do Sabugi', 'state_id' => 15],
            ['name' => 'São José dos Cordeiros', 'state_id' => 15],
            ['name' => 'São José dos Ramos', 'state_id' => 15],
            ['name' => 'São Mamede', 'state_id' => 15],
            ['name' => 'São Miguel de Taipu', 'state_id' => 15],
            ['name' => 'São Sebastião de Lagoa de Roça', 'state_id' => 15],
            ['name' => 'São Sebastião do Umbuzeiro', 'state_id' => 15],
            ['name' => 'Sapé', 'state_id' => 15],
            ['name' => 'Seridó', 'state_id' => 15],
            ['name' => 'Serra Branca', 'state_id' => 15],
            ['name' => 'Serra da Raiz', 'state_id' => 15],
            ['name' => 'Serra Grande', 'state_id' => 15],
            ['name' => 'Serra Redonda', 'state_id' => 15],
            ['name' => 'Serraria', 'state_id' => 15],
            ['name' => 'Sertãozinho', 'state_id' => 15],
            ['name' => 'Sobrado', 'state_id' => 15],
            ['name' => 'Solânea', 'state_id' => 15],
            ['name' => 'Soledade', 'state_id' => 15],
            ['name' => 'Sossêgo', 'state_id' => 15],
            ['name' => 'Sousa', 'state_id' => 15],
            ['name' => 'Sumé', 'state_id' => 15],
            ['name' => 'Taperoá', 'state_id' => 15],
            ['name' => 'Tavares', 'state_id' => 15],
            ['name' => 'Teixeira', 'state_id' => 15],
            ['name' => 'Tenório', 'state_id' => 15],
            ['name' => 'Triunfo', 'state_id' => 15],
            ['name' => 'Uiraúna', 'state_id' => 15],
            ['name' => 'Umbuzeiro', 'state_id' => 15],
            ['name' => 'Várzea', 'state_id' => 15],
            ['name' => 'Vieirópolis', 'state_id' => 15],
            ['name' => 'Vista Serrana', 'state_id' => 15],
            ['name' => 'Zabelê', 'state_id' => 15]
        ]);

        $this->command->info('names da Paraíba importadas com sucesso!');
    }
}