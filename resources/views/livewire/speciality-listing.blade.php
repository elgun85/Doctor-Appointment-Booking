<div>
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">


        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700">
                        <!-- Header -->
                        <div
                            class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                    Speciality
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Visitors overview by country.
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">


                                    <a aria-controls="CreateModelSpeciality" data-hs-overlay="#CreateModelSpeciality"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                        href="#">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Create
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead
                                class="divide-y divide-gray-200 bg-gray-50 dark:bg-neutral-800 dark:divide-neutral-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 border-gray-200 text-start border-s dark:border-neutral-700">
                                        <span
                                            class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                                            S/N
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <span
                                            class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                                            Speciality name
                                        </span>
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <span
                                            class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                                            Actions
                                        </span>
                                    </th>


                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                @if (count($specialities) > 0)
                                    @foreach ($specialities as $speciality)
                                        <tr>
                                            <td class="w-auto h-px whitespace-nowrap">
                                                <div class="flex items-center px-6 py-2 gap-x-3">
                                                    <span
                                                        class="text-sm text-gray-600 dark:text-neutral-400">{{ $loop->iteration }}</span>
                                                </div>
                                            </td>
                                            <td class="w-auto h-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span
                                                        class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $speciality->speciality_name }}</span>
                                                    {{-- <span class="text-xs text-gray-500 dark:text-neutral-500">(23.16%)</span> --}}
                                                </div>
                                            </td>
                                            <td class="h-px colw-auto whitespace-nowrap colspan-2">
                                                <div class="px-6 py-2">
                                                    <a href="#"
                                                        class="inline-flex items-center px-4 py-3 text-sm font-medium text-blue-800 bg-blue-100 border border-transparent rounded-lg gap-x-2 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                                                        Edit
                                                    </a>
                                                    <button type="button"
                                                        class="inline-flex items-center px-4 py-3 text-sm font-medium text-red-800 bg-red-100 border border-transparent rounded-lg gap-x-2 hover:bg-red-200 focus:outline-none focus:bg-red-200 disabled:opacity-50 disabled:pointer-events-none dark:text-red-500 dark:bg-red-800/30 dark:hover:bg-red-800/20 dark:focus:bg-red-800/20">
                                                        Delete
                                                    </button>


                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3" class="px-6 py-4 text-center">
                                            <p class="text-sm text-gray-800 dark:text-neutral-200">
                                                No Data found
                                            </p>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table> <!-- End Table -->

                        <!-- Footer -->
<div class="flex justify-center w-full px-6 py-4 border-t border-gray-200 dark:border-neutral-700">
    <div class="inline-block">
        {{ $specialities->links() }}
    </div>
</div>



                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
    @include('livewire.admin.speciality.modal')


    @push('modal_script')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Livewire.on('closeModal', () => {
                    var modal = document.getElementById('CreateModelSpeciality');
                    if (modal) {
                        modal.classList.add('hidden'); // Modalı gizlət
                        modal.classList.remove('hs-overlay-open'); // Tailwind sinifini sil

                        // `backdrop` elementini tap və sil
                        let backdrop = document.getElementById('CreateModelSpeciality-backdrop');
                        if (backdrop) {
                            backdrop.remove();
                        }

                        // `body` elementindən `overflow: hidden` sinifini sil
                        document.body.style.overflow = 'auto';



                        // Livewire komponentini yenilə
                        Livewire.emit('refreshComponent');
                    }
                });
            });
        </script>
    @endpush





</div>
