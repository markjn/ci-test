<div>
    
    <div class="col-md-6">
    @if($updateMode)
        @include('livewire.brandUpdate')
    @else
        @include('livewire.brandCreate')
    @endif


    <table class="table">
        <tr>
            <td>Name</td>
            <td>Description</td>
            <td></td>
        </tr>

        @foreach($data as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td>{{Str::limit($row->description, 40)}}</td>
                <td>
                    <button wire:click="edit({{$row->id}})" class="btn btn-smbtn-outline-danger py-0">View/Edit</button> | 
                    <button wire:click="destroy({{$row->id}})" class="btn btn-sm btn-outline-danger py-0">Delete</button>
                </td>
            </tr>
        @endforeach
    </table>
    </div>

</div> 
