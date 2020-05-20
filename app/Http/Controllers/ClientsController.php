<?php



namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */

    public function show_all($sortBy){


        $modelData=Client::all()->sortBy($sortBy);

        return view('show',['bladedata'=>$modelData]);



    }

    public function index()
    {

        return view('index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(Request $request)
    {
//        dd('request');
      Client::create($request->all());

      return redirect('/clients/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return string
     */
    public function show($id)
    {
        dd($request);
       if($id==0){
//           $modelData = DB::table('clients')
//               ->orderBy('firstName', 'asc')
//               ->get();

        $modelData=Client::all()->sortBy('foundBy');
        return view('show',['bladedata'=>$modelData]);
//
//
//
//        foreach ($client as $key=>$data){
//            if($key==1)
//                 dd($data->firstName);
//        }

       }else
           return 'show by id';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id): Response
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
