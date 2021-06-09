<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Servico') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Cadastrar Serviço
                </div>
                <hr>
                <form method="POST" action="{{ route('store-servico') }}">
                    @csrf
        
                    <!-- Name -->
                                        

                    <div>
                        <x-label for="name" :value="__('Nome Servico')" />
        
                        <x-input id="nome_servico" class="block mt-1 w-full" type="nome_servico" name="nome_servico" :value="old('nome_servico')"  autofocus />
                    </div>

                    <div>
                        <x-label for="name" :value="__('Descricao')" />
        
                        <x-input id="descricao" class="block mt-1 w-full" type="descricao" name="descricao" :value="old('descricao')"  autofocus />
                    </div>

                    <div>
                        <x-label for="name" :value="__('Imagem')" />
        
                        <x-input id="imagem" class="block mt-1 w-full" type="imagem" name="imagem" :value="old('imagem')"  autofocus />
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