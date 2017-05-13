<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StatesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('states')->insert([
            ['name' => 'Acre', 'uf' => 'AC'],
            ['name' => 'Alagoas', 'uf' => 'AL'],
            ['name' => 'Amapá', 'uf' => 'AP'],
            ['name' => 'Amazonas', 'uf' => 'AM'],
            ['name' => 'Bahia', 'uf' => 'BA'],
            ['name' => 'Ceará', 'uf' => 'CE'],
            ['name' => 'Distrito Federal', 'uf' => 'DF'],
            ['name' => 'Espírito Santo', 'uf' => 'ES'],
            ['name' => 'Goiás', 'uf' => 'GO'],
            ['name' => 'Maranhão', 'uf' => 'MA'],
            ['name' => 'Mato Grosso', 'uf' => 'MT'],
            ['name' => 'Mato Grosso do Sul', 'uf' => 'MS'],
            ['name' => 'Minas Gerais', 'uf' => 'MG'],
            ['name' => 'Pará', 'uf' => 'PA'],
            ['name' => 'Paraíba', 'uf' => 'PB'],
            ['name' => 'Paraná', 'uf' => 'PR'],
            ['name' => 'Pernambuco', 'uf' => 'PE'],
            ['name' => 'Piauí', 'uf' => 'PI'],
            ['name' => 'Rio de Janeiro', 'uf' => 'RJ'],
            ['name' => 'Rio Grande do Norte', 'uf' => 'RN'],
            ['name' => 'Rio Grande do Sul', 'uf' => 'RS'],
            ['name' => 'Rondônia', 'uf' => 'RO'],
            ['name' => 'Roraima', 'uf' => 'RR'],
            ['name' => 'Santa Catarina', 'uf' => 'SC'],
            ['name' => 'São Paulo', 'uf' => 'SP'],
            ['name' => 'Sergipe', 'uf' => 'SE'],
            ['name' => 'Tocantins', 'uf' => 'TO']
        ]);

        $this->command->info('states Brasileiros importados com sucesso!');
    }
}