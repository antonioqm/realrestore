<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Professional;

use App\Address;

use App\Specialty;

use App\Phone;

use App\City;

use App\State;

use Gate;

use App\Notifications\UpdateProfessional;

class AdminProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('list-professional');

        $professionals = Professional::withTrashed()->with(['specialties','addresses'=>function($q){
            $q->with(['city'=> function($q){
                $q->with(['state']);
            }]);
        }, 'phones'])->orderBy('name')->paginate(20);

// COntadores
        $countPF = Professional::where('type',  'PF')->count();
        $countPJ = Professional::where('type',  'PJ')->count();
        $countAccredited = Professional::count();
        $countCity = City::has('addresses')->count();
        $countState = State::whereHas('cities', function($q){
            $q->has('addresses');
        })->count();


        // dd($professionals->toArray());
        // return view('admin.home-vue');   
        return view('admin.home')->with(compact('professionals', 'countPF', 'countPJ', 'countAccredited', 'countState', 'countCity'));   
        // return $professional;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->toArray());
        $validator = $this->validate($request, [
            'professional.name' => 'required',
            "professional.key_words" => 'required',
            "professional.metts" => 'required'
        ]); 

        
    //     $this->validate(, [
    //     'title' => 'required|unique:posts|max:255',
    //     'body' => 'required',
    // ]);
        // Grava Profissionais
        $professionals = $request->get('professional');
        $professional = Professional::forceCreate($professionals);
        // Grava Especialidades
        $specialties = $request->get('specialties');
        $specialties = $professional->specialties()->sync($specialties);
        // Grava Endereço - Apenas um endereço
        $address = Address::create($request->get('address'));
        $addresses = $address->professionals()->attach($professional->id);
        // Grava Telefones
        $phonesInput = $request->get('phones');
        // dd($phonesInput);
        $phones = [];

        foreach($phonesInput as $phone)
        {
            $phones[] = new Phone($phone);
        }
        $phones = $professional->phones()->saveMany($phones);

        // return ['message' => 'Credenciado Cadastrado com Sucesso!'];
        // $phones = $professional->phones()->saveMany($request->get('phones'));
        // dd($address, $professional, $specialties, $addresses, $phones);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $professional = Professional::find($id);
        $professional->load(['addresses' => function($q){
                $q->with(['city' => function($q){
                    $q->with('state');
            }]);
        }, 'specialties', 'phones'=>function($q){
                $q->get();
            }])->get();

        return $professional;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request, $id);
         // Grava Profissionais
        // Localizado no Banco o Profissional a ser atualizado
        $professional = Professional::find($id);
        // Limpra o Array pegando apenas os dados que serão utilizados
        $professionalData = array_slice($request->get('professional'), 1, 8);
        // faz a atulização no banco
        $professional->update($professionalData);
        // Grava Especialidades
        $specialties = $request->get('specialties');
        $specialties = $professional->specialties()->sync($specialties);
        // Pega os dados de de Endereçø do Array do $request e de depois retira apenas os dados que serão utilizados
        $address = array_slice($request->get('address'), 1, 5);
        // Faz a atualização do endereço por meio do métoso addresses que se encontra no objeto $professional
        $professional->addresses()->update($address);

                // Grava Telefones
        $phones = $request->get('phones');

        foreach ($phones as $newPhone) {
            if (!empty($newPhone['id'])) {
                $phone = Phone::find($newPhone['id']);
                // dd($newPhone['type']);
                $phone->update($newPhone);
            }else{
                $professional->phones()->create($newPhone);
            }
        // $professional->phones()->updateOrCreate($newPhone);
        }


        dd($professional->toArray(), $address, $specialties, $phones);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professional = Professional::find($id);
        $name = $professional->name;

        // dd($professional->toArray());
        $professional->delete();
        return ['success', $name.' Foi excluído com sucesso'];
        // return 'Já já a gente apaga isso!'.$id;
    }
}
