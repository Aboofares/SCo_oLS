<div>

    @if (!empty($successMessage))
        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $successMessage }}
        </div>
    @endif

    @if ($catchError)
        <div class="alert alert-danger" id="success-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $catchError }}
        </div>
    @endif


  @if($show_table)
            @include('livewire.students.viewFamily')

        @else
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary round" wire:click="HideFamilyData" >
                {{trans('family.Back')}}

            </button>
            <br><br>
            <!-- end Button trigger modal -->

            <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step ">
                    <a href="#step-1" type="button"
                       class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-danger' }}">
                        <span><i class="step-icon ft-home"></i></span>
                    </a>
                    <p>{{trans('family.Step0')}} </p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button"
                       class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-danger' }}">
                        <span><i class="step-icon ft-file-text"></i></span>
                    </a>
                    <p>{{trans('family.Step1')}} </p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button"
                       class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-danger' }}">
                        <span><i class="step-icon ft-file-text"></i></span>
                    </a>
                    <p>{{trans('family.Step2')}} </p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-4" type="button"
                       class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-danger' }}"
                       disabled="disabled">

                        <span><i class="step-icon ft-box"></i></span>
                    </a>
                    <p>{{trans('family.Step3')}} </p>
                </div>
            </div>
        </div>

        @include('livewire.students.family')
        @include('livewire.students.father')
        @include('livewire.students.mother')
        @include('livewire.students.studentBasic')

 @endif
</div>
