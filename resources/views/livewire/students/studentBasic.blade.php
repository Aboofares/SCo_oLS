

    @if($currentStep != 1)
        <div style="display: none" class="row setup-content" id="step-1">
            @endif
            <div class="col-xs-12">
                <div class="col-md-12">
                        <div class="form">
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label>{{trans('student.name_ar')}}</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" wire:model="SName_ar" class="form-control">
                                        @error('SName_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-control-position">
                                            <i class="ft-type"></i>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{trans('family.Name_Father')}}</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" wire:model="FName_ar" class="form-control">
                                            @error('FName_ar')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="ft-type"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{trans('family.Name_Mother')}}</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" wire:model="MName_ar" class="form-control">
                                            @error('MName_ar')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="ft-type"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{trans('student.name_en')}}</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" wire:model="SName_en" class="form-control">
                                            @error('SName_en')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="ft-type"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{trans('family.Name_Father_en')}}</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" wire:model="FName_en" class="form-control">
                                            @error('FName_en')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="ft-type"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{trans('family.Name_Mother_en')}}</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" wire:model="MName_en" class="form-control">
                                            @error('MName_en')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="ft-type"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                <div class="form-group">
                                    <label for="TeacherName">{{trans('employee.Gender')}}</label>
                                    <div class="position-relative has-icon-left">

                                        <select class="form-control" wire:model="SGender_id">
                                            <option selected disabled>{{trans('family.Choose')}}
                                                ...
                                            </option>
                                                @foreach($Genders as $gender)
                                                    <option value="{{$gender->id}}">{{$gender->name}}</option>
                                                @endforeach
                                        </select>
                                        @error('SGender_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-control-position">
                                            <i class="ft-shield"></i>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="form-group">
                                    <label
                                        for="TeacherName">{{trans('employee.Nationality')}}</label>
                                    <div class="position-relative has-icon-left">

                                        <select class="form-control" wire:model="SNationality_id">
                                            <option selected disabled>{{trans('family.Choose')}}
                                                ...
                                            </option>
                                            @foreach($Nationalities as $Nationality)
                                                <option
                                                    value="{{$Nationality->id}}">{{$Nationality->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('Nationality_id')
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

                                        <select class="form-control" wire:model="SReligion_id"  >

                                            @foreach($Religions as $religion)
                                                <option value="{{$religion->id}}">{{$religion->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('SReligion_id')
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
                                                <input class="form-control" type="date" wire:model="SBirthdate" id="SBirthdate">

                                                @error('TBirthdate')
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

                                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="firstStepSubmit_edit"
                                                type="button">{{trans('family.Next')}}
                                        </button>


                                    @else

                                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="FirstStepSubmit"
                                                type="button">{{trans('family.Next')}}
                                        </button>

                                    @endif


                                </div>
                            <br>
                        </div>
                </div>
            </div>
        </div>

