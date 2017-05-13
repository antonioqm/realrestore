<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;



// use Barryvdh\DomPDF\PDF;

class GuiaMedicoController extends Controller
{

    public function guideMedical(Request $request)
    {


        // return 'Olá';
        $term = $request->get('nome');

        if (!auth()->user()) {
        // $registereds = \App\Professional::search($term)->paginate(10);    
            $registereds = \App\Professional::whereHas('specialties',function($query) use($term){
                $query->where('name', 'like', '%'.$term.'%')
                ->orderBy('name');
            })
            ->withCount('specialties')
            ->orWhere('name', 'like', '%'.$term.'%')
            ->orWhere('key_words', 'like', '%'.$term.'%')
            ->orderBy('name')
            ->paginate(10)
            ->appends('nome', $term);
            # code...
        }else{
            // Se o Usuário estiver logado ele poderá ver os dados exluídos, com o método withTrashed
            $registereds = \App\Professional::withTrashed()->whereHas('specialties',function($query) use($term){
                $query->where('name', 'like', '%'.$term.'%')
                ->orderBy('name');
            })->withCount('specialties')
            ->orWhere('name', 'like', '%'.$term.'%')
            ->orWhere('key_words', 'like', '%'.$term.'%')
            ->orderBy('name')
            ->paginate(10)
            ->appends('nome', $term);
        }

        // $registereds->setPath('Jovem');
        
        $registereds->load([
                           'specialties' => function($query){
                            $query->orderBy('name')->get();
                        },
                        'phones',
                        'addresses' => function($query){
                            $query->with(['city'=> function($query){
                                $query->with('state');
                            }]);
                        }
                        ]);
        // dd($request->get('nome'));

            return view('guide.guia')->with(compact('registereds', 'term'));
 

    }








// GUIA ESTADOS
    public function guideState($name)
    {

        $state = \App\State::whereHas('cities', function($q){
            $q->has('addresses');
        })->where('name', 'like', '%'.$name.'%')->with(['cities'=> function($q){
            $q->whereHas('addresses',function($q){
                $q->has('professionals');
            })->orderBy('name');
        }])->get();

        // dd($state->toArray());

        return view('guide.guia-states')->with(compact('state'));

    }
// Guia CIDADES

    public function guideCity($state, $city, $id)
    {
        $cities = \App\City::whereHas('specialties', function($q) use($id){
            $q->has('professionals')->where('city_id', $id);
        })->withCount('specialties')->with(['specialties'=> function($query){$query->orderBy('name');}])
        ->get();   

        // dd($cities);
        return view('guide.guia-cities')->with(compact('cities'));

    }
// Guia ESPECIALIDADES

    public function guideSpecialty($city, $specialty, $id, $city_id)
    {
        // $registereds = \App\Professional::search($term)->paginate(10);    
        $term = $specialty;
        $registereds = \App\Professional::whereHas('specialties',function($query) use($specialty, $city_id){
            $query->where('name', 'like', $specialty)
            ->where('city_id', $city_id)
            ->orderBy('name');
        })->withCount('specialties')->orderBy('name')->paginate(10)->appends('nome', $term);

        // $registereds->setPath('Jovem');
        
        $registereds->load([
                           'specialties' => function($query){$query->orderBy('name');},
                           'phones',
                           'addresses' => function($query) use($city_id){
                            $query->with(['city'=> function($query) use($city_id){
                                $query->where('id', $city_id);
                                $query->with('state');
                            }]);
                        }
                        ]);
        // dd($request->get('nome'));
        // dd($city, $registereds->toArray(), $id, $city_id);

        // dd($registereds->toArray(), $id);

        return view('guide.guia')->with(compact('registereds', 'term'));

    }







// gera o arquivo PDF para impressão
// 
    public function guideDownload(){

        // $registereds = \App\State::whereHas('cities', function($q){
        //     $q->has('addresses');
        // })->with(['cities' => function($q){
        //     $q->has('addresses')->with(['addresses'=>function($q){
        //         $q->with(['professionals' => function($q){
        //             $q->with(['specialties', 'phones']);
        //         }]);
        //     }]);
        // }])->get();


// Para voltar ao nomral basta reirar os 3 take() que há nesse trecho de código
        $registereds = \App\State::whereHas('cities', function($q){
            $q->has('addresses')->orderBy('name');
        })->with(['cities' => function($q){
            $q->has('specialties.professionals')->orderBy('name')->with(['specialties'=>function($q){

                $q->has('professionals')->orderBy('name')->with(['professionals'=>function($q){
                // dd($q);
                    // $q->wherePivot('city_id','=', 3);
                    $q->orderBy('name');

                }])->get();
            }]);
        }])->get();





                // $registereds = \App\Professional::search($term)->paginate(10);    





        // dd($registereds->toArray());



        // return view('guide.guiapdf')->with(compact('registereds'));


        // $pdf = \PDF::loadHTML( 'guiapdf', compact('registereds'))->stream('file.pdf'); 
        
        $pdf = \App::make('dompdf.wrapper');


        // $pdf->loadHTML();
        // $pdf->loadView('guide.guiapdf', compact('registereds'))->save('storage/file.pdf');

         // $html = $pdf->loadView('guide.guiapdf');


        $pdf->loadView('guide.guiapdf', compact('registereds'));
        // O método output é para poder inserir o canvas com o número das páginas
        $pdf->output();
         // dd($html);

        $pdf->setPaper('a4')->setWarnings(false);
        $dom_pdf = $pdf->getDomPDF();
        $canvas = $dom_pdf->get_canvas();
        // $font = \App\Font_Metrics::get_font("helvetica", "bold");
        $canvas->page_text(400, 758, "Página {PAGE_NUM} de {PAGE_COUNT} - Gerado em: ".date('d/m/Y à\s G:i:s'), null, 7, array(0, 0, 0));
        $pdf->save('pdf/guia_do_usuario_real_convenios.pdf');
        // return $pdf->stream();
        return response('PDF Gerado com Sucesso!', 200);



        

        // return $pdf->download('guia-do-usuário-real-convenios.pdf');
    }





    public function guideSearchSpecialty($specialty){

        // return $name;

        $registereds = \App\Specialty::where('name', 'like', '%'.$specialty.'%');

        // dd($registereds->toArray());



    }







    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        return 'Olá '.$name;
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
        dd('cheguei');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
