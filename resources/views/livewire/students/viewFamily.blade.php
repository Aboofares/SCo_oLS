<div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary round" wire:click="ShowFamilyData" >
        {{trans('sidebar.Add')}}

    </button>
    <br><br><br><br>
    <!-- end Button trigger modal -->

    <div class="table-responsive">
        <table class="table table-striped table-bordered zero-configuration"  >
            <thead>
            <tr>
                <th>#</th>
                <th>{{trans('family.studentName')}}</th>
                <th>{{trans('family.Father')}}</th>
                <th>{{trans('family.Mother')}}</th>
                <th>{{trans('family.Nationalities_Student')}}</th>
                <th>{{trans('family.Religions_Student')}}</th>
                <th>{{trans('family.Genders_Student')}}</th>
                <th>{{trans('family.Status_Student')}}</th>
                <th>{{trans('sidebar.Processes')}} </th>
            </tr>
            </thead>
            <tbody>
            @foreach($Students as $Student)
            <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$Student->name}}</td>
                    <td>{{$Student->Families->Father_Name}}</td>
                    <td>{{$Student->Families->Mother_Name}}</td>
                    <td>{{$Student->Nationalities->name}}</td>
                    <td>{{$Student->Religions->name}}</td>
                    <td>{{$Student->Genders->name}}</td>
                     <td>{{$Student->studentStatus}}</td>
                <td>
                    <button type="button" class="btn btn-outline-warning box-shadow-4  mr-1"
                            wire:click="edit({{$Student->id}})"
                            title="{{ trans('sidebar.Edit') }}">
                        <i class="ft-bookmark"></i>
                    </button>
                    <button type="button" class="btn btn-outline-danger box-shadow-4 mr-1"
                            wire:click="delete({{$Student->id}})"
                            title="{{ trans('sidebar.Delete') }}">
                        <i class="ft-book"></i>
                    </button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
