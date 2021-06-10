<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Cadastrar Cliente
                    <div class="alert alert-danger">
                        <strong>Success!</strong> Indicates a successful or positive action.
                      </div>
                      <button type="button" class="btn btn-primary">Primary</button>

                      <div class="card">
                        <div class="card-body">Basic card</div>
                      </div>
                    
                </div>
                <hr>
                <form method="POST" action="{{ route('cliente-store') }}">
                    @csrf
        
                   

                    <div>
                        <x-label for="name" :value="__('Nome')" />
        
                        <x-input id="nome" class="block mt-1 w-full" type="nome" name="nome" :value="old('nome_servico')"  autofocus />
                    </div>

                    <div>
                        <x-label for="name" :value="__('E-mail')" />
        
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  autofocus />
                    </div>

                    <div>
                        <x-label for="name" :value="__('Celular')" />
        
                        <x-input id="celular" class="block mt-1 w-full" type="text" name="celular" :value="old('celular')"  autofocus />
                    </div>

                    <div>
                        <x-label for="name" :value="__('Nome do Pet')" />
        
                        <x-input id="nome_pet" class="block mt-1 w-full" type="text" name="nome_pet" :value="old('nome_pet')"  autofocus />
                    </div>

                    <div>
                        <x-label for="name" :value="__('Raça')" />
        
                        <x-input id="raca" class="block mt-1 w-full" type="text" name="raca" :value="old('nome_pet')"  autofocus />
                    </div>

                    <div>
                        <x-label for="name" :value="__('Tipo Pet')" />
        
                        <x-input id="tipo_pet" class="block mt-1 w-full" type="text" name="tipo_pet" :value="old('nome_pet')"  autofocus />
                    </div>

                    <div>
                        <x-label for="name" :value="__('Vacina')" />
        
                        <x-input id="vacina" class="block mt-1 w-full" type="text" name="vacina" :value="old('nome_pet')"  autofocus />
                    </div>

                    <div>
                        <x-label for="name" :value="__('Idade Aproximada')" />
        
                        <x-input id="idade_aprox" class="block mt-1 w-full" type="text" name="idade_aprox" :value="old('nome_pet')"  autofocus />
                    </div>

                    <div>
                        <x-label for="name" :value="__('Sexo')" />
        
                        <x-input id="sexo" class="block mt-1 w-full" type="sexo" name="sexo" :value="old('nome_pet')"  autofocus />
                    </div>

                    <div>
                        <x-label for="name" :value="__('Numeros de Filhotes')" />
        
                        <x-input id="numero_filhotes" class="block mt-1 w-full" type="int" name="numero_filhotes" :value="old('nome_pet')"  autofocus />
                    </div>

                    <div>
                        <x-label for="name" :value="__('OBS')" />
        
                        <x-input id="obs" class="block mt-1 w-full" type="text" name="obs" :value="old('nome_pet')"  autofocus />
                    </div>

            
                    
        
                    
        
                    
        
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