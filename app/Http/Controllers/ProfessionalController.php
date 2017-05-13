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

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->authorize('list-professional');

        return redirect()->route('admin.professionals.index');

        $professional = Professional::orderBy('name')->with(['specialties','addresses'=>function($q){
            $q->with(['city'=> function($q){
                $q->orderBy('name')->get();
            }]);
        }, 'phones'])->paginate(20);



        return view('guide.professional-list');   
        // return $professional;   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $this->authorize('list-professional');
        return redirect()->route('admin.professionals.create');

        $specialties = \App\Specialty::orderBy('name')->pluck('name', 'id');
        $cities = \App\City::orderBy('name')->pluck('name', 'id');
                  // dd($specialties);

        return view('guide.professional-create')->with(compact('specialties', 'cities'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->toArray());
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
         return redirect()->route('admin.professionals.edit');
        //
        // $this->authorize('list-professional');
        if (Gate::denies('list-professional')) {
            abort(404);
            # code...
        }


        $professional = Professional::with(['addresses', 'phones'])->find($id);

        $city_id = $professional->addresses[0]->city_id;


        $specialties = Specialty::where('city_id', $city_id)->orderBy('name')->get(['id', 'name'])->pluck('name', 'id');








        return view('guide.professional-edit')->with(compact('professional', 'specialties'));
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
        $this->validate($request, [
            'name' => 'required',
            // 'register' => 'required'
        ]);

        // dd($request->get('specialty'));


        // dd($request->toArray());
        $professional = Professional::find($id);
        // dd($professional->specialtiess);

        $professional_data =
        [ 
            'name'=> $request->get('name'),
            'register'=> $request->get('register'),
            'metts'=> $request->get('metts'),
            'key_words'=> $request->get('key_words'),            
        ];


        // Atualizando telefones
        $i = 0;
        $number = $request->get('number');
        $type = $request->get('type');
        $ddd = $request->get('ddd');
        // dd($number);

        foreach ($request->phone_id as $id) {
            $phone = Phone::find($id);
            $data = ['number' => $number[$i], 'ddd' => $ddd[$i], 'type' => $type[$i],];
            $phone->update($data);
            // $data = ['number'=> $number];
            // echo $phone->id;
            $i ++;
        }

                // Atualizando telefones
        $j = 0;
        $address = $request->get('address');
        $clinic = $request->get('clinic');
        $thoroughfare = $request->get('thoroughfare');
        $district = $request->get('district');
        $complement = $request->get('complement');
        // dd($number);

        foreach ($request->address_id as $id) {
            $addresses = Address::find($id);
            $data = ['address' => $address[$j],
            'clinic' => $clinic[$j],
            'thoroughfare' => $thoroughfare[$j],
            'district' => $district[$j],
            'address' => $address[$j],
            'complement' => $complement[$j]];
            $addresses->update($data);

            // dd($data);
            // $data = ['number'=> $number];
            // echo $phone->id;
            $j ++;
        }




        // dd($phone->toArray());
        $professional->update($professional_data);
        $professional->specialties()->sync($request->get('specialty'));

        auth()->user()->notify(new UpdateProfessional($professional));
        
        return redirect()->route('admin.professional.index')
                        ->with('success',$request->name.' - atualizado com sucesso');







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        // $professional = Professional::find($id);

        $professional = Professional::find($id);
        $name = $professional->name;

        // dd($professional->toArray());
        $professional->delete();
        return redirect()->route('admin.professional.index')
                        ->with('success', $name.' Foi excluído com sucesso');

        // dd($professional);
    }
}
