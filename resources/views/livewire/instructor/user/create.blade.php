<div>
    @section('page-title')
        Add New User
    @endsection
    
    @section('breadcrumb')
        <x-nav-link class="breadcrumb-item" href="{{ route('instructorUsers.index') }}">
            Users
        </x-nav-link>
        <x-nav-link class="breadcrumb-item active" href="{{ route('instructorUsers.create') }}">
            Create User
        </x-nav-link>
    @endsection

    <section>
        <div class="container-fluid">
            {{-- title  --}}
            <h3>Create user form </h3>

            {{-- form  --}}
            <form wire:submit.prevent="store">
                <div class="row">

                    {{-- user name --}}
                    <div class="col-md-6">

                        <x-lms.form.form-section left="col-12" right="col-12" class="bg-light rounded p-2">
                            <x-slot name="left_content">
                                Username:
                            </x-slot>

                            <x-slot name="right_content">

                                <x-lms.form.input type="text" wire:model="username" error="username"
                                    formText="Your username that helps you to find other"
                                    placeholder="Give a eligent username" />
                            </x-slot>
                        </x-lms.form.form-section>

                    </div>

                    {{-- display nam  --}}
                    <div class="col-md-6">

                        <x-lms.form.form-section left="col-12" right="col-12" class="bg-light rounded p-2">
                            <x-slot name="left_content">
                                Display Name:
                            </x-slot>

                            <x-slot name="right_content">
                                <x-lms.form.input type="text" error="display_name" wire:model="display_name"
                                    formText="The name that you want to show every where else"
                                    placeholder="Ex: Lorem02" />
                            </x-slot>
                        </x-lms.form.form-section>

                    </div>

                    {{-- email  --}}
                    <div class="col-md-6">

                        <x-lms.form.form-section left="col-12" right="col-12" class="bg-light rounded p-2">
                            <x-slot name="left_content">
                                Email:
                            </x-slot>

                            <x-slot name="right_content">
                                <x-lms.form.input type="email" placeholder="Your valid email" error="email"
                                    wire:model="email"
                                    formText="Email must be a valid and running email. You are verified by this email." />
                            </x-slot>
                        </x-lms.form.form-section>

                    </div>

                    {{-- phone --}}
                    <div class="col-md-6">

                        <x-lms.form.form-section left="col-12" right="col-12" class="bg-light rounded p-2">
                            <x-slot name="left_content">
                                Phone:
                            </x-slot>

                            <x-slot name="right_content">
                                <x-lms.form.input type="number" placeholder="+88017 00000000" error="phone"
                                    wire:model="phone" formText="Your personal phone to get notification." />
                            </x-slot>
                        </x-lms.form.form-section>

                    </div>

                    {{-- password --}}
                    <div class="col-md-6  bg_light rounded">

                        <x-lms.form.form-section left="col-12" right="col-12" class="">
                            <x-slot name="left_content">
                                Password:
                            </x-slot>

                            <x-slot name="right_content">
                                <x-lms.form.input type="password" placeholder="**********" error="password"
                                    wire:model="password" />
                            </x-slot>
                        </x-lms.form.form-section>

                    </div>

                    {{-- password confirm --}}
                    <div class="col-md-6  bg_light rounded">

                        <x-lms.form.form-section left="col-12" right="col-12" class="">
                            <x-slot name="left_content">
                                Confirm Password:
                            </x-slot>

                            <x-slot name="right_content">
                                <x-lms.form.input type="password" placeholder="**********" error="password"
                                    wire:model="password" />
                            </x-slot>
                        </x-lms.form.form-section>

                    </div>

                    <div class="w-full mt-3">
                        <button class="bg_dark px-3 btn-md text_white py-2 rounded" type="submit"> <i
                                class="fas fa-save me-2"></i> Create </button>
                    </div>
            </form>
        </div>
    </section>
</div>
