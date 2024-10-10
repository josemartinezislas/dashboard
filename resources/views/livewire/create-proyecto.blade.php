<div>
    {{-- INPUT SEARCH... --}}


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="py-2 p-4 bg-white dark:bg-gray-900 flex flex-row justify-between items-center ">
            <div class="relative mt-1">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Buscar proyecto">
            </div>
            {{-- BUTTON CREAR --}}
            <x-button wire:click="$set('proyCreate.openSave', true)" class="h-8">NUEVO</x-button>
        </div>
        {{-- TABLA --}}
        <table class="w-full text-sm text-left text-gray-500 table-fixed  ">
            <thead class="text-xs text-gray-700 uppercase md:bg-gray-50 sm:bg-red-50 ">
                <tr class="">
                    <th scope="col" class="px-6 py-3 md:w-1/2 sm:w-80  "> Proyecto </th>
                    <th scope="col" class="px-6 text-center py-3"> Tipo </th>
                    <th scope="col" class="px-6 text-center py-3 md:w-48 sm:w-32"> Estatus </th>
                    <th scope="col" class="px-6 text-center py-3"> Fase </th>
                    <th scope="col" class="px-6 text-center py-3 md:w-40">Acciones </th>
                </tr>
            </thead>
            @foreach ($proyectos as $proyecto)
                <tbody>
                    <tr
                        class=" bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-8 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <p class="truncate"><i class="fas fa-paper-plane" style="color:gray"></i>
                                {{ $proyecto->proy_nom }}</p>

                            <dl class="mt-2 divide-y divide-gray-100 ">
                                <div class="flex flex-row">
                                    <dt class="w-24 text-sm font-medium leading-6 text-gray-900">
                                        Sector
                                    </dt>
                                    <dd class="text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        <p class="truncate">{{ $proyecto->sector->nombre }}</p>

                                    </dd>
                                </div>
                                <div class="flex flex-row">
                                    <dt class="w-24 text-sm font-medium leading-6 text-gray-900">
                                        Municipio
                                    </dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{ $proyecto->municipio->nombre }}
                                    </dd>
                                </div>

                            </dl>
                        </th>

                        <td class="">
                            <p>{{ $proyecto->tipo->nombre }} </p>
                        </td>
                        @if ($proyecto->status->nombre  == "Proceso")
                           
                        <td class="text-nowrap">
                            <div class="flex flex-row justify-center items-center">
                                <div class="h-2 w-2 rounded-full bg-orange-400  mr-2 blur-[0px]"></div>
                                <p class="truncate">
                                    {{ $proyecto->status->nombre }}</p>
                            </div>

                        </td>

                        @else

                        <td class="text-nowrap">
                            <div class="flex flex-row justify-center items-center">
                                <div class="h-2 w-2 rounded-full bg-green-500 mr-2 blur-[0px]"></div>
                                <p class="truncate">
                                    {{ $proyecto->status->nombre }}</p>
                            </div>

                        </td>


                        @endif
                        <td class="">
                            <p class="">{{ $proyecto->fase->nombre }} </p>
                        </td>
                        <td class="">
                            <div class="flex flex-col justify-center items-center gap-1">
                                <a wire:click="edit({{ $proyecto->id }})" href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                <a wire:click="$dispatch('deletePost', { proyId: {{ $proyecto->id }} })" href="#"
                                    class="font-medium text-red-600 dark:text-blue-500 hover:underline">Eliminar</a>

                            </div>
                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>
        <div class="bg-gray-50 p-4 ">
            {{ $proyectos->links() }}
        </div>
    </div>


    {{-- MODAL CREATE --}}
    <x-dialog-modal wire:model="proyCreate.openSave">
        <x-slot name="title">
            Crear Proyecto.
        </x-slot>
        <x-slot name="content">
            <form wire:submit="save">
                <div class="my-4">
                    <label>Proyecto</label>
                    <x-input wire:model="proyCreate.proy_nom" class="w-full"></x-input>
                </div>
                <div class="my-4 flex flex-col">
                    <label>Sector</label>
                    <x-select wire:model="proyCreate.proy_sect">
                        <option value="">--Seleccione sector --</option>
                        @foreach ($sectores as $sector)
                            <option value="{{ $sector->id }}"> {{ $sector->nombre }} </option>
                        @endforeach
                    </x-select>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="my-4 flex flex-col">
                        <label>Tipo</label>
                        <x-select wire:model="proyCreate.proy_tipo">
                            <option value="">--Seleccione tipo --</option>
                            @foreach ($tipos as $tipo)
                                <option value="{{ $tipo->id }}"> {{ $tipo->nombre }} </option>
                            @endforeach
                        </x-select>
                    </div>
                    <div class="my-4 flex flex-col">
                        <label>Municipio</label>
                        <x-select wire:model="proyCreate.proy_mpio">
                            <option value="">--Seleccione municipio --</option>
                            @foreach ($municipios as $municipio)
                                <option value="{{ $municipio->id }}"> {{ $municipio->nombre }} </option>
                            @endforeach
                        </x-select>
                    </div>
                    <div class="my-4 flex flex-col">
                        <label>Fase</label>
                        <x-select wire:model="proyCreate.proy_fase">
                            <option value="">--Seleccione fase --</option>
                            @foreach ($fases as $fase)
                                <option value="{{ $fase->id }}"> {{ $fase->nombre }} </option>
                            @endforeach
                        </x-select>
                    </div>

                    <div class="my-4 flex flex-col">
                        <label>Estatus</label>
                        <x-select wire:model="proyCreate.proy_stat">
                            <option value="">--Seleccione estatus --</option>
                            @foreach ($status as $estatus)
                                <option value="{{ $estatus->id }}"> {{ $estatus->nombre }} </option>
                            @endforeach
                        </x-select>
                    </div>


                </div>

                <div class="my-4 flex flex-col">
                    <label>Seguimiento</label>
                    <x-select wire:model="proyCreate.proy_seg">
                        <option value="">--Seleccione seguimiento--</option>
                        @foreach ($seguimientos as $seguimiento)
                            <option value="{{ $seguimiento->id }}"> {{ $seguimiento->nombre }} </option>
                        @endforeach
                    </x-select>
                </div>

                <div class="my-4 flex flex-col">
                    <label>Descripción</label>
                    <x-textarea wire:model="proyCreate.proy_desc">
                    </x-textarea>
                </div>
                <div class="flex flex-row gap-3">
                    <div class="my-4">
                        <label>Inversion</label>
                        <x-input wire:model="proyCreate.proy_inver" class="w-full"></x-input>
                    </div>
                    <div class="my-4">
                        <label>Empleos Directos</label>
                        <x-input wire:model="proyCreate.proy_e_dir" class="w-full"></x-input>
                    </div>
                    <div class="my-4">
                        <label>Empleos Indirectos</label>
                        <x-input wire:model="proyCreate.proy_e_ind" class="w-full"></x-input>
                    </div>

                </div>


                <div class="flex justify-end gap-2 mt-4">
                    <x-danger-button wire:click="$set('proyCreate.openSave', false)" class="h-8">CERRAR</x-button>
                        <x-button class="h-8">GUARDAR</x-button>
                </div>


            </form>

        </x-slot>
        <x-slot name="footer">

        </x-slot>
    </x-dialog-modal>

    {{-- MODAL EDITAR --}}
    <x-dialog-modal wire:model="proyEdit.openEdit">
        <x-slot name="title">
            ACTUALIZAR PROYECTO
        </x-slot>
        <x-slot name="content">
            <form wire:submit="update">
                <div class="my-4">
                    <label>Proyecto</label>
                    <x-input wire:model="proyEdit.proy_nom" class="w-full"></x-input>
                </div>
                <div class="my-4 flex flex-col">
                    <label>Sector</label>
                    <x-select wire:model="proyEdit.proy_sect">
                        <option value="">--Seleccione sector --</option>
                        @foreach ($sectores as $sector)
                            <option value="{{ $sector->id }}"> {{ $sector->nombre }} </option>
                        @endforeach
                    </x-select>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="my-4 flex flex-col">
                        <label>Tipo</label>
                        <x-select wire:model="proyEdit.proy_tipo">
                            <option value="">--Seleccione tipo --</option>
                            @foreach ($tipos as $tipo)
                                <option value="{{ $tipo->id }}"> {{ $tipo->nombre }} </option>
                            @endforeach
                        </x-select>
                    </div>

                    <div class="my-4 flex flex-col">
                        <label>Municipio</label>
                        <x-select wire:model="proyEdit.proy_mpio">
                            <option value="">--Seleccione municipio --</option>
                            @foreach ($municipios as $municipio)
                                <option value="{{ $municipio->id }}"> {{ $municipio->nombre }} </option>
                            @endforeach
                        </x-select>
                    </div>

                    <div class="my-4 flex flex-col">
                        <label>Fase</label>
                        <x-select wire:model="proyEdit.proy_fase">
                            <option value="">--Seleccione fase --</option>
                            @foreach ($fases as $fase)
                                <option value="{{ $fase->id }}"> {{ $fase->nombre }} </option>
                            @endforeach
                        </x-select>
                    </div>

                    <div class="my-4 flex flex-col">
                        <label>Estatus</label>
                        <x-select wire:model="proyEdit.proy_stat">
                            <option value="">--Seleccione estatus --</option>
                            @foreach ($status as $estatus)
                                <option value="{{ $estatus->id }}"> {{ $estatus->nombre }} </option>
                            @endforeach
                        </x-select>
                    </div>


                </div>

                <div class="my-4 flex flex-col">
                    <label>Seguimiento</label>
                    <x-select wire:model="proyEdit.proy_seg">
                        <option value="">--Seleccione seguimiento--</option>
                        @foreach ($seguimientos as $seguimiento)
                            <option value="{{ $seguimiento->id }}"> {{ $seguimiento->nombre }} </option>
                        @endforeach
                    </x-select>
                </div>

                <div class="my-4 flex flex-col">
                    <label>Descripción</label>
                    <x-textarea wire:model="proyEdit.proy_desc">
                    </x-textarea>
                </div>
                <div class="flex flex-row gap-8">
                    <div class="my-4">
                        <label>Inversion</label>
                        <x-input wire:model="proyEdit.proy_inver" class="w-full"></x-input>
                    </div>
                    <div class="my-4">
                        <label>Empleos Directos</label>
                        <x-input wire:model="proyEdit.proy_e_dir" class="w-full"></x-input>
                    </div>
                    <div class="my-4">
                        <label>Empleos Indirectos</label>
                        <x-input wire:model="proyEdit.proy_e_ind" class="w-full"></x-input>
                    </div>

                </div>
                {{-- BUTTON UPDATE --}}

                <div class="flex justify-end gap-2 mt-4">
                    <x-danger-button wire:click="$set('proyEdit.openEdit', false)" class="h-8">CERRAR</x-button>
                        <x-button wire:click="update" class="h-8">ACTUALIZAR</x-button>
                </div>


            </form>

        </x-slot>
        <x-slot name="footer">

        </x-slot>
    </x-dialog-modal>

</div>


@script
    <script>
        Livewire.on('alertSave', function(comment) {
            //alert(comment);
            //console.log(comment[0]);
            const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: comment
        });
        });
       
        Livewire.on('deletePost', proyId => {

                proyId = Object.values(proyId);
                proyId = proyId[0];
                console.log(proyId);
                Swal.fire({
                    title: '¿Seguro de eliminar el registro ' + proyId + ' ?',
                    text: '¡No podrás revertir esto!',
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, eliminar!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        let timerInterval;
                        Swal.fire({
                            title: "Alerta!",
                            html: "Eliminando registro",
                            timer: 2500,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading();
                                const timer = Swal.getPopup().querySelector("b");
                                timerInterval = setInterval(() => {
                                    timer.textContent = `${Swal.getTimerLeft()}`;
                                }, 100);
                            },
                            willClose: () => {
                                clearInterval(timerInterval);
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log("I was closed by the timer");
                                $wire.dispatch('delete', {
                                    proyId: proyId
                                });
                            }
                        });
                    }
                });
            });
    </script>
@endscript
