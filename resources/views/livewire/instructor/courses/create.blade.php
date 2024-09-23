<div>

    <x-lms.page-title>
        <div class="h4">New Course</div>
        <p class="pb-2">
            Add new course to your academy.
        </p>
    </x-lms.page-title>

    <x-lms.dashboard>

        {{-- show all validation error --}}
        {{-- <x-validation-errors /> --}}

        <section>

            {{-- {{ session()->all() }} --}}
            <div class="row m-0 justify-content-center align-items-start ">

                {{-- form nav --}}
                <div class="col-12   pb-3 ">
                    <nav class=" nav-tabs border-0 flex justify-center align-center ">

                        <button @class([
                            'text-nowrap flex align-center nav-link flex',
                            'disabled' => !$target,
                            'border-0 bg_dark text_white font-bold' => $nav == 'home',
                        ]) id="nav-home-tab" data-toggle="tab"
                            wire:click="nextTab('home')" role="tab" aria-controls="nav-home"
                            aria-selected="true
                            ">
                            <i class="md;d-none fas fa-home lg:me-2"></i> <span class="d-none d-lg-block">Name and
                                Title</span>
                        </button>

                        <button @class([
                            'text-nowrap flex align-center nav-link',
                            'disabled' => !$target,
                            'border-0 bg_dark text_white font-bold' => $nav == 'content',
                        ]) id="nav-content-tab" data-toggle="tab"
                            wire:click="nextTab('content')" role="tab" aria-controls="nav-content"
                            aria-selected="false">
                            <i class="md;d-none fas fa-info lg:me-2"></i> <span class="d-none d-lg-block">Basic
                                Info</span></button>

                        <button wire:click="nextTab('instructor')" @class([
                            'text-nowrap flex align-center nav-link',
                            'disabled' => !$target,
                            'border-0 bg_dark text_white font-bold' => $nav == 'instructor',
                        ]) id="nav-instructor-tab"
                            data-toggle="tab" href ="?nav=instructor" role="tab" aria-controls="nav-instructor"
                            aria-selected="false
                                    ">
                            <i class="md;d-none fas fa-user lg:me-2"></i> <span
                                class="d-none d-lg-block">Instructor</span></button>

                        <button wire:click="nextTab('settings')" @class([
                            'text-nowrap flex align-center nav-link',
                            'disabled' => !$target,
                            'border-0 bg_dark text_white font-bold' => $nav == 'settings',
                        ]) id="nav-settings-tab"
                            data-toggle="tab" href ="?nav=settings" role="tab" aria-controls="nav-settings"
                            aria-selected="false
                                ">
                            <i class="md;d-none fas fa-cog lg:me-2"></i> <span
                                class="d-none d-lg-block">Settings</span></button>

                        <button wire:click="nextTab('seo')" @class([
                            'text-nowrap flex align-center nav-link',
                            'disabled' => !$target,
                            'border-0 bg_dark text_white font-bold' => $nav == 'seo',
                        ]) id="nav-seo-tab"
                            data-toggle="tab" href ="?nav=seo" role="tab" aria-controls="nav-seo"
                            aria-selected="false
                                ">
                            <i class="md;d-none fas fa-search lg:me-2"></i> <span
                                class="d-none d-lg-block">SEO</span></button>
                        <button wire:click="nextTab('published')" @class([
                            'text-nowrap flex align-center nav-link',
                            'disabled' => !$target,
                            'border-0 bg_dark text_white font-bold' => $nav == 'published',
                        ]) id="nav-published-tab"
                            data-toggle="tab" href ="?nav=published" role="tab" aria-controls="nav-published"
                            aria-selected="false
                                ">
                            <i class="md;d-none fas fa-globe lg:me-2"></i> <span
                                class="d-none d-lg-block">Published</span></button>

                    </nav>
                </div>
                {{-- form nav end --}}


                <div class="col-lg-10">
                    <form wire:submit.prevent="submit">

                        {{-- basic info  --}}
                        @if ($nav == 'home')
                            <x-lms.form.accordion-card class="shadow-sm " header="font-bold">

                                <x-slot name="card_header">
                                    {{-- <label for="CourseTitle">Course Title:</label> --}}
                                    Course Title:
                                </x-slot>

                                <x-slot name="card_body">

                                    <x-lms.form.input type="text" wire:model="title" error="title"
                                        placeholder="Bais course 1 " />
                                </x-slot>

                                <x-slot name="footer">
                                    Your course base title
                                </x-slot>
                            </x-lms.form.accordion-card>

                            <x-lms.form.accordion-card header="font-bold">
                                <x-slot name="card_header">
                                    Course Info:
                                </x-slot>

                                <x-slot name="card_body">

                                    <textarea name="" id="" class="w-100" error="info "rows="10" wire:model="info"
                                        placeholder="Course Info .."></textarea>
                                    <div>
                                        <x-lms.form.form-error error="info"></x-lms.form.form-error>
                                    </div>
                                </x-slot>

                                <x-slot name="card_footer">
                                    course short info to show course card in home page.
                                </x-slot>
                            </x-lms.form.accordion-card>

                            <x-lms.form.accordion-card header="font-bold">
                                <x-slot name="card_header">
                                    Course Description
                                </x-slot>
                                <x-slot name="card_body">
                                    <x-lms.form.textarea class="p-2" rows="10" wire:model="description"
                                        placeholder="Discription" formtext="Elaborate discuss" error="description" />
                                </x-slot>
                                <x-slot name="card_footer">
                                    Elaborate discuss about your course
                                </x-slot>
                            </x-lms.form.accordion-card>

                            <x-lms.form.accordion-card header="font-bold">
                                <x-slot name="card_header">
                                    Course Price
                                </x-slot>
                                <x-slot name="card_body">

                                    <div x-data="{ isFree: 'paid' }">

                                        <div class="my-2 py-2 flex justify-start ">

                                            <div class="bg_light px-2 py-2 rounded mx-1">
                                                <input type="radio" class="m-0" id="Free" x-model="isFree"
                                                    value="free">
                                                <label class="ms-2 border-0" for="Free">Free</label>
                                            </div>

                                            <div class="border-right h-full"></div>
                                            <div class="bg_light px-2 py-2 rounded mx-1">
                                                <input type="radio" class="m-0" id="Paid" x-model="isFree"
                                                    value="paid">
                                                <label class="ms-2 border-0" for="Paid">Paid</label>
                                            </div>

                                        </div>

                                        <div class="flex justify-between" x-show="isFree == 'paid'" x-transition>
                                            <div class="w-1/2">
                                                <x-lms.form.input wire:model="price" error="price" type="number"
                                                    placeholder="Current Price" class="w-1/2" />
                                            </div>
                                            <div class="w-1/2 ms-3">
                                                <x-lms.form.input type="number" wire:model="discount"
                                                    error="discount" placeholder="Old Price" class="w-1/2" />
                                            </div>
                                        </div>

                                    </div>
                                </x-slot>
                                <x-slot name="card_footer">

                                </x-slot>
                            </x-lms.form.accordion-card>


                            {{-- next and previous button --}}
                            <div class="flex justify-center">

                                <button type="submit" class="btn bg_dark text_white btn-lg">Save & Continue
                                    <i class="fas fa-arrow-right ms-2"></i></button>
                            </div>
                        @endif
                        {{-- basic info end --}}

                        {{-- module and content start  --}}
                        @if ($nav == 'content')
                            <x-lms.form.accordion-card>

                                <x-slot name="card_header">
                                    <div class="px-3 py-2">
                                        Module and Content
                                    </div>
                                </x-slot>

                                <x-slot name="card_body">
                                    <x-lms.form.form-section left="col-12" right="col-12">
                                        <x-slot name="left_content">
                                            Module Title
                                        </x-slot>
                                        <x-slot name="right_content">

                                            <input type="text" name="description" value="{{ old('description') }}"
                                                class="w-full" placeholder="Enter module title">
                                            <hr>

                                        </x-slot>
                                    </x-lms.form.form-section>
                                </x-slot>

                                <x-slot name="card_footer">
                                    {{-- next and previous button --}}
                                    <div class="flex justify-end">

                                        <button type="submit" class="btn bg_dark text_white btn-md">Next <i
                                                class="fas fa-arrow-right ms-2"></i></button>
                                    </div>
                                </x-slot>

                            </x-lms.form.accordion-card>
                        @endif
                        {{-- module and content end  --}}

                        {{-- instructor section start --}}
                        @if ($nav == 'instructor')
                            <x-lms.form.accordion-card class="shadow-sm">
                                <x-slot name="card_header">
                                    <div class="px-3 py-2">
                                        Instructor
                                    </div>
                                </x-slot>




                                <x-slot name="card_body">
                                    <x-lms.form.form-section left="col-12" right="col-12">
                                        <x-slot name="left_content">
                                            Instructor Name
                                        </x-slot>
                                        <x-slot name="right_content">
                                            <input type="text" wire:model="title" class="w-full"
                                                placeholder="search by instructor name">

                                            <div>{{ $title }}</div>
                                            <hr>
                                        </x-slot>
                                    </x-lms.form.form-section>
                                </x-slot>

                                <x-slot name="card_footer">
                                    {{-- next and previous button --}}
                                    <div class="flex justify-end">

                                        <button type="submit" class="btn bg_dark text_white btn-md">Next <i
                                                class="fas fa-arrow-right ms-2"></i></button>
                                    </div>
                                </x-slot>


                            </x-lms.form.accordion-card>
                        @endif
                        {{-- instructor section end --}}

                        {{-- seo  --}}
                        @if ($nav == 'seo')
                            <x-lms.form.accordion-card class="shadow--sm">
                                <x-slot name="card_header">
                                    <div class="px-3 py-2">SEO (Search Engine Optimization)
                                    </div>
                                </x-slot>



                                <x-slot name="card_body">
                                    <x-lms.form.form-section>
                                        <x-slot name="left_content" left="col-12">
                                            Meta Title
                                        </x-slot>
                                        <x-slot name="right_content" right="col-8">
                                            <input type="text" wire:model="abc"
                                                placeholder="Give You Course Meta Title...." class="w-full">
                                        </x-slot>
                                    </x-lms.form.form-section>
                                    <x-lms.form.form-section>
                                        <x-slot name="left_content" left="col-12">
                                            Meta Description
                                        </x-slot>
                                        <x-slot name="right_content" right="col-8">
                                            <input type="text" wire:model="abc" placeholder="Meta Description...."
                                                class="w-full bg_brand_gray  text_black" value="General" disabled>
                                        </x-slot>
                                    </x-lms.form.form-section>
                                    <x-lms.form.form-section>
                                        <x-slot name="left_content"> Keword</x-slot>
                                        <x-slot name="right_content">
                                            <input type="text" wire:model="abc" placeholder="SEO Keyword"
                                                class="w-full">
                                            <div>
                                                <strong class="text_primary">Give your prepareable SEO keyword</strong>
                                            </div>
                                        </x-slot>
                                    </x-lms.form.form-section>
                                    <x-lms.form.form-section>
                                        <x-slot name="left_content"> Course Description</x-slot>
                                        <x-slot name="right_content">
                                            <textarea name="" id="" class="w-100 p-2" rows="10" placeholder="Description"></textarea>
                                            <div>
                                                <strong class="text_primary">details course description.</strong>
                                            </div>
                                        </x-slot>
                                    </x-lms.form.form-section>
                                    <x-lms.form.form-section>
                                        <x-slot name="left_content"> Course Price Plan</x-slot>
                                        <x-slot name="right_content">
                                        </x-slot>
                                    </x-lms.form.form-section>
                                </x-slot>

                                <x-slot name="card_footer">
                                    {{-- next and previous button --}}
                                    <div class="flex justify-end">

                                        <button type="submit" class="btn bg_dark text_white btn-md">Next <i
                                                class="fas fa-arrow-right ms-2"></i></button>
                                    </div>
                                </x-slot>


                            </x-lms.form.accordion-card>
                        @endif
                        {{-- seo end --}}

                        {{-- published  --}}
                        @if ($nav == 'published')
                            <x-lms.form.accordion-card>
                                <x-slot name="card_header">
                                    <div class="px-3 py-2">Published
                                    </div>
                                </x-slot>
                                <x-slot name="card_body">


                                    <div class="p-5 rounded bg_white shadow-sm text-center">
                                        {{-- say to published the courses --}}
                                        <p>
                                            Are you sure you want to publish this course? Once published, this course
                                            will
                                            be
                                            visible to all users.
                                        </p>
                                        <button class="bg_dark text_whte px-4 py-3 rounded m-1"> Published
                                            Course</button>
                                    </div>

                                </x-slot>
                            </x-lms.form.accordion-card>
                        @endif
                        {{-- published  --}}

                    </form>
                </div>

            </div>

            {{-- 
            <div class="flex justify-between align-center  w-full ">
                <button class="rounded px-3 py-2 bg_white">
                    Back</button>
                <button wire:click="step" class="rounded px-3 py-2 bg_dark text_white mx-3 sticky bottom-5"
                    wire:navigate.attr="disabled">Save &
                    Continue</button>
            </div> --}}


        </section>

    </x-lms.dashboard>


</div>
