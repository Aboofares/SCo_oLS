@if ($currentStep != 4)
    <div style="display: none" class="row setup-content" id="step-4">

        @endif


        <div class="col-xs-12">
            <div class="col-md-12">

                <div class="form">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >{{trans('family.Email')}}</label>
                                <div class="position-relative has-icon-left">

                                    <input type="email" wire:model="FEmail" class="form-control">
                                    @error('Email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-control-position">
                                        <i class="ft-mail"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >{{trans('family.Password')}}</label>
                                <div class="position-relative has-icon-left">
                                    <input type="password" wire:model="FPassword" class="form-control">
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-control-position">
                                        <i class="ft-lock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >{{trans('family.StudentEmail')}}</label>
                                <div class="position-relative has-icon-left">

                                    <input type="email" wire:model="SEmail" class="form-control">
                                    @error('Email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-control-position">
                                        <i class="ft-mail"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >{{trans('family.StudentPassword')}}</label>
                                <div class="position-relative has-icon-left">
                                    <input type="password" wire:model="SPassword" class="form-control">
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-control-position">
                                        <i class="ft-lock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="form-row">--}}
{{--                        <div class="form-group col-md-6">--}}
{{--                            <label for="Email">{{trans('family.Email')}}</label>--}}
{{--                            <input type="email" wire:model="Email"  class="form-control"   >--}}
{{--                            @error('Email')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group col">--}}
{{--                            <label for="FamilyStatus ">{{trans('family.FamilyStatus')}} </label>--}}
{{--                            <select class="custom-select my-1 mr-sm-2" wire:model="FamilyStatus">--}}
{{--                                <option selected>{{trans('sidebar.Choose-Please')}}...</option>--}}


{{--                                <option value="1">Stable</option>--}}
{{--                                <option value="2">Divorced</option>--}}
{{--                                <option value="3">not</option>--}}

{{--                            </select>--}}

{{--                        </div>--}}
{{--                        <div class="form-group col">--}}
{{--                            <label for="EducationRightTo ">{{trans('family.EducationRightTo')}} </label>--}}
{{--                            <select class="custom-select my-1 mr-sm-2" wire:model="EducationRightTo">--}}
{{--                                <option selected>{{trans('sidebar.Choose-Please')}}...</option>--}}

{{--                                <option value="0">Normal</option>--}}
{{--                                <option value="1">Father</option>--}}
{{--                                <option value="2">Mother</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-row">--}}
{{--                        <div class="form-group col-md-6">--}}
{{--                            <label for="Password">{{trans('family.Password')}}</label>--}}
{{--                            <input type="password" wire:model="Password" class="form-control" >--}}
{{--                            @error('Password')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group col">--}}
{{--                            <label for="familyNote">{{trans('family.familyNote')}} </label>--}}
{{--                            <textarea class="form-control" wire:model="familyNote"  rows="2"></textarea>--}}

{{--                        </div>--}}
{{--                    </div>--}}
                    <hr>
                    <div class="form-actions">

                        @if($updateMode)

                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="submitForm_edit"
                                    type="button">{{trans('family.Finish')}}
                            </button>
                            <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button"
                                    wire:click="back(3)">{{trans('family.Back')}}</button>
                        @else

                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="SubmitForm"
                                    type="button">{{trans('family.Finish')}}
                            </button>
                            <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button"
                                    wire:click="back(3)">{{trans('family.Back')}}</button>
                        @endif

{{--                        <button class="btn btn-primary btn-sm nextBtn btn-lg pull-right" wire:click="SubmitForm" type="button">--}}
{{--                            {{trans('family.Submit')}}--}}
{{--                        </button>--}}
{{--                        <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button" wire:click="back(3)">--}}
{{--                            {{trans('family.Back')}}--}}
{{--                        </button>--}}


                    </div>
                    <br>
                </div>


            </div>
        </div>






    </div>