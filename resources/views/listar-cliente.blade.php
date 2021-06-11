<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Listar Cliente
                </div>

                <hr>

                @if(Session::has('message'))

                <div class="alert alert-success mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <h5 style="color: #343a40;"><strong>Parabéns!</strong> {!! Session::get('message') !!}</h5> </div>

                @endif
                <hr>
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cadastrado por:</th>
                        <th scope="col">Nome</th>
                        <th scope="col">email</th>
                        <th scope="col">celular</th>
                        <th scope="col">nome_pet</th>
                        <th scope="col">raca</th>
                        <th scope="col">tipo_pet</th>
                        <th scope="col">vacina</th>
                        <th scope="col">idade_aprox</th>
                        <th scope="col">sexo</th>
                        <th scope="col">numero_filhotes</th>
                        <th scope="col">obs</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)                            
                        
                      <tr>
                        <th scope="row">{{$cliente->id}}</th>
                        <td>{{$cliente->user}}</td>
                        <td>{{$cliente->nome}}</td>
                        <td>{{$cliente->email}}</td>
                        <td>{{$cliente->celular}}</td>
                        <td>{{$cliente->nome_pet}}</td>
                        <td>{{$cliente->raca}}</td>
                        <td>{{$cliente->tipo_pet}}</td>
                        <td>{{$cliente->vacina}}</td>
                        <td>{{$cliente->idade_aprox}}</td>
                        <td>{{$cliente->sexo}}</td>
                        <td>{{$cliente->numero_filhotes}}</td>
                        <td>{{$cliente->obs}}</td>
                      </tr>
                      @endforeach
                      
                      
                    </tbody>
                  </table>
                
        
                    
        
                    
        
                    <div class="flex items-center justify-end mt-4">                          
                        <x-button class="ml-4">
                            {{ __('Cadastrar') }}
                        </x-button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</x-app-layout>