<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;

class ProviderController extends Controller
{

    private $provider;

    public function __construct(Provider $provider){
        $this->provider = $provider;
    }
    
    public function index()
    {
        $providers = Provider::all();


        return view('providers.index', compact('providers'));
    }

    
    public function create()
    {
        return view('providers.create');
    }

    
    public function store(Request $request)
    {
        $data = $request->all();

        $provider = $this->provider->create($data);

        return redirect()->route('providers.index');
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        $provider = $this->provider->findOrFail($id);
        

        return view('providers.edit', compact('provider'));
    }

    
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $provider = $this->provider->find($id);
        $provider->update($data);


        return redirect()->route('providers.index');
    }

    
    public function destroy($id)
    {
        $provider = $this->provider->find($id);
        $provider->delete();

        return redirect()->route('providers.index');
    }
}
