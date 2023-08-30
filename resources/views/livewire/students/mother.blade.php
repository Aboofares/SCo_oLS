@if($currentStep != 3)
    <div style="display: none" class="row setup-content" id="step-3">
        @endif
        <div class="col-xs-12">
            <div class="col-md-12">

                <div class="form">
                    <br>

                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label
                                    for="TeacherName">{{trans('employee.Nationality')}}</label>
                                <div class="position-relative has-icon-left">

                                    <select class="form-control" wire:model="MNationality_id">
                                        <option selected disabled>{{trans('family.Choose')}}
                                            ...
                                        </option>
                                        @foreach($Nationalities as $Nationality)
                                            <option
                                                value="{{$Nationality->id}}">{{$Nationality->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('MNationality_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-control-position">
                                        <i class="ft-flag"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label
                                    for="TeacherName">{{trans('employee.religion')}}</label>
                                <div class="position-relative has-icon-left">

                                    <select class="form-control" wire:model="MReligion_id">
                                        <option selected disabled>{{trans('family.Choose')}}
                                            ...
                                        </option>
                                        @foreach($Religions as $religion)
                                            <option
                                                value="{{$religion->id}}">{{$religion->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('MReligion_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-control-position">
                                        <i class="ft-cloud"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{trans('student.Date_of_Birth')}}</label>
                                <div class="position-relative has-icon-left">
                                    <input class="form-control" type="date" wire:model="MBirthdate"  >

                                    @error('MBirthdate')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-control-position">
                                        <i class="ft-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="form-actions">
                        @if($updateMode)

                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="thirdStepSubmit_edit"
                                    type="button">{{trans('family.Next')}}
                            </button>
                            <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button"
                                    wire:click="back(2)">{{trans('family.Back')}}</button>
                        @else

                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="ThirdStepSubmit"
                                    type="button">{{trans('family.Next')}}
                            </button>
                            <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button"
                                    wire:click="back(2)">{{trans('family.Back')}}</button>
                        @endif





                    </div>
                    <br>
                </div>


            </div>
        </div>
    </div>
