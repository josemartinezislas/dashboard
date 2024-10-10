<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <form wire:summit="edit">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 text-center">
                            ROL
                        </th>
                        <th scope="col" class="py-3 text-center">
                            ACCION
                        </th>
                        <th scope="col" class="px-10 py-3 ">
                            NOMBRE
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CORREO
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 text-center">
                                {{ $user->rol->nombre }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex flex-col gap-2">
                                    <a wire:click="edit( {{ $user->id }} )" href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                    <a href="#"
                                        class="font-medium text-red-600 dark:text-blue-500 hover:underline">Eliminar</a>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">

                                <div class="flex flex-row items-center">
                                    <div class="h-2 w-2 rounded-full bg-green-400  mr-2 blur-[0px]"></div>
                                    <p>{{ $user->name }}</p>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </form>


        {{-- MODAL EDIT --}}
        <x-dialog-modal wire:model="userEdit.openEdit">
            <x-slot name="title">EDITAR PERFIL</x-slot>
            <x-slot name="content">
                <form wire:submit="update">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-base font-semibold leading-7 text-gray-900">Permisos de la aplicación</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Detalles del perfil</p>
                    </div>

                    <div class="mt-6 border-t border-gray-100">

                        <dl class="divide-y divide-gray-100">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Nombre completo</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <x-input disabled wire:model.live="userEdit.name" class="w-full border-none m-0"
                                        type="text"></x-input>
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">
                                    Tipo de Rol


                                </dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">


                                    <fieldset>
                                        {{-- @if ('status' == true)
                                            HABILITA -->
                                            <x-input disabled wire:model.live="userEdit.name" class="w-full border-none m-0"
                                            type="text"></x-input>
                                        @else
                                           -------  _______DESABILITA -->
                                        @endif --}}
                                       
                                        <legend class="text-sm font-semibold leading-6 text-gray-900">Seleccione el tipo
                                            de Rol</legend>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">El Rol determina los permisos
                                            dentro de la pltaforma.</p>
                                        <div class="mt-6 space-y-6">
                                            <div class="flex items-center gap-x-3">
                                                <input wire:model="userEdit.rol_id" value="1" id=""
                                                    name="" type="radio"
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                <label for=""
                                                    class="block text-sm font-medium leading-6 text-gray-900">Administrador</label>
                                            </div>
                                            <div class="flex items-center gap-x-3">
                                                <input wire:model="userEdit.rol_id" value="2" id=""
                                                    name="" type="radio"
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                <label for=""
                                                    class="block text-sm font-medium leading-6 text-gray-900">Encargado</label>
                                            </div>
                                            <div class="flex items-center gap-x-3">
                                                <input wire:model="userEdit.rol_id" value="3" id=""
                                                    name="" type="radio"
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                <label for=""
                                                    class="block text-sm font-medium leading-6 text-gray-900">Usuario</label>
                                            </div>
                                        </div>


                                        <div class="flex items-center gap-x-3 mt-4">
                                            <label class="inline-flex items-center mb-5 cursor-pointer">
                                                <span class="text-sm font-medium text-gray-900 dark:text-gray-300 mr-4">
                                                    Estatus</span>
                                                <input wire:model="userEdit.status" value="true" type="checkbox"
                                                    class="sr-only peer">
                                                <div
                                                    class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                                </div>
                                            </label>
                                        </div>

                                    </fieldset>





                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Correo</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <x-input disabled wire:model.live="userEdit.email" class="w-full border-none m-0"
                                        type="text"></x-input>
                            </div>

                        </dl>
                    </div>
                    {{-- BUTTONS FORMULARIO UPDATE --}}
                    <div class="flex justify-end">
                        <x-danger-button wire:click="$set('userEdit.openEdit', false)" class="mr-4">Cerrar</x-button>
                            <x-button wire:click="update">Actualizar</x-button>
                    </div>
                </form>
            </x-slot>
            <x-slot name="footer"></x-slot>
        </x-dialog-modal>

    </div>

</div>
@script
    <script>
        $wire.on('post-created', (event) => {
            event = Object.values(event);
            event = event[0];
            console.log(event);
            let refreshPosts = event.detail.refreshPosts
            wire.dispatch('delete', {
                postId: event

            });
            console.log(event);
            // ...
        });
    </script>
@endscript
